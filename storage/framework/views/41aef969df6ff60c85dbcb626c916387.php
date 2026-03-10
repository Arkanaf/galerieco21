<?php $__env->startSection('content'); ?>
<div class="product-page-container">
    <!-- Back Button -->
    <a href="<?php echo e(url()->previous()); ?>" class="back-link">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M19 12H5M12 19l-7-7 7-7"/>
        </svg>
        Kembali
    </a>

    <!-- Main Product Section -->
    <div class="product-showcase">
        <!-- Product Image -->
        <div class="product-visual">
            <div class="image-frame">
                <?php
                    $imgUrl = $product->image ? asset($product->image) : 'https://placehold.co/600x700/CD853F/white?text='.urlencode($product->name);
                ?>
                <img src="<?php echo e($imgUrl); ?>" alt="<?php echo e($product->name); ?>" class="main-product-image">
                <div class="image-accent"></div>
            </div>
        </div>

        <!-- Product Details -->
        <div class="product-details">
            <!-- Breadcrumb -->
            <nav class="breadcrumb-nav">
                <a href="/">Beranda</a>
                <span class="separator">›</span>
                <a href="/#produk">Produk</a>
                <span class="separator">›</span>
                <span class="current"><?php echo e($product->name); ?></span>
            </nav>

            <!-- Category Tag -->
            <span class="category-tag">Produk Unggulan</span>

            <!-- Title -->
            <h1 class="product-name"><?php echo e($product->name); ?></h1>

            <!-- Price Display -->
            <div class="price-display">
                <span class="price-amount">Rp<?php echo e(number_format($product->price,0,',','.')); ?></span>
                <span class="price-note">Langsung dari produsen ✓</span>
            </div>

            <!-- Description -->
            <?php if($product->description): ?>
                <div class="product-description">
                    <h3>Tentang Produk</h3>
                    <p><?php echo e($product->description); ?></p>
                </div>
            <?php endif; ?>

            <!-- Features List -->
            <div class="features-list">
                <h3>Mengapa Memilih Kami</h3>
                <ul>
                    <li>
                        <span class="check-icon">✓</span>
                        Dibuat oleh UMKM lokal Banyumas terpercaya
                    </li>
                    <li>
                        <span class="check-icon">✓</span>
                        Bahan berkualitas tinggi dan alami
                    </li>
                    <li>
                        <span class="check-icon">✓</span>
                        Cita rasa autentik yang lezat
                    </li>
                    <li>
                        <span class="check-icon">✓</span>
                        Dikemas dengan rapi dan higienis
                    </li>
                </ul>
            </div>

            <!-- Quantity & Cart -->
            <div class="purchase-section">
                <div class="quantity-control">
                    <span class="qty-label">Jumlah</span>
                    <div class="qty-wrapper">
                        <button class="qty-btn" onclick="updateQty(-1)">−</button>
                        <input type="number" id="quantity" value="1" readonly>
                        <button class="qty-btn" onclick="updateQty(1)">+</button>
                    </div>
                </div>
                <div class="total-display">
                    <span class="total-label">Total</span>
                    <span class="total-amount">Rp<span id="totalPrice"><?php echo e(number_format($product->price,0,',','.')); ?></span></span>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="cta-buttons">
                <a href="#" id="waLink" target="_blank" class="btn-primary-action wa-btn">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-5.031 1.378c-1.56.934-2.846 2.271-3.694 3.782C1.896 10.56 1.59 12.446 2.476 14.232c.886 1.787 2.474 3.285 4.399 4.155a9.84 9.84 0 004.844 1.245h.005c.838 0 1.666-.063 2.468-.187 2.041-.314 3.869-1.188 5.115-2.674 1.246-1.486 1.872-3.35 1.872-5.322 0-1.415-.274-2.74-.814-3.961-.54-1.22-1.31-2.3-2.282-3.16-.972-.86-2.127-1.528-3.4-1.978-1.273-.45-2.618-.68-4.028-.68zm0 0"/>
                    </svg>
                    Pesan via WhatsApp
                </a>
                <a href="<?php echo e(env('TOKOPEDIA_LINK','https://www.tokopedia.com/search?q=')); ?><?php echo e(urlencode($product->name)); ?>" target="_blank" class="btn-secondary-action tokped-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                    </svg>
                    Beli di Tokopedia
                </a>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <section class="reviews-area">
        <div class="section-header">
            <h2>Ulasan Pelanggan</h2>
            <p class="review-count"><?php echo e($product->review_count); ?> ulasan</p>
        </div>

        <?php if(session('success')): ?>
            <div class="notification success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Reviews List -->
        <?php if($product->reviews->count() > 0): ?>
            <div class="reviews-grid">
                <?php $__currentLoopData = $product->reviews->sortByDesc('created_at'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="review-card">
                        <div class="review-head">
                            <div class="reviewer-info">
                                <span class="reviewer-name"><?php echo e($review->name); ?></span>
                                <span class="review-date"><?php echo e($review->created_at->format('d M Y')); ?></span>
                            </div>
                            <div class="review-stars">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <span class="star <?php echo e($i <= $review->rating ? 'active' : ''); ?>">★</span>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <p class="review-text"><?php echo e($review->comment); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <div class="no-reviews">
                <p>Belum ada ulasan untuk produk ini.</p>
                <span Jadilah yang pertama memberikan ulasan!</span>
            </div>
        <?php endif; ?>

        <!-- Review Form -->
        <div class="review-form-area">
            <h3>Berikan Ulasan Anda</h3>
            <form action="<?php echo e(route('review.store', $product)); ?>" method="POST" class="review-form">
                <?php echo csrf_field(); ?>

                <?php if($errors->any()): ?>
                    <div class="notification error">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="form-grid">
                    <div class="form-field">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required placeholder="Nama Anda">
                    </div>
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required placeholder="Email Anda">
                    </div>
                </div>

                <div class="form-field">
                    <label>Rating</label>
                    <div class="star-rating-input">
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <input type="radio" id="rating<?php echo e($i); ?>" name="rating" value="<?php echo e($i); ?>" <?php echo e(old('rating') == $i ? 'checked' : ''); ?>>
                            <label for="rating<?php echo e($i); ?>" class="star-btn">★</label>
                        <?php endfor; ?>
                    </div>
                </div>

                <div class="form-field">
                    <label for="comment">Ulasan</label>
                    <textarea id="comment" name="comment" rows="5" required placeholder="Tulis pengalaman Anda..."><?php echo e(old('comment')); ?></textarea>
                </div>

                <button type="submit" class="submit-btn">Kirim Ulasan</button>
            </form>
        </div>
    </section>

    <!-- Related Products -->
    <section class="related-products-area">
        <h2 class="section-title">Produk Lainnya</h2>
        <div class="products-row">
            <?php
                $relatedProducts = \App\Models\Product::where('id', '!=', $product->id)
                    ->take(4)
                    ->get();
            ?>
            <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $related): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('product.show', $related->id)); ?>" class="product-mini-card">
                    <div class="mini-image-wrap">
                        <?php
                            $relatedImg = $related->image ? asset($related->image) : 'https://placehold.co/300x300/CD853F/white?text='.urlencode($related->name);
                        ?>
                        <img src="<?php echo e($relatedImg); ?>" alt="<?php echo e($related->name); ?>">
                    </div>
                    <div class="mini-details">
                        <h4><?php echo e($related->name); ?></h4>
                        <span class="mini-price">Rp<?php echo e(number_format($related->price,0,',','.')); ?></span>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
</div>

<script>
    const productPrice = <?php echo e($product->price); ?>;
    const productName = "<?php echo e($product->name); ?>";
    const waNumber = "<?php echo e(env('WHATSAPP_NUMBER','6281234567890')); ?>";

    function updateQty(change) {
        const qtyInput = document.getElementById('quantity');
        let qty = parseInt(qtyInput.value) + change;
        if (qty < 1) qty = 1;
        if (qty > 99) qty = 99;
        qtyInput.value = qty;
        
        const total = qty * productPrice;
        document.getElementById('totalPrice').textContent = total.toLocaleString('id-ID');
        updateWhatsAppLink(qty);
    }

    function updateWhatsAppLink(qty) {
        const total = qty * productPrice;
        const message = `Halo, saya ingin membeli:\n\n*Produk:* ${productName}\n*Jumlah:* ${qty} pcs\n*Harga:* Rp${total.toLocaleString('id-ID')}\n\nMohon konfirmasi ketersediaan. Terima kasih!`;
        
        document.getElementById('waLink').href = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;
    }

    document.addEventListener('DOMContentLoaded', function() {
        updateWhatsAppLink(1);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecoo21-main\resources\views/product.blade.php ENDPATH**/ ?>