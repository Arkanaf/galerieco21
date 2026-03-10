@extends('layouts.app')

@section('content')
<div class="product-page-container">
    <!-- Back Button -->
    <a href="{{ url()->previous() }}" class="back-link">
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
                @php
                    $imgUrl = $product->image ? asset($product->image) : 'https://placehold.co/600x700/CD853F/white?text='.urlencode($product->name);
                @endphp
                <img src="{{ $imgUrl }}" alt="{{ $product->name }}" class="main-product-image">
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
                <span class="current">{{ $product->name }}</span>
            </nav>

            <!-- Category Tag -->
            <span class="category-tag">Produk Unggulan</span>

            <!-- Title -->
            <h1 class="product-name">{{ $product->name }}</h1>

            <!-- Price Display -->
            <div class="price-display">
                <span class="price-amount">Rp{{ number_format($product->price,0,',','.') }}</span>
                <span class="price-note">Langsung dari produsen ✓</span>
            </div>

            <!-- Description -->
            @if($product->description)
                <div class="product-description">
                    <h3>Tentang Produk</h3>
                    <p>{{ $product->description }}</p>
                </div>
            @endif

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
                    <span class="total-amount">Rp<span id="totalPrice">{{ number_format($product->price,0,',','.') }}</span></span>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="cta-buttons">
                <a href="#" id="waLink" target="_blank" class="btn-primary-action wa-btn">
                    <img class="btn-icon" src="{{ asset('images/icon/whatsapp.png') }}" alt="WhatsApp">
                    Pesan via WhatsApp
                </a>
                <a href="{{ env('TOKOPEDIA_LINK','https://www.tokopedia.com/search?q=') }}{{ urlencode($product->name) }}" target="_blank" class="btn-secondary-action tokped-btn">
                    <img class="btn-icon" src="{{ asset('images/icon/tokopedia.png') }}" alt="Tokopedia">
                    Beli di Tokopedia
                </a>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <section class="reviews-area">
        <div class="section-header">
            <h2>Ulasan Pelanggan</h2>
            <p class="review-count">{{ $product->review_count }} ulasan</p>
        </div>

        @if(session('success'))
            <div class="notification success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Reviews List -->
        @if($product->reviews->count() > 0)
            <div class="reviews-grid">
                @foreach($product->reviews->sortByDesc('created_at') as $review)
                    <div class="review-card">
                        <div class="review-head">
                            <div class="reviewer-info">
                                <span class="reviewer-name">{{ $review->name }}</span>
                                <span class="review-date">{{ $review->created_at->format('d M Y') }}</span>
                            </div>
                            <div class="review-stars">
                                @for($i = 1; $i <= 5; $i++)
                                    <span class="star {{ $i <= $review->rating ? 'active' : '' }}">★</span>
                                @endfor
                            </div>
                        </div>
                        <p class="review-text">{{ $review->comment }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <div class="no-reviews">
                <p>Belum ada ulasan untuk produk ini.</p>
                <span Jadilah yang pertama memberikan ulasan!</span>
            </div>
        @endif

        <!-- Review Form -->
        <div class="review-form-area">
            <h3>Berikan Ulasan Anda</h3>
            <form action="{{ route('review.store', $product) }}" method="POST" class="review-form">
                @csrf

                @if($errors->any())
                    <div class="notification error">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-grid">
                    <div class="form-field">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Nama Anda">
                    </div>
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Email Anda">
                    </div>
                </div>

                <div class="form-field">
                    <label>Rating</label>
                    <div class="star-rating-input">
                        @for($i = 1; $i <= 5; $i++)
                            <input type="radio" id="rating{{ $i }}" name="rating" value="{{ $i }}" {{ old('rating') == $i ? 'checked' : '' }}>
                            <label for="rating{{ $i }}" class="star-btn">★</label>
                        @endfor
                    </div>
                </div>

                <div class="form-field">
                    <label for="comment">Ulasan</label>
                    <textarea id="comment" name="comment" rows="5" required placeholder="Tulis pengalaman Anda...">{{ old('comment') }}</textarea>
                </div>

                <button type="submit" class="submit-btn">Kirim Ulasan</button>
            </form>
        </div>
    </section>

    <!-- Related Products -->
    <section class="related-products-area">
        <h2 class="section-title">Produk Lainnya</h2>
        <div class="products-row">
            @php
                $relatedProducts = \App\Models\Product::where('id', '!=', $product->id)
                    ->take(4)
                    ->get();
            @endphp
            @foreach($relatedProducts as $related)
                <a href="{{ route('product.show', $related->id) }}" class="product-mini-card">
                    <div class="mini-image-wrap">
                        @php
                            $relatedImg = $related->image ? asset($related->image) : 'https://placehold.co/300x300/CD853F/white?text='.urlencode($related->name);
                        @endphp
                        <img src="{{ $relatedImg }}" alt="{{ $related->name }}">
                    </div>
                    <div class="mini-details">
                        <h4>{{ $related->name }}</h4>
                        <span class="mini-price">Rp{{ number_format($related->price,0,',','.') }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
</div>

<script>
    const productPrice = {{ $product->price }};
    const productName = "{{ $product->name }}";
    const waNumber = "{{ env('WHATSAPP_NUMBER','6281234567890') }}";

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
@endsection
