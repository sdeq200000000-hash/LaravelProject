@extends('layouts.app')
@section('content')
 <main>

    <section class="swiper-container js-swiper-slider swiper-number-pagination slideshow" data-settings='{
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": 1,
        "effect": "fade",
        "loop": true
      }'>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="overflow-hidden position-relative h-100" style="background: linear-gradient(135deg, #111111 0%, #2d2d2d 50%, #444444 100%);">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center d-flex align-items-end justify-content-center" style="right:5%;bottom:0;width:460px;height:90%;">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 220" style="width:340px;height:auto;filter:drop-shadow(0 20px 60px rgba(255,80,0,0.5));">
                <!-- Sole -->
                <ellipse cx="170" cy="200" rx="155" ry="18" fill="#222"/>
                <!-- Midsole white stripe -->
                <ellipse cx="170" cy="190" rx="150" ry="14" fill="#f5f5f5"/>
                <!-- Upper body -->
                <path d="M30 185 Q40 130 100 110 Q145 95 190 105 L280 135 Q320 155 320 185 Z" fill="#ff4500"/>
                <!-- Toe cap -->
                <ellipse cx="60" cy="173" rx="38" ry="16" fill="#e03c00"/>
                <!-- Nike swoosh -->
                <path d="M100 150 Q160 120 230 145 Q200 155 100 150 Z" fill="#ffffff" opacity="0.9"/>
                <!-- Heel counter -->
                <path d="M280 135 Q320 155 320 185 L295 185 Q295 155 275 140 Z" fill="#cc3700"/>
                <!-- Lace area -->
                <rect x="115" y="112" width="110" height="55" rx="8" fill="#cc3a00" opacity="0.7"/>
                <!-- Laces -->
                <line x1="120" y1="120" x2="220" y2="120" stroke="white" stroke-width="2.5" opacity="0.8"/>
                <line x1="120" y1="130" x2="220" y2="130" stroke="white" stroke-width="2.5" opacity="0.8"/>
                <line x1="120" y1="140" x2="220" y2="140" stroke="white" stroke-width="2.5" opacity="0.8"/>
                <line x1="120" y1="150" x2="220" y2="150" stroke="white" stroke-width="2.5" opacity="0.8"/>
                <line x1="120" y1="160" x2="220" y2="160" stroke="white" stroke-width="2.5" opacity="0.8"/>
              </svg>
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3" style="color:#ff6b35;">
                New Season Drop</h6>
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5" style="color:#fff;">Premium</h2>
              <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5" style="color:#ff4500;">Running Shoes</h2>
              <a href="{{ route('shop.index') }}"
                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7" style="color:#fff;">Shop Now</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="overflow-hidden position-relative h-100" style="background: linear-gradient(135deg, #000000 0%, #1a0a00 50%, #c8102e 100%);">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center d-flex align-items-end justify-content-center" style="right:5%;bottom:0;width:460px;height:90%;">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 320" style="width:300px;height:auto;filter:drop-shadow(0 20px 60px rgba(200,16,46,0.6));">
                <!-- High-top silhouette (Jordan 1 style) -->
                <!-- Ankle collar area -->
                <path d="M160 20 Q200 15 220 30 L230 140 Q220 145 210 145 L170 145 Z" fill="#c8102e"/>
                <!-- Tongue -->
                <path d="M170 40 Q195 35 205 50 L210 145 L170 145 Z" fill="#e0e0e0"/>
                <!-- Upper body -->
                <path d="M40 190 Q50 130 120 115 Q155 108 190 112 L265 140 L265 190 Z" fill="#c8102e"/>
                <!-- White panel middle -->
                <path d="M90 120 Q130 112 170 115 L265 140 L265 170 L90 170 Z" fill="#ffffff"/>
                <!-- Sole -->
                <ellipse cx="160" cy="203" rx="130" ry="16" fill="#ffffff"/>
                <ellipse cx="160" cy="210" rx="135" ry="12" fill="#111"/>
                <!-- Wings logo area -->
                <rect x="195" y="170" width="60" height="25" rx="4" fill="#c8102e"/>
                <text x="225" y="187" font-family="Arial" font-size="8" fill="white" text-anchor="middle" font-weight="bold">JORDAN</text>
                <!-- Toe box -->
                <ellipse cx="65" cy="180" rx="32" ry="14" fill="#e0e0e0"/>
                <!-- Laces -->
                <line x1="100" y1="125" x2="180" y2="122" stroke="#c8102e" stroke-width="2.5"/>
                <line x1="98" y1="133" x2="178" y2="130" stroke="#c8102e" stroke-width="2.5"/>
                <line x1="96" y1="141" x2="176" y2="138" stroke="#c8102e" stroke-width="2.5"/>
                <line x1="94" y1="149" x2="174" y2="146" stroke="#c8102e" stroke-width="2.5"/>
              </svg>
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3" style="color:#e8b888;">
                Limited Release</h6>
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5" style="color:#fff;">Air Jordan</h2>
              <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5" style="color:#c8102e;">Retro Collection</h2>
              <a href="{{ route('shop.index') }}"
                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7" style="color:#fff;">Shop Now</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="overflow-hidden position-relative h-100" style="background: linear-gradient(135deg, #000000 0%, #1a1a1a 50%, #333333 100%);">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center d-flex align-items-end justify-content-center" style="right:5%;bottom:0;width:460px;height:90%;">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 340 220" style="width:340px;height:auto;filter:drop-shadow(0 20px 60px rgba(255,255,255,0.3));">
                <!-- Air Force 1 low silhouette -->
                <!-- Sole -->
                <ellipse cx="170" cy="200" rx="155" ry="18" fill="#f5f5f5"/>
                <ellipse cx="170" cy="192" rx="150" ry="13" fill="#e0e0e0"/>
                <!-- Air unit window -->
                <rect x="220" y="183" width="60" height="10" rx="5" fill="#bbdefb" opacity="0.8"/>
                <!-- Upper body -->
                <path d="M30 182 Q38 140 95 122 Q140 110 185 118 L275 140 Q310 158 310 182 Z" fill="#ffffff"/>
                <!-- Toe box -->
                <ellipse cx="62" cy="170" rx="38" ry="16" fill="#f0f0f0"/>
                <!-- Perforations on toe -->
                <circle cx="50" cy="165" r="2" fill="#ddd"/>
                <circle cx="60" cy="162" r="2" fill="#ddd"/>
                <circle cx="70" cy="160" r="2" fill="#ddd"/>
                <circle cx="80" cy="159" r="2" fill="#ddd"/>
                <!-- Heel tab -->
                <path d="M275 140 Q310 158 310 182 L290 182 Q290 158 270 145 Z" fill="#e8e8e8"/>
                <!-- Lace area -->
                <rect x="110" y="122" width="120" height="50" rx="6" fill="#f8f8f8"/>
                <!-- Laces -->
                <line x1="115" y1="130" x2="225" y2="128" stroke="#ccc" stroke-width="2"/>
                <line x1="115" y1="138" x2="225" y2="136" stroke="#ccc" stroke-width="2"/>
                <line x1="115" y1="146" x2="225" y2="144" stroke="#ccc" stroke-width="2"/>
                <line x1="115" y1="154" x2="225" y2="152" stroke="#ccc" stroke-width="2"/>
                <line x1="115" y1="162" x2="225" y2="160" stroke="#ccc" stroke-width="2"/>
                <!-- Nike branding -->
                <text x="220" y="175" font-family="Arial" font-size="11" fill="#999" font-weight="bold">NIKE</text>
              </svg>
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3" style="color:#aaaaaa;">
                Streetwear Essential</h6>
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5" style="color:#fff;">Classic</h2>
              <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5" style="color:#ffffff;">Air Force 1</h2>
              <a href="{{ route('shop.index') }}"
                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7" style="color:#aaaaaa;">Shop Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div
          class="slideshow-pagination slideshow-number-pagination d-flex align-items-center position-absolute bottom-0 mb-5">
        </div>
      </div>
    </section>
    <div class="container mw-1620 bg-white border-radius-10">
      <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>
      <section class="category-carousel container">
        <h2 class="section-title text-center mb-3 pb-xl-2 mb-xl-4">Shop By Category</h2>

        <div class="position-relative">
          <div class="swiper-container js-swiper-slider" data-settings='{
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 8,
              "slidesPerGroup": 1,
              "effect": "none",
              "loop": true,
              "navigation": {
                "nextEl": ".products-carousel__next-1",
                "prevEl": ".products-carousel__prev-1"
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "slidesPerGroup": 2,
                  "spaceBetween": 15
                },
                "768": {
                  "slidesPerView": 4,
                  "slidesPerGroup": 4,
                  "spaceBetween": 30
                },
                "992": {
                  "slidesPerView": 6,
                  "slidesPerGroup": 1,
                  "spaceBetween": 45,
                  "pagination": false
                },
                "1200": {
                  "slidesPerView": 8,
                  "slidesPerGroup": 1,
                  "spaceBetween": 60,
                  "pagination": false
                }
              }
            }'>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-running.svg') }}" width="124" height="124" alt="Running Shoes" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Running<br />Shoes</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-basketball.svg') }}" width="124" height="124" alt="Basketball Shoes" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Basketball<br />Shoes</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-lifestyle.svg') }}" width="124" height="124" alt="Lifestyle" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Lifestyle<br />Sneakers</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-training.svg') }}" width="124" height="124" alt="Training Shoes" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Training<br />Shoes</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-skate.svg') }}" width="124" height="124" alt="Skate Shoes" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Skate<br />Shoes</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-retro.svg') }}" width="124" height="124" alt="Retro Classic" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Retro<br />Classic</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-hightop.svg') }}" width="124" height="124" alt="High Tops" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">High<br />Tops</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-lowtop.svg') }}" width="124" height="124" alt="Low Tops" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Low<br />Tops</a>
                </div>
              </div>
            </div><!-- /.swiper-wrapper -->
          </div><!-- /.swiper-container js-swiper-slider -->

          <div
            class="products-carousel__prev products-carousel__prev-1 position-absolute top-50 d-flex align-items-center justify-content-center">
            <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_prev_md" />
            </svg>
          </div><!-- /.products-carousel__prev -->
          <div
            class="products-carousel__next products-carousel__next-1 position-absolute top-50 d-flex align-items-center justify-content-center">
            <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
              <use href="#icon_next_md" />
            </svg>
          </div><!-- /.products-carousel__next -->
        </div><!-- /.position-relative -->
      </section>

    </div>

    <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

  </main>
@endsection
