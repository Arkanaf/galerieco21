

<?php
use App\Helpers\ContentHelper;
$products = \App\Models\Product::all();
?>

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1><?php echo str_replace('<br>', '<br>', nl2br(e(ContentHelper::get('hero_title', 'Oleh-oleh <span class="highlight">Khas Banyumas</span> Asli!')))); ?></h1>
            <p><?php echo e(ContentHelper::get('hero_subtitle', 'Nikmati kelezatan khas Banyumas, langsung dari UMKM lokal kepercayaan Anda')); ?></p>
            
            <a href="#produk" class="btn-primary">
                Order Sekarang
                <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
            
            <div class="hero-stats">
                <div class="hero-avatars">
                    <img src="https://ui-avatars.com/api/?name=User+1&background=random" alt="User">
                    <img src="https://ui-avatars.com/api/?name=User+2&background=random" alt="User">
                    <img src="https://ui-avatars.com/api/?name=User+3&background=random" alt="User">
                </div>
                <span><?php echo e(ContentHelper::get('hero_stock_text', '10k+ Pelanggan Mempercayai')); ?></span>
            </div>
        </div>
        
        <div class="hero-image">
            <div class="image-card hero-card">
                <img src="<?php echo e(ContentHelper::getImage('hero_image', asset('images/toko/foto_depan_toko.jpg'))); ?>" alt="Toko Galeri Eco 21">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="label">Berdiri</div>
                <div class="value"><?php echo e(ContentHelper::get('stats_year', '2021')); ?></div>
                <div class="unit">Tahun</div>
            </div>
            
            <div class="stat-card">
                <div class="label">Total Pelanggan</div>
                <div class="value"><?php echo e(ContentHelper::get('stats_customers', '100k+')); ?></div>
                <div class="unit">Produk</div>
            </div>
            
            <div class="stat-card">
                <div class="label">Produksi</div>
                <div class="value">Harian</div>
                <div class="unit">Oleh-oleh</div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about" id="tentang">
    <div class="container">
        <div class="about-content">
            <h2><?php echo e(ContentHelper::get('about_title', 'Tentang')); ?> <span class="highlight">Kami</span></h2>
            <p class="subtitle"><?php echo e(ContentHelper::get('about_subtitle', 'Selamat Datang di Galeri Eco 21')); ?></p>
            
            <p><?php echo e(ContentHelper::get('about_description', 'Galeri Eco21 adalah pusat oleh-oleh khas Purwokerto/Banyumas yang berlokasi di Jl. Mayjend Sutoyo No.27, Sokanegara. Tempat ini menyediakan berbagai jenis makanan khas, seperti getuk, gethuk goreng, mendoan, carang-carang, makanan khas, dan mendoan, menjadikannya destinasi belanja lengkap dan modern bagi wisatawan.')); ?></p>
            
            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon green">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3><?php echo e(ContentHelper::get('about_feature_1_title', 'Dikurasi Dengan Hati')); ?></h3>
                        <p><?php echo e(ContentHelper::get('about_feature_1_desc', 'Hanya produk dengan standar rasa dan kebersihan terbaik yang masuk ke rak kami.')); ?></p>
                    </div>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon yellow">
                        <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h3><?php echo e(ContentHelper::get('about_feature_2_title', 'Pemberdayaan Lokal')); ?></h3>
                        <p><?php echo e(ContentHelper::get('about_feature_2_desc', 'Mendukung ekonomi warga dengan reseller langsung dari produsen pertama.')); ?></p>
                    </div>
                </div>
            </div>
        </div>
        
            <div class="about-images">
            <div class="image-card">
                <img src="<?php echo e(ContentHelper::getImage('about_image_1', asset('images/toko/foto1.jpg'))); ?>" alt="Produk 1">
            </div>
            <div class="image-card second">
                <img src="<?php echo e(ContentHelper::getImage('about_image_2', asset('images/toko/foto2.jpg'))); ?>" alt="Produk 2">
            </div>
        </div>
    </div>
</section>


