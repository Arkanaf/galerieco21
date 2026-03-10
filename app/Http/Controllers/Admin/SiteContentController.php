<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteContent;
use Illuminate\Http\Request;

class SiteContentController extends Controller
{
    /**
     * Display all site content organized by sections
     */
    public function index()
    {
        $sections = SiteContent::distinct()->pluck('section')->sort();
        $contents = [];
        
        foreach ($sections as $section) {
            $contents[$section] = SiteContent::getBySection($section);
        }
        
        // Force fresh data from database
        \DB::enableQueryLog();
        
        return view('admin.content.index', compact('contents', 'sections'));
    }

    /**
     * Show form to edit a specific content
     */
    public function edit(SiteContent $content)
    {
        return view('admin.content.edit', ['siteContent' => $content]);
    }

    /**
     * Display a specific content (required by route)
     */
    public function show(SiteContent $content)
    {
        return view('admin.content.edit', ['siteContent' => $content]);
    }

    /**
     * Update content
     */
    public function update(Request $request, SiteContent $content)
    {
        $data = [];

        // Validate based on content type
        if ($content->content_type === 'image') {
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|max:2048',
                ]);
                
                // Delete old image if exists
                if ($content->image_path && file_exists(public_path($content->image_path))) {
                    @unlink(public_path($content->image_path));
                }

                // Upload new image
                $file = $request->file('image');
                $filename = time() . '_' . preg_replace('/[^A-Za-z0-9\-\.]/', '_', $file->getClientOriginalName());
                $file->move(public_path('images/content'), $filename);
                $data['image_path'] = 'images/content/' . $filename;
            }
        } else {
            // Text content validation
            $request->validate([
                'content' => 'required|string|max:5000',
            ]);
            $data['content'] = $request->input('content');
        }

        $content->update($data);

        return redirect()->route('admin.content.index')->with('success', 'Konten berhasil diupdate');
    }

    /**
     * Create new content (for adding new items)
     */
    public function create()
    {
        return view('admin.content.create');
    }

    /**
     * Store new content
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'key' => 'required|string|unique:site_content|max:255',
            'content_type' => 'required|in:text,image,textarea,number',
            'content' => 'required_unless:content_type,image|string|max:5000',
            'image' => 'required_if:content_type,image|image|max:2048',
            'section' => 'required|string|max:255',
            'order' => 'integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . preg_replace('/[^A-Za-z0-9\-\.]/', '_', $file->getClientOriginalName());
            $file->move(public_path('images/content'), $filename);
            $data['image_path'] = 'images/content/' . $filename;
        }

        SiteContent::create($data);

        return redirect()->route('admin.content.index')->with('success', 'Konten baru berhasil ditambahkan');
    }

    /**
     * Delete content
     */
    public function destroy(SiteContent $content)
    {
        try {
            // Delete image if exists
            if ($content->image_path && file_exists(public_path($content->image_path))) {
                @unlink(public_path($content->image_path));
            }

            $deleted = $content->delete();
            
            if (!$deleted) {
                return redirect()->route('admin.content.index')->with('error', 'Gagal menghapus konten');
            }

            return redirect()->route('admin.content.index')->with('success', 'Konten berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('admin.content.index')->with('error', 'Error: ' . $e->getMessage());
        }
    }

    /**
     * Show social media settings form
     */
    public function showSocialSettings()
    {
        $tiktok = SiteContent::getValue('social_tiktok_link', 'https://www.tiktok.com');
        $whatsapp = SiteContent::getValue('social_whatsapp_link', 'https://wa.me/6281234567890');
        $tokopedia = SiteContent::getValue('social_tokopedia_link', 'https://www.tokopedia.com');
        $instagram = SiteContent::getValue('social_instagram_link', 'https://www.instagram.com');

        return view('admin.social-settings', compact('tiktok', 'whatsapp', 'tokopedia', 'instagram'));
    }

    /**
     * Update social media settings
     */
    public function updateSocialSettings(Request $request)
    {
        $request->validate([
            'social_tiktok_link' => 'nullable|url|max:500',
            'social_whatsapp_link' => 'nullable|url|max:500',
            'social_tokopedia_link' => 'nullable|url|max:500',
            'social_instagram_link' => 'nullable|url|max:500',
        ]);

        $fields = [
            'social_tiktok_link' => $request->input('social_tiktok_link'),
            'social_whatsapp_link' => $request->input('social_whatsapp_link'),
            'social_tokopedia_link' => $request->input('social_tokopedia_link'),
            'social_instagram_link' => $request->input('social_instagram_link'),
        ];

        foreach ($fields as $key => $value) {
            $content = SiteContent::where('key', $key)->first();
            
            if ($content) {
                $content->update(['content' => $value]);
            } else {
                SiteContent::create([
                    'key' => $key,
                    'content' => $value,
                    'content_type' => 'text',
                    'section' => 'social',
                    'order' => 0,
                ]);
            }
        }

        return redirect()->route('admin.settings.social')->with('success', 'Link media sosial berhasil diperbarui!');
    }
}
