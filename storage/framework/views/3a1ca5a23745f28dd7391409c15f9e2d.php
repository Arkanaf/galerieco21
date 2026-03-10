<?php $__env->startSection('title', 'Pengaturan Media Sosial'); ?>

<?php $__env->startSection('content'); ?>
<div class="admin-header">
    <h1>🌐 Pengaturan Media Sosial</h1>
    <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-secondary">← Dashboard</a>
</div>

<?php if(session('success')): ?>
    <div class="alert alert-success">
        ✓ <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan:</strong>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="form-container">
    <p class="section-desc">Atur link media sosial yang ditampilkan di halaman depan website.</p>
    
    <form action="<?php echo e(route('admin.settings.social.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="settings-grid">
            <div class="setting-card">
                <div class="setting-header">
                    <h3>🎵 TikTok</h3>
                    <span class="platform-badge tiktok">TikTok</span>
                </div>
                <input type="url" name="social_tiktok_link" class="form-control <?php $__errorArgs = ['social_tiktok_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       placeholder="https://www.tiktok.com/@username"
                       value="<?php echo e(old('social_tiktok_link', $tiktok ?? '')); ?>">
                <?php $__errorArgs = ['social_tiktok_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="error-text"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="setting-card">
                <div class="setting-header">
                    <h3>💬 WhatsApp</h3>
                    <span class="platform-badge whatsapp">WhatsApp</span>
                </div>
                <input type="url" name="social_whatsapp_link" class="form-control <?php $__errorArgs = ['social_whatsapp_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       placeholder="https://wa.me/628123456789"
                       value="<?php echo e(old('social_whatsapp_link', $whatsapp ?? '')); ?>">
                <?php $__errorArgs = ['social_whatsapp_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="error-text"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="setting-card">
                <div class="setting-header">
                    <h3>🛍️ Tokopedia</h3>
                    <span class="platform-badge tokopedia">Tokopedia</span>
                </div>
                <input type="url" name="social_tokopedia_link" class="form-control <?php $__errorArgs = ['social_tokopedia_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       placeholder="https://www.tokopedia.com/username"
                       value="<?php echo e(old('social_tokopedia_link', $tokopedia ?? '')); ?>">
                <?php $__errorArgs = ['social_tokopedia_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="error-text"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="setting-card">
                <div class="setting-header">
                    <h3>📸 Instagram</h3>
                    <span class="platform-badge instagram">Instagram</span>
                </div>
                <input type="url" name="social_instagram_link" class="form-control <?php $__errorArgs = ['social_instagram_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                       placeholder="https://www.instagram.com/username"
                       value="<?php echo e(old('social_instagram_link', $instagram ?? '')); ?>">
                <?php $__errorArgs = ['social_instagram_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="error-text"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">💾 Simpan Perubahan</button>
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-secondary">Batal</a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Downloads\eco21-main\eco21-main\resources\views/admin/social-settings.blade.php ENDPATH**/ ?>