<!-- Products Showcase Section -->
<section class="products-showcase">
    <div class="container showcase-container">
        <div class="showcase-image">
            <div class="image-card">
                <img src="<?php echo e(ContentHelper::getImage('showcase_image', asset('images/toko/foto4.jpg'))); ?>" alt="Galeri Eco 21">
            </div>
        </div>
        
        <div class="showcase-content">
            <h2 class="showcase-title">Temukan <span class="highlight-yellow">Keunggulan</span><br>Produk Kami</h2>
            
            <div class="accordion-container">
                <div class="accordion-item">
                    <div class="accordion-header active">
                        <div class="accordion-title"><?php echo e(ContentHelper::get('advantage_1_title', 'Buatan Lokal!')); ?></div>
                        <button class="accordion-toggle open">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="accordion-body open">
                        <p><?php echo e(ContentHelper::get('advantage_1_desc', 'Diproduksi oleh UMKM lokal Banyumas dengan bahan berkualitas dan cita rasa autentik yang terpercaya.')); ?></p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header">
                        <div class="accordion-title"><?php echo e(ContentHelper::get('advantage_2_title', 'Harga Terjangkau')); ?></div>
                        <button class="accordion-toggle">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m7-7H5"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="accordion-body">
                        <p><?php echo e(ContentHelper::get('advantage_2_desc', 'Harga bersahabat untuk semua kalangan dengan kualitas terjamin.')); ?></p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header">
                        <div class="accordion-title"><?php echo e(ContentHelper::get('advantage_3_title', 'Lengkap & Terpercaya')); ?></div>
                        <button class="accordion-toggle">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v14m7-7H5"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="accordion-body">
                        <p><?php echo e(ContentHelper::get('advantage_3_desc', 'Koleksi produk terlengkap dan telah dipercaya oleh ribuan pelanggan.')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Best Products Section -->
<section class="best-products" id="produk">
    <div class="container">
        <span class="section-badge">The Best Product</span>
        <h2 class="section-title">3 Produk<br>Terbaik Kami</h2>
        
        <div class="products-grid">
            <?php $__currentLoopData = $topProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('product.show', $product->id)); ?>" class="product-card">
                    <div class="image-card product-card-image">
                        <?php if($product->image): ?>
                            <img src="/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" class="product-image">
                        <?php else: ?>
                            <img src="https://placehold.co/400x300/CD853F/white?text=<?php echo e(urlencode($product->name)); ?>" alt="<?php echo e($product->name); ?>" class="product-image">
                        <?php endif; ?>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Makanan Tradisional</div>
                        <h3 class="product-name"><?php echo e($product->name); ?></h3>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                        </div>
                        <div class="product-price">Rp<?php echo e(number_format($product->price,0,',','.')); ?></div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- All Products Section -->
<section class="all-products">
    <div class="container">
        <span class="section-badge">PRODUCTS</span>
        <h2 class="section-title">Buah tangan khas Banyumas</h2>
        
        <div class="products-grid-4">
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a href="<?php echo e(route('product.show', $product->id)); ?>" class="product-card-small">
                    <?php if($product->image): ?>
                        <img src="/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>" class="product-image">
                    <?php else: ?>
                        <img src="https://placehold.co/300x250/FFD700/333?text=<?php echo e(urlencode($product->name)); ?>" alt="<?php echo e($product->name); ?>" class="product-image">
                    <?php endif; ?>
                    <div class="product-info">
                        <h3 class="product-name"><?php echo e($product->name); ?></h3>
                        <div class="product-rating">
                            <span class="stars">★★★★★</span>
                        </div>
                        <div class="product-price">Rp<?php echo e(number_format($product->price,0,',','.')); ?></div>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div>Tidak ada produk tersedia.</div>
            <?php endif; ?>
        </div>
        
        <!-- Pagination -->
        <div class="pagination">
            <a href="#">←</a>
            <span class="active">1</span>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">→</a>
        </div>
    </div>
</section>

