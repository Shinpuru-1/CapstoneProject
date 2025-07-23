<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FABLAB - Custom Products & Personalization</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: #667eea !important;
            transform: translateY(-2px);
        }

        .nav-cart {
            position: relative;
        }

        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #ff4757;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: bold;
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .floating-element {
            position: absolute;
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            top: 60%;
            right: 20%;
            animation-delay: 2s;
        }

        .floating-element:nth-child(3) {
            bottom: 20%;
            left: 60%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .hero-content {
            color: white;
            z-index: 2;
        }

        .hero-subtitle {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-description {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            line-height: 1.8;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
        }

        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 107, 107, 0.6);
        }

        .btn-outline-custom {
            border: 2px solid white;
            color: white;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            background: transparent;
            transition: all 0.3s ease;
        }

        .btn-outline-custom:hover {
            background: white;
            color: #667eea;
            transform: translateY(-3px);
        }

        .hero-logo {
            max-width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.3));
        }

        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
            40% { transform: translateX(-50%) translateY(-10px); }
            60% { transform: translateX(-50%) translateY(-5px); }
        }

        /* Section Styling */
        .section-padding {
            padding: 100px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Product Cards */
        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .product-image i {
            font-size: 4rem;
            color: white;
            opacity: 0.9;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #ff4757;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .product-badge.popular {
            background: #2ed573;
        }

        .product-badge.custom {
            background: #ffa502;
        }

        .product-content {
            padding: 1.5rem;
        }

        .product-category {
            color: #667eea;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .product-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.8rem;
            color: #333;
        }

        .product-description {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .stars {
            color: #ffa502;
        }

        .rating-text {
            color: #666;
            font-size: 0.9rem;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 1rem;
        }

        .btn-customize {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            color: white;
            padding: 12px 20px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-customize:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        /* Features Section */
        .features-section {
            background: #f8f9fa;
        }

        .feature-item {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            height: 100%;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
        }

        .feature-icon i {
            font-size: 2rem;
            color: white;
        }

        .feature-item h4 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #333;
        }

        .feature-item p {
            color: #666;
            line-height: 1.6;
        }

        /* Sample Products Gallery */
        .gallery-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 300px;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(102, 126, 234, 0.9), rgba(118, 75, 162, 0.9));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-text {
            text-align: center;
            color: white;
        }

        .gallery-text h4 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
        }

        .cta-content h2 {
            color: white !important;
            background: none !important;
            -webkit-text-fill-color: white !important;
        }

        /* Footer */
        footer {
            background: #2c3e50;
            color: white;
            padding: 3rem 0 1rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            color: white;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            color: #667eea;
            transform: translateY(-3px);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-subtitle {
                font-size: 2rem;
            }
            
            .hero-description {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .product-image {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">FABLAB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                      <li class="nav-item">
                        <a href = "{{ route('login') }}" class="nav-link">Login</a>
                 
                  
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="floating-elements">
            <div class="floating-element"></div>
            <div class="floating-element"></div>
            <div class="floating-element"></div>
        </div>
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h2 class="hero-subtitle">Personalize Your World</h2>
                        <p class="hero-description">
                            Create unique, custom products that reflect your personality. From personalized T-shirts and mugs to custom accessories, we bring your creative vision to life with premium quality and attention to detail.
                        </p>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="#products" class="btn btn-primary-custom">
                                <i class="fas fa-palette me-2"></i>Start Customizing
                            </a>
                            <a href="#gallery" class="btn btn-outline-custom" >
                                <i class="fas fa-images me-2" ></i>View Gallery
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center">
                        <div class="hero-logo" style="width: 400px; height: 400px; background: linear-gradient(135deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.1) 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; animation: float 6s ease-in-out infinite;">
                            <i class="fas fa-paint-brush" style="font-size: 6rem; color: rgba(255,255,255,0.8);"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down fa-2x"></i>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="section-padding">
        <div class="container">
            <h2 class="section-title">Customize Your Products</h2>
            <p class="section-subtitle">Choose from our wide range of customizable products and make them uniquely yours</p>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-tshirt"></i>
                            <div class="product-badge">Popular</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">Apparel</div>
                            <h3 class="product-title">Custom T-Shirts</h3>
                            <p class="product-description">
                                Premium quality cotton t-shirts with your custom designs, text, or graphics. Available in multiple colors and sizes.
                            </p>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">(245 reviews)</span>
                            </div>
                            <div class="product-price">From ₱19.99</div>
                            <a href = "{{ route('login') }}"  class="btn btn-customize">
                                <i class="fas fa-palette me-2"></i>Customize Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-coffee"></i>
                            <div class="product-badge">New</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">Drinkware</div>
                            <h3 class="product-title">Personalized Mugs</h3>
                            <p class="product-description">
                                High-quality ceramic mugs with custom prints, photos, or text. Perfect for gifts or personal use.
                            </p>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="rating-text">(187 reviews)</span>
                            </div>
                            <div class="product-price">From ₱12.99</div>
                            <a href = "{{ route('login') }}"  class="btn btn-customize">
                                <i class="fas fa-palette me-2"></i>Customize Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-mobile-alt"></i>
                            <div class="product-badge custom">Custom</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">Accessories</div>
                            <h3 class="product-title">Phone Cases</h3>
                            <p class="product-description">
                                Durable phone cases with custom designs for all major phone models. Express your style while protecting your device.
                            </p>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">(156 reviews)</span>
                            </div>
                            <div class="product-price">From ₱24.99</div>
                            <a href = "{{ route('login') }}"  class="btn btn-customize">
                                <i class="fas fa-palette me-2"></i>Customize Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-hat-cowboy"></i>
                            <div class="product-badge">Trending</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">Accessories</div>
                            <h3 class="product-title">Custom Caps & Hats</h3>
                            <p class="product-description">
                                Stylish caps and hats with embroidered or printed custom designs. Perfect for teams, events, or personal style.
                            </p>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">(98 reviews)</span>
                            </div>
                            <div class="product-price">From ₱16.99</div>
                           <a href = "{{ route('login') }}"  class="btn btn-customize">
                                <i class="fas fa-palette me-2"></i>Customize Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-shopping-bag"></i>
                            <div class="product-badge">Eco-Friendly</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">Bags</div>
                            <h3 class="product-title">Custom Tote Bags</h3>
                            <p class="product-description">
                                Eco-friendly canvas tote bags with custom printing. Perfect for shopping, promotions, or everyday use.
                            </p>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="rating-text">(134 reviews)</span>
                            </div>
                            <div class="product-price">From ₱14.99</div>
                           <a href = "{{ route('login') }}"  class="btn btn-customize">
                                <i class="fas fa-palette me-2"></i>Customize Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-sticky-note"></i>
                            <div class="product-badge">Business</div>
                        </div>
                        <div class="product-content">
                            <div class="product-category">Stationery</div>
                            <h3 class="product-title">Custom Stickers</h3>
                            <p class="product-description">
                                High-quality vinyl stickers with custom designs. Waterproof and durable for indoor and outdoor use.
                            </p>
                            <div class="product-rating">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-text">(267 reviews)</span>
                            </div>
                            <div class="product-price">From ₱5.99</div>
                            <a href = "{{ route('login') }}"  class="btn btn-customize">
                                <i class="fas fa-palette me-2"></i>Customize Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section section-padding">
        <div class="container">
            <h2 class="section-title">Sample Finished Products</h2>
            <p class="section-subtitle">Get inspired by our customers' amazing custom creations</p>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div style="background: linear-gradient(45deg, #ff6b6b, #4ecdc4); height: 100%; display: flex; align-items: center; justify-content: center; position: relative;">
                            <i class="fas fa-tshirt" style="font-size: 4rem; color: white; opacity: 0.8;"></i>
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                                <h4 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Custom Band T-Shirt</h4>
                                <p style="margin: 0;">Vintage-style design with custom typography</p>
                            </div>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-text">
                                <h4>Custom Band T-Shirt</h4>
                                <p>Vintage-style design with custom typography</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div style="background: linear-gradient(45deg, #a8e6cf, #ffd3a5); height: 100%; display: flex; align-items: center; justify-content: center; position: relative;">
                            <i class="fas fa-coffee" style="font-size: 4rem; color: white; opacity: 0.8;"></i>
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                                <h4 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Wedding Photo Mug</h4>
                                <p style="margin: 0;">Beautiful couple photo with elegant border</p>
                            </div>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-text">
                                <h4>Wedding Photo Mug</h4>
                                <p>Beautiful couple photo with elegant border</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div style="background: linear-gradient(45deg, #667eea, #764ba2); height: 100%; display: flex; align-items: center; justify-content: center; position: relative;">
                            <i class="fas fa-mobile-alt" style="font-size: 4rem; color: white; opacity: 0.8;"></i>
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                                <h4 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Gaming Phone Case</h4>
                                <p style="margin: 0;">Custom gaming artwork with LED effects</p>
                            </div>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-text">
                                <h4>Gaming Phone Case</h4>
                                <p>Custom gaming artwork with LED effects</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div style="background: linear-gradient(45deg, #ff9a9e, #fecfef); height: 100%; display: flex; align-items: center; justify-content: center; position: relative;">
                            <i class="fas fa-hat-cowboy" style="font-size: 4rem; color: white; opacity: 0.8;"></i>
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                                <h4 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Team Logo Cap</h4>
                                <p style="margin: 0;">Embroidered team logo with custom colors</p>
                            </div>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-text">
                                <h4>Team Logo Cap</h4>
                                <p>Embroidered team logo with custom colors</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div style="background: linear-gradient(45deg, #a8edea, #fed6e3); height: 100%; display: flex; align-items: center; justify-content: center; position: relative;">
                            <i class="fas fa-shopping-bag" style="font-size: 4rem; color: white; opacity: 0.8;"></i>
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                                <h4 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Eco Tote Bag</h4>
                                <p style="margin: 0;">Sustainable design with nature graphics</p>
                            </div>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-text">
                                <h4>Eco Tote Bag</h4>
                                <p>Sustainable design with nature graphics</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div style="background: linear-gradient(45deg, #ffecd2, #fcb69f); height: 100%; display: flex; align-items: center; justify-content: center; position: relative;">
                            <i class="fas fa-sticky-note" style="font-size: 4rem; color: white; opacity: 0.8;"></i>
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; text-align: center;">
                                <h4 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Brand Sticker Pack</h4>
                                <p style="margin: 0;">Holographic stickers with brand identity</p>
                            </div>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-text">
                                <h4>Brand Sticker Pack</h4>
                                <p>Holographic stickers with brand identity</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section section-padding">
        <div class="container">
            <h2 class="section-title">Why Choose FABLAB for Customization?</h2>
            <p class="section-subtitle">We're committed to delivering exceptional quality and personalized service for all your custom product needs</p>
            
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4>Easy Design Tools</h4>
                        <p>User-friendly design interface with templates, fonts, and graphics to create your perfect custom product effortlessly.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4>Premium Quality</h4>
                        <p>High-grade materials and professional printing techniques ensure your custom products look amazing and last longer.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h4>Fast Turnaround</h4>
                        <p>Quick production and reliable shipping get your custom products to you faster than the competition.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Design Support</h4>
                        <p>Our expert design team is ready to help you create the perfect custom product or assist with any questions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section section-padding">
        <div class="container">
            <div class="cta-content">
                <h2 class="section-title text-white mb-4">Ready to Create Something Amazing?</h2>
                <p class="lead mb-5">Join thousands of happy customers who have brought their creative visions to life with our customization services.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <button class="btn btn-primary-custom btn-lg">Start Customizing</button>
                    <button class="btn btn-outline-custom btn-lg">View All Products</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-3">FABLAB</h3>
                    <p>Your creativity, our expertise. We specialize in turning your ideas into beautiful, high-quality custom products that you'll love and treasure.</p>
                </div>
                <div class="col-lg-6">
                    <h5 class="mb-3">Connect With Us</h5>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <p class="mt-3">info@fablab.com | +1 (555) 123-4567</p>
                </div>
            </div>
            <hr class="my-4">
            <p class="text-center mb-0">&copy; 2025 FABLAB. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.15)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
            }
        });

        // Add scroll reveal animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.product-card, .feature-item, .gallery-item').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });

        // Add interactive hover effects for gallery items
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05) rotateY(5deg)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotateY(0deg)';
            });
        });

    </script>
</body>
</html>