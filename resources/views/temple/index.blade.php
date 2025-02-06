<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temple by Region</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        #temple {
            background: url('your-background-image.jpg') no-repeat center center;
            background-size: cover;
            padding: 50px 0;
            text-align: center;
        }

        .imagewatthai2 {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }

        .wat {
            text-align: center;
        }
    </style>
</head>
<body>

    <div id="temple" class="templeall">
        <h2>TEMPLE BY REGION</h2>
        <p>ค้นหาข้อมูลวัดตามภูมิภาค</p>

        <!-- Swiper Carousel -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Item 1 -->
                <div class="swiper-slide wat">
                    <img src="{{ asset('images/image1.jpg') }}" id="imagewatthai" class="imagewatthai2" alt="ภาคเหนือ">
                    <p>ภาคเหนือ</p>
                </div>
                <!-- Item 2 -->
                <div class="swiper-slide wat">
                    <img src="{{ asset('images/image.jpg') }}" id="imagewatthai" class="imagewatthai2" alt="ภาคกลาง">
                    <p>ภาคกลาง</p>
                </div>
                <!-- Item 3 -->
                <div class="swiper-slide wat">
                    <img src="{{ asset('images/image3.jpg') }}" id="imagewatthai" class="imagewatthai2" alt="ภาคตะวันออกเฉียงเหนือ">
                    <p>ภาคตะวันออกเฉียงเหนือ</p>
                </div>
                <!-- Item 4 -->
                <div class="swiper-slide wat">
                    <img src="{{ asset('images/image4.jpg') }}" id="imagewatthai" class="imagewatthai2" alt="ภาคตะวันตก">
                    <p>ภาคตะวันตก</p>
                </div>
            </div>

            <!-- Pagination & Navigation -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- Bootstrap 5 + Swiper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3, /* Default 3 คอลัมน์ */
            spaceBetween: 20, /* ระยะห่างระหว่าง Item */
            loop: true, /* วนซ้ำ */
            autoplay: {
                delay: 3000, /* Auto Play ทุก 3 วินาที */
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
                1280: { slidesPerView: 4 },
            }
        });

        // ปรับ Auto Play
        function toggleAutoplay(enable) {
            if (enable) {
                swiper.autoplay.start();
            } else {
                swiper.autoplay.stop();
            }
        }
    </script>
</body>
</html>