<!-- Testimonial Section -->
<section class="testimonial-section" id="testimoni">
    <div class="container">
        <div class="testimonial-grid">
            <!-- Form Ulasan -->
            <div class="testimonial-form-card">
                <h2>Tulis Ulasan Kamu</h2>
                <p>Pendapatmu sangat berarti bagi kami.</p>
                
                <form action="#" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" placeholder="Masukkan Nama Anda" required>
                        </div>
                        <div class="form-group">
                            <label>Ulasan</label>
                            <textarea name="review" placeholder="Masukkan Ulasan Anda" required></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label>(Opsional) Produk yang dibeli</label>
                            <select name="product" style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 12px; font-size: 14px; font-family: inherit; background: white;">
                                <option value="">-- Pilih Produk --</option>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($product->name); ?>"><?php echo e($product->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Penilaian Anda</label>
                            <div class="star-rating">
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn-submit">Kirim Ulasan</button>
                </form>
            </div>
            
            <!-- Image Display -->
            <div class="testimonial-image">
                <img src="https://placehold.co/500x600/D2691E/white?text=Display+Produk" alt="Display Produk">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="kontak">
    <div class="container">
        <div class="cta-overlay">
            <h2><?php echo e(ContentHelper::get('cta_title', 'Cari oleh-oleh yang berkesan?')); ?></h2>
            <p><?php echo e(ContentHelper::get('cta_subtitle', 'Kami punya pilihan istimewa untuk dibawa pulang.')); ?></p>
            
            <div class="cta-buttons">
                <a href="https://wa.me/6281234567890?text=Halo%20Galeri%20Eco%2021" target="_blank" class="btn-whatsapp">
                    <svg class="btn-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-5.031 1.378c-1.56.934-2.846 2.271-3.694 3.782C1.896 10.56 1.59 12.446 2.476 14.232c.886 1.787 2.474 3.285 4.399 4.155a9.84 9.84 0 004.844 1.245h.005c.838 0 1.666-.063 2.468-.187 2.041-.314 3.869-1.188 5.115-2.674 1.246-1.486 1.872-3.35 1.872-5.322 0-1.415-.274-2.74-.814-3.961-.54-1.22-1.31-2.3-2.282-3.16-.972-.86-2.127-1.528-3.4-1.978-1.273-.45-2.618-.68-4.028-.68zm0 0"/></svg>
                    WhatsApp
                </a>
                <a href="https://www.tokopedia.com/search?q=galeri+eco+21" target="_blank" class="btn-tokopedia">
                    <svg class="btn-icon" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/></svg>
                    Tokopedia
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Social Follow Section -->
<section class="social-follow-section" id="follow">
    <div class="container">
        <div class="follow-content">
            <div class="follow-text">
                <h2>Ikuti Eco 21 dan dapatkan update produk terbaru.</h2>
                <div class="follow-icons">
                    <a href="<?php echo e(ContentHelper::get('social_tiktok_link', 'https://www.tiktok.com')); ?>" target="_blank" class="follow-icon follow-icon-tiktok" title="TikTok">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.68v12.7a2.85 2.85 0 1 1-5.45-2.36c.342-.597.923-.99 1.6-1.06v-3.66a6.62 6.62 0 0 0-5.6 10.86 6.63 6.63 0 0 0 10.86-4.43h3.63a9.29 9.29 0 0 1-9.29 10.16 9.3 9.3 0 0 1-4.3-17.84c1.35-.78 2.93-1.04 4.3-.3Z"/></svg>
                    </a>
                    <a href="<?php echo e(ContentHelper::get('social_whatsapp_link', 'https://wa.me/6281234567890')); ?>" target="_blank" class="follow-icon follow-icon-whatsapp" title="WhatsApp">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-5.031 1.378c-1.56.934-2.846 2.271-3.694 3.782C1.896 10.56 1.59 12.446 2.476 14.232c.886 1.787 2.474 3.285 4.399 4.155a9.84 9.84 0 004.844 1.245h.005c.838 0 1.666-.063 2.468-.187 2.041-.314 3.869-1.188 5.115-2.674 1.246-1.486 1.872-3.35 1.872-5.322 0-1.415-.274-2.74-.814-3.961-.54-1.22-1.31-2.3-2.282-3.16-.972-.86-2.127-1.528-3.4-1.978-1.273-.45-2.618-.68-4.028-.68zm0 0"/></svg>
                    </a>
                    <a href="<?php echo e(ContentHelper::get('social_tokopedia_link', 'https://www.tokopedia.com')); ?>" target="_blank" class="follow-icon follow-icon-tokopedia" title="Tokopedia">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"/></svg>
                    </a>
                    <a href="<?php echo e(ContentHelper::get('social_instagram_link', 'https://www.instagram.com')); ?>" target="_blank" class="follow-icon follow-icon-instagram" title="Instagram">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.015-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zM5.838 12a6.162 6.162 0 1 1 12.324 0 6.162 6.162 0 0 1-12.324 0zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm4.965-10.322a1.44 1.44 0 1 1 2.881.001 1.44 1.44 0 0 1-2.881-.001z"/></svg>
                    </a>
                </div>
            </div>
            <div class="follow-image">
                <div class="image-card follow-card">
                    <img src="<?php echo e(ContentHelper::getImage('social_follow_image', asset('images/toko/foto_depan_toko.jpg'))); ?>" alt="Foto Depan Toko Galeri Eco 21">
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<!-- AI Chatbot -->
<div class="ai-chatbot-toggle" onclick="toggleChatbot()">
    <svg viewBox="0 0 24 24">
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
    </svg>
</div>

