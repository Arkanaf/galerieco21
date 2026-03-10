@extends('admin.layout')

@section('title', 'Pengaturan Media Sosial')

@section('content')
<div class="admin-header">
    <h1>🌐 Pengaturan Media Sosial</h1>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">← Dashboard</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        ✓ {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-container">
    <p class="section-desc">Atur link media sosial yang ditampilkan di halaman depan website.</p>
    
    <form action="{{ route('admin.settings.social.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="settings-grid">
            <div class="setting-card">
                <div class="setting-header">
                    <h3>🎵 TikTok</h3>
                    <span class="platform-badge tiktok">TikTok</span>
                </div>
                <input type="url" name="social_tiktok_link" class="form-control @error('social_tiktok_link') is-invalid @enderror" 
                       placeholder="https://www.tiktok.com/@username"
                       value="{{ old('social_tiktok_link', $tiktok ?? '') }}">
                @error('social_tiktok_link')
                    <small class="error-text">{{ $message }}</small>
                @enderror
            </div>

            <div class="setting-card">
                <div class="setting-header">
                    <h3>💬 WhatsApp</h3>
                    <span class="platform-badge whatsapp">WhatsApp</span>
                </div>
                <input type="url" name="social_whatsapp_link" class="form-control @error('social_whatsapp_link') is-invalid @enderror" 
                       placeholder="https://wa.me/628123456789"
                       value="{{ old('social_whatsapp_link', $whatsapp ?? '') }}">
                @error('social_whatsapp_link')
                    <small class="error-text">{{ $message }}</small>
                @enderror
            </div>

            <div class="setting-card">
                <div class="setting-header">
                    <h3>🛍️ Tokopedia</h3>
                    <span class="platform-badge tokopedia">Tokopedia</span>
                </div>
                <input type="url" name="social_tokopedia_link" class="form-control @error('social_tokopedia_link') is-invalid @enderror" 
                       placeholder="https://www.tokopedia.com/username"
                       value="{{ old('social_tokopedia_link', $tokopedia ?? '') }}">
                @error('social_tokopedia_link')
                    <small class="error-text">{{ $message }}</small>
                @enderror
            </div>

            <div class="setting-card">
                <div class="setting-header">
                    <h3>📸 Instagram</h3>
                    <span class="platform-badge instagram">Instagram</span>
                </div>
                <input type="url" name="social_instagram_link" class="form-control @error('social_instagram_link') is-invalid @enderror" 
                       placeholder="https://www.instagram.com/username"
                       value="{{ old('social_instagram_link', $instagram ?? '') }}">
                @error('social_instagram_link')
                    <small class="error-text">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">💾 Simpan Perubahan</button>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<style>
    .admin-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2.5rem;
    }

    .section-desc {
        color: #666;
        font-size: 1rem;
        margin-bottom: 2rem;
        font-style: italic;
    }

    .form-container {
        background: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .settings-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-bottom: 2.5rem;
    }

    .setting-card {
        padding: 1.5rem;
        border: 2px solid #f0f0f0;
        border-radius: 8px;
        background: #fafafa;
        transition: all 0.3s;
    }

    .setting-card:hover {
        border-color: #fbbf24;
        background: #fffbf0;
        box-shadow: 0 4px 12px rgba(251, 191, 36, 0.1);
    }

    .setting-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .setting-header h3 {
        margin: 0;
        font-size: 1.1rem;
        color: #2d1a0f;
    }

    .platform-badge {
        font-size: 0.75rem;
        padding: 0.4rem 0.8rem;
        border-radius: 12px;
        font-weight: 600;
        color: white;
        text-transform: uppercase;
    }

    .platform-badge.tiktok {
        background: linear-gradient(135deg, #000, #25f4ee);
    }

    .platform-badge.whatsapp {
        background: #25D366;
    }

    .platform-badge.tokopedia {
        background: #2AC94F;
    }

    .platform-badge.instagram {
        background: linear-gradient(135deg, #E4405F, #833AB4);
    }

    .form-control {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 0.95rem;
        font-family: monospace;
        transition: all 0.3s;
    }

    .form-control:focus {
        outline: none;
        border-color: #fbbf24;
        box-shadow: 0 0 0 3px rgba(251, 191, 36, 0.1);
        background: white;
    }

    .form-control.is-invalid {
        border-color: #ef4444;
    }

    .error-text {
        display: block;
        color: #ef4444;
        font-size: 0.85rem;
        margin-top: 0.5rem;
    }

    .form-actions {
        display: flex;
        gap: 1rem;
        justify-content: flex-start;
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: all 0.3s;
        font-size: 0.95rem;
    }

    .btn-primary {
        background: linear-gradient(135deg, #fbbf24, #f97316);
        color: white;
    }

    .btn-primary:hover {
        background: linear-gradient(135deg, #f59e0b, #d97706);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(249, 115, 22, 0.3);
    }

    .btn-secondary {
        background: #e5e7eb;
        color: #374151;
    }

    .btn-secondary:hover {
        background: #d1d5db;
    }

    .alert {
        padding: 1rem 1.5rem;
        margin-bottom: 2rem;
        border-radius: 6px;
        border-left: 4px solid;
    }

    .alert-success {
        background: #d1fae5;
        color: #065f46;
        border-left-color: #10b981;
    }

    .alert-danger {
        background: #fee2e2;
        color: #991b1b;
        border-left-color: #ef4444;
    }

    .alert ul {
        margin: 0;
        padding-left: 1.5rem;
    }

    .alert li {
        margin: 0.5rem 0;
    }
</style>
@endsection
