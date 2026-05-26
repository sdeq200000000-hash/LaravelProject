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
          <div class="overflow-hidden position-relative h-100" style="background: linear-gradient(135deg, #0f3460 0%, #16213e 50%, #1a1a2e 100%);">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center d-flex align-items-end justify-content-center" style="right:5%;bottom:0;width:420px;height:90%;">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280 520" style="width:280px;height:auto;filter:drop-shadow(0 20px 60px rgba(74,144,217,0.4));">
                <rect x="20" y="10" width="240" height="500" rx="38" ry="38" fill="#d6efff" opacity="0.95"/>
                <rect x="35" y="28" width="210" height="464" rx="28" ry="28" fill="#111114"/>
                <rect x="50" y="55" width="180" height="380" rx="15" ry="15" fill="#1c1c2e"/>
                <rect x="95" y="33" width="90" height="26" rx="13" ry="13" fill="#0a0a0a"/>
                <circle cx="192" cy="46" r="5" fill="#1a1a2e"/>
                <rect x="120" y="462" width="40" height="6" rx="3" ry="3" fill="#2a2a2a"/>
                <rect x="20" y="10" width="240" height="500" rx="38" ry="38" fill="none" stroke="rgba(100,180,255,0.6)" stroke-width="3"/>
              </svg>
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3" style="color:#4a90d9;">
                New Collection</h6>
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5" style="color:#fff;">Premium</h2>
              <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5" style="color:#4a90d9;">Clear Cases</h2>
              <a href="{{ route('shop.index') }}"
                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7" style="color:#fff;">Shop Now</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="overflow-hidden position-relative h-100" style="background: linear-gradient(135deg, #3d1a00 0%, #5c2c00 50%, #8B5E3C 100%);">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center d-flex align-items-end justify-content-center" style="right:5%;bottom:0;width:420px;height:90%;">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280 520" style="width:280px;height:auto;filter:drop-shadow(0 20px 60px rgba(139,94,60,0.5));">
                <rect x="20" y="10" width="240" height="500" rx="38" ry="38" fill="#8B5E3C" opacity="0.95"/>
                <rect x="35" y="28" width="210" height="464" rx="28" ry="28" fill="#111114"/>
                <rect x="50" y="55" width="180" height="380" rx="15" ry="15" fill="#1c1c2e"/>
                <rect x="95" y="33" width="90" height="26" rx="13" ry="13" fill="#0a0a0a"/>
                <circle cx="192" cy="46" r="5" fill="#1a1a2e"/>
                <rect x="120" y="462" width="40" height="6" rx="3" ry="3" fill="#2a2a2a"/>
                <rect x="20" y="10" width="240" height="500" rx="38" ry="38" fill="none" stroke="rgba(200,140,80,0.7)" stroke-width="3"/>
              </svg>
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3" style="color:#e8b888;">
                Luxury Edition</h6>
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5" style="color:#fff;">Genuine</h2>
              <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5" style="color:#e8b888;">Leather Cases</h2>
              <a href="{{ route('shop.index') }}"
                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7" style="color:#fff;">Shop Now</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="overflow-hidden position-relative h-100" style="background: linear-gradient(135deg, #1a3a2e 0%, #2a5a44 50%, #3D5A4C 100%);">
            <div class="slideshow-character position-absolute bottom-0 pos_right-center d-flex align-items-end justify-content-center" style="right:5%;bottom:0;width:420px;height:90%;">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 280 520" style="width:280px;height:auto;filter:drop-shadow(0 20px 60px rgba(61,90,76,0.5));">
                <rect x="20" y="10" width="240" height="500" rx="38" ry="38" fill="#3D5A4C" opacity="0.95"/>
                <rect x="35" y="28" width="210" height="464" rx="28" ry="28" fill="#111114"/>
                <rect x="50" y="55" width="180" height="380" rx="15" ry="15" fill="#1c1c2e"/>
                <rect x="95" y="33" width="90" height="26" rx="13" ry="13" fill="#0a0a0a"/>
                <circle cx="192" cy="46" r="5" fill="#1a1a2e"/>
                <rect x="120" y="462" width="40" height="6" rx="3" ry="3" fill="#2a2a2a"/>
                <rect x="20" y="10" width="240" height="500" rx="38" ry="38" fill="none" stroke="rgba(100,160,120,0.6)" stroke-width="3"/>
              </svg>
            </div>
            <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
              <h6 class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3" style="color:#7ecfa0;">
                Military Grade</h6>
              <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5" style="color:#fff;">Ultra Tough</h2>
              <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5" style="color:#7ecfa0;">Armor Cases</h2>
              <a href="{{ route('shop.index') }}"
                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7" style="color:#fff;">Shop Now</a>
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
        <h2 class="section-title text-center mb-3 pb-xl-2 mb-xl-4">Shop By Case Type</h2>

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
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-clear.svg') }}" width="124" height="124" alt="Clear Cases" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Clear<br />Cases</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-leather.svg') }}" width="124" height="124" alt="Leather Cases" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Leather<br />Cases</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-silicone.svg') }}" width="124" height="124" alt="Silicone Cases" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Silicone<br />Cases</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-tough.svg') }}" width="124" height="124" alt="Tough Cases" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Tough<br />Cases</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-wallet.svg') }}" width="124" height="124" alt="Wallet Cases" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Wallet<br />Cases</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-designer.svg') }}" width="124" height="124" alt="Designer Cases" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Designer<br />Cases</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-battery.svg') }}" width="124" height="124" alt="Battery Cases" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Battery<br />Cases</a>
                </div>
              </div>
              <div class="swiper-slide">
                <img loading="lazy" class="w-100 h-auto mb-3" src="{{ asset('uploads/categories/cat-slim.svg') }}" width="124" height="124" alt="Slim Cases" />
                <div class="text-center">
                  <a href="{{ route('shop.index') }}" class="menu-link fw-medium">Slim<br />Cases</a>
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