<div class="ai-chatbot-container" id="chatbotContainer">
    <div class="chatbot-header">
        <div class="chatbot-avatar">🤖</div>
        <div class="chatbot-title">
            <h3>Asisten Galeri Eco 21</h3>
            <p>Pusat Oleh-oleh Khas Banyumas</p>
        </div>
        <button class="chatbot-close" onclick="toggleChatbot()">✕</button>
    </div>
    <div class="chatbot-messages" id="chatbotMessages">
    </div>
</div>

<script>
function toggleChatbot() {
    var container = document.getElementById('chatbotContainer');
    var messagesDiv = document.getElementById('chatbotMessages');
    container.classList.toggle('active');
    if (container.classList.contains('active')) {
        if (messagesDiv.innerHTML.trim() === '') {
            messagesDiv.innerHTML = getInitialGreeting();
        }
    }
}

function getInitialGreeting() {
    return '<div class="message bot">' +
        '<div class="message-avatar">🤖</div>' +
        '<div class="message-content">' +
        '<strong>Halo! 👋</strong>' +
        '<p>Selamat datang di <strong>Galeri Eco 21</strong>! Saya asisten virtual yang siap membantu Anda.</p>' +
        '<p>Silakan pilih topik di bawah ini:</p>' +
        '<div class="quick-replies">' +
        '<button class="quick-reply" onclick="sendQuickReply(\'produk\')">📦 Produk Kami</button>' +
        '<button class="quick-reply" onclick="sendQuickReply(\'banyumas\')">🏘️ Khas Banyumas</button>' +
        '<button class="quick-reply" onclick="sendQuickReply(\'pemesanan\')">🛒 Cara Pesan</button>' +
        '<button class="quick-reply" onclick="sendQuickReply(\'lokasi\')">📍 Lokasi Toko</button>' +
        '<button class="quick-reply" onclick="sendQuickReply(\'bestseller\')" >⭐ Produk Terlaris</button>' +
        '<button class="quick-reply" onclick="sendQuickReply(\'kontak\')">📞 Hubungi Kami</button>' +
        '</div></div></div>';
}

function sendQuickReply(type) {
    var userMessageText = '';
    switch(type) {
        case 'produk': userMessageText = 'Apa saja produk yang tersedia?'; break;
        case 'banyumas': userMessageText = 'Apa saja produk khas Banyumas?'; break;
        case 'pemesanan': userMessageText = 'Bagaimana cara memesan?'; break;
        case 'lokasi': userMessageText = 'Di mana lokasi tokonya?'; break;
        case 'bestseller': userMessageText = 'Produk apa yang paling laris?'; break;
        case 'kontak': userMessageText = 'Bagaimana cara menghubungi?'; break;
    }
    addMessage(userMessageText, 'user');
    setTimeout(function() { getBotResponse(type); }, 500);
}

function addMessage(text, sender) {
    var messagesDiv = document.getElementById('chatbotMessages');
    var messageDiv = document.createElement('div');
    messageDiv.className = 'message ' + sender;
    var avatar = sender === 'bot' ? '🤖' : '👤';
    messageDiv.innerHTML = '<div class="message-avatar">' + avatar + '</div><div class="message-content">' + text + '</div>';
    messagesDiv.appendChild(messageDiv);
    messagesDiv.scrollTop = messagesDiv.scrollHeight;
}

function showGreetingWithDelay() {
    setTimeout(function() {
        var messagesDiv = document.getElementById('chatbotMessages');
        // Append the quick replies below the answer instead of replacing
        var quickRepliesHTML = '<div class="quick-replies" style="margin-top: 15px;">' +
            '<p style="margin-bottom:10px;font-size:13px;color:#666;">Pilih topik lain:</p>' +
            '<button class="quick-reply" onclick="sendQuickReply(\'produk\')">📦 Produk Kami</button>' +
            '<button class="quick-reply" onclick="sendQuickReply(\'banyumas\')">🏘️ Khas Banyumas</button>' +
            '<button class="quick-reply" onclick="sendQuickReply(\'pemesanan\')">🛒 Cara Pesan</button>' +
            '<button class="quick-reply" onclick="sendQuickReply(\'lokasi\')">📍 Lokasi Toko</button>' +
            '<button class="quick-reply" onclick="sendQuickReply(\'bestseller\')">⭐ Produk Terlaris</button>' +
            '<button class="quick-reply" onclick="sendQuickReply(\'kontak\')">📞 Hubungi Kami</button>' +
            '</div>';
        
        // Append to the last bot message instead of replacing
        var lastBotMessage = messagesDiv.lastElementChild;
        if (lastBotMessage && lastBotMessage.classList.contains('bot')) {
            lastBotMessage.innerHTML += quickRepliesHTML;
        }
        messagesDiv.scrollTop = messagesDiv.scrollHeight;
    }, 1500);
}

function getBotResponse(type) {
    var response = '';
    switch(type) {
        case 'produk':
            response = '<strong>Produk Kami 🛍️</strong><p>Galeri Eco 21 menyediakan berbagai oleh-oleh khas Banyumas:</p><ul><li><strong>Getuk Goreng</strong> - Singkong gurih nan legit</li><li><strong>Keripik Tempe</strong> - Tempe tipis renyah</li><li><strong>Mendoan</strong> - Tempe bacem goreng khas</li><li><strong>Klanting</strong> - Singkong mini kenyal</li><li><strong>Sale</strong> - Pisang kering</li><li><strong>Nopia</strong> - Kue tradisional</li><li><strong>Keripik Dage</strong> - Singkong fermentasi renyah</li><li><strong>Getuk</strong> - Singkong rebus dengan topping</li></ul><p>Klik tombol di bawah untuk info lebih lanjut! 😊</p>';
            break;
        case 'banyumas':
            response = '<strong>Produk Khas Banyumas 🏘️</strong><p>Kami menyajikan produk autentik dari Banyumas:</p><ul><li><strong>Getuk & Getuk Goreng</strong> - Singkong legit</li><li><strong>Keripik Dage</strong> - Singkong fermented</li><li><strong>Mendoan</strong> - Tempe bacem Banyumas</li><li><strong>Sale</strong> - Pisang kering Madura</li><li><strong>Nopia</strong> - Kue tradisional</li><li><strong>Carang-carang</strong> - Singkong santan</li></ul><p>Semua dari <strong>UMKM lokal terpercaya</strong>! ✅</p>';
            break;
        case 'pemesanan':
            response = '<strong>Cara Memesan 🛒</strong><p>Anda bisa membeli dengan mudah:</p><ol><li>Pilih produk yang diinginkan</li><li>Klik tombol "Beli via WhatsApp"</li><li>Chat kami dengan jumlah pesanan</li><li>Kami akan konfirmasi pesanan Anda</li><li>Lakukan pembayaran</li><li>Pesanan akan kami proses</li></ol><p>Atau bisa juga beli via <strong>Tokopedia</strong>! 🏪</p>';
            break;
        case 'lokasi':
            response = '<strong>Lokasi Toko 📍</strong><p><strong>Galeri Eco 21</strong></p><p>Jl. Mayjend Sutoyo No.27, Sokanegara</p><p>PURWOKERTO - BANYUMAS</p><p>JAWA TENGAH</p><hr><ul style="list-style: none; padding: 0;"><li>📍 Dekat dengan pusat kota Purwokerto</li><li>🕐 JAM BUKA: 08.00 - 21.00 WIB</li><li>📞 Hubungi: 0812-3456-7890</li></ul>';
            break;
        case 'bestseller':
            response = '<strong>Produk Best Seller ⭐</strong><p>Produk favorit pelanggan kami:</p><ol><li>🥇 <strong>Getuk Goreng</strong> - Paling laris!</li><li>🥈 <strong>Keripik Tempe</strong> - Renyah dan gurih</li><li>🥉 <strong>Mendoan</strong> - Khas Banyumas</li><li>🏅 <strong>Klanting</strong> - Kenyal legit</li><li>🏅 <strong>Sale</strong> - Manis renyah</li></ol><p>Silakan dicoba! 😊</p>';
            break;
        case 'kontak':
            response = '<strong>Kontak Kami 📱</strong><p>Hubungi kami melalui:</p><ul><li>📱 <strong>WhatsApp:</strong> 0812-3456-7890</li><li>📸 <strong>Instagram:</strong> @galerieco21</li><li>📘 <strong>Facebook:</strong> Galeri Eco 21</li><li>🏪 <strong>Tokopedia:</strong> Galeri Eco 21</li></ul><p>Kami siap melayani Anda! 😊</p>';
            break;
        default:
            response = '<strong>Mohon Maaf 😔</strong><p>Saya tidak memahami pertanyaan Anda.</p><p>Silakan pilih topik di bawah ini:</p>';
    }
    addMessage(response, 'bot');
    showGreetingWithDelay();
}
</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecoo21-main\resources\views/welcome.blade.php ENDPATH**/ ?>