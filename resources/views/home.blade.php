@extends('layouts.menu')

@section('title')
    <title>متجر تحفة يرحب بكم</title>
@endsection


@section('css-file')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endsection



@section('content')

    <section class="s1">
        <div class="d1">
            <div class="hero-info">
                <div class="text-animation">
                    <p>إن كنت تبحث عن: </p>
                    <section class="animation">
                        <div class="first">
                            <div>مصور فتوغرافي</div>
                        </div>
                        <div class="second">
                            <div>معدل فيديوهات</div>
                        </div>
                        <div class="third">
                            <div>مصمم</div>
                        </div>
                        <div class="fourth">
                            <div>معلق صوتي</div>
                        </div>
                        <div class="fifth">
                            <div>مطور برامج ومواقع</div>
                        </div>
                        <div class="sixth">
                            <div>مسوق ومروج</div>
                        </div>
                    </section>
                    <p>فأنت في المكان الصحيح</p>
                </div>
                <div class="patterns">
                    <svg width="100%" height="100%">
                        <defs>
                            <pattern id="polka-dots" x="0" y="0" width="100" height="100"
                                     patternUnits="userSpaceOnUse">
                                <circle fill="#be9ddf" cx="25" cy="25" r="3"></circle>
                            </pattern>
                            <style>
                                @import url("https://fonts.googleapis.com/css?  family=Lora:400,400i,700,700i");
                            </style>

                        </defs>

                        <rect x="0" y="0" width="100%" height="100%" fill="url(#polka-dots)"></rect>


                        <text x="50%" y="60%" text-anchor="middle">
                            CineBlue Production
                        </text>
                    </svg>
                </div>
                <p>
                    مؤسسة خدماتية توفر لكم مجموعة من الخدمات المتكاملة:
                    <br>
                    الإنتاج السمعي البصري، تطوير الفرق وتقديم الحلول التقنية، الخدمات البرمجية، الخدمات الصوية، خدمات
                    التصميم.
                    <br>
                    من خلال فريق فتي ذو خبرة في المجال، نسعى دائما لتحقيق أفضل النتائج لعملائنا.
                </p>

            </div>
            <div class="hero-img">
                <img src="/picture/hero-img.svg" alt="" class="img-fluid">
            </div>

        </div>
    </section>
    <div class="contentt">
        <h1>خدماتنا</h1>
        <div class="services">
            <a href="/developer-service" class="service">
                <div class="PictureService">
                    <img src="/picture/1.jpg"/>
                </div>
                <div class="DescreptionService">
                    خدمة البرمجة
                </div>
            </a>
            <a href="/photography-service" class="service">
                <div class="PictureService">
                    <img src="/picture/2.webp"/>
                </div>
                <div class="DescreptionService">
                    خدمة التصوير الفوتوغرافي
                </div>
            </a>
            <a href="/design-service" class="service">
                <div class="PictureService">
                    <img src="/picture/3.jpeg"/>
                </div>
                <div class="DescreptionService">
                    خدمة التصميم
                </div>
            </a>
            <a href="/voiceover-service" class="service">
                <div class="PictureService">
                    <img src="/picture/4.jpg"/>
                </div>
                <div class="DescreptionService">
                    خدمة التعليق الصوتي
                </div>
            </a>
            <a href="/marketing-service" class="service">
                <div class="PictureService">
                    <img src="/picture/5.jpg"/>
                </div>
                <div class="DescreptionService">
                    خدمة التسويق
                </div>
            </a>
            <a href="/videoediting-service" class="service">
                <div class="PictureService">
                    <img src="/picture/6.png"/>
                </div>
                <div class="DescreptionService">
                    خدمة منتاج فيديو
                </div>
            </a>


        </div>
        <h1>منتجاتنا البرمجية</h1>
        <div class="products-inf">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/picture/1.jpg"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="/picture/2.webp"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="/picture/3.jpeg"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="/picture/4.jpg"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="/picture/5.jpg"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="/picture/6.png"/>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <h1>منتجاتنا الفنية</h1>
        <div class="products-art">
            <div class="cadre">
                <div class="PictureProducts">
                    <img src="/picture/6.png"/>
                </div>
                <div class="DescreptionProducts">
                    خدمة منتاج فيديو
                </div>
            </div>
            <div class="decord">
                <div class="PictureProducts">
                    <img src="/picture/6.png"/>
                </div>
                <div class="DescreptionProducts">
                    خدمة منتاج فيديو
                </div>
            </div>
        </div>
        <div class="partener">
            <h1>عملائنا</h1>
            <div class="containerrr">
                <div class="icon">
                    <div class="imgBx active" style="--i:0;" data-id="content1">
                        <img src="/picture/1.jpg">
                    </div>
                    <div class="imgBx" style="--i:1;" data-id="content2">
                        <img src="/picture/2.webp">
                    </div>
                    <div class="imgBx" style="--i:2;" data-id="content3">
                        <img src="/picture/3.jpeg">
                    </div>
                    <div class="imgBx" style="--i:3;" data-id="content4">
                        <img src="/picture/4.jpg">
                    </div>
                    <div class="imgBx" style="--i:4;" data-id="content5">
                        <img src="/picture/5.jpg">
                    </div>
                    <div class="imgBx" style="--i:5;" data-id="content6">
                        <img src="/picture/6.png">
                    </div>
                    <div class="imgBx" style="--i:6;" data-id="content7">
                        <img src="/picture/3.jpeg">
                    </div>
                    <div class="imgBx" style="--i:7;" data-id="content8">
                        <img src="/picture/4.jpg">
                    </div>
                </div>
                <div class="content">
                    <div class="contentBx active" id="content1">
                        <div class="card">
                            <div class="imgBx">
                                <img src="/picture/1.jpg">
                            </div>
                            <div class="textBx">
                                <h2>
                                    Someone Famous <br> <span>Product Designer</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="contentBx" id="content2">
                        <div class="card">
                            <div class="imgBx">
                                <img src="/picture/2.webp">
                            </div>
                            <div class="textBx">
                                <h2>
                                    Someone Famous <br> <span>Product Designer</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="contentBx" id="content3">
                        <div class="card">
                            <div class="imgBx">
                                <img src="/picture/3.jpeg">
                            </div>
                            <div class="textBx">
                                <h2>
                                    Someone Famous <br> <span>Product Designer</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="contentBx" id="content4">
                        <div class="card">
                            <div class="imgBx">
                                <img src="/picture/4.jpg">
                            </div>
                            <div class="textBx">
                                <h2>
                                    Someone Famous <br> <span>Product Designer</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="contentBx" id="content5">
                        <div class="card">
                            <div class="imgBx">
                                <img src="/picture/5.jpg">
                            </div>
                            <div class="textBx">
                                <h2>
                                    Someone Famous <br> <span>Product Designer</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="contentBx" id="content6">
                        <div class="card">
                            <div class="imgBx">
                                <img src="/picture/6.png">
                            </div>
                            <div class="textBx">
                                <h2>
                                    Someone Famous <br> <span>Product Designer</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="contentBx" id="content7">
                        <div class="card">
                            <div class="imgBx">
                                <img src="/picture/3.jpeg">
                            </div>
                            <div class="textBx">
                                <h2>
                                    Someone Famous <br> <span>Product Designer</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="contentBx" id="content8">
                        <div class="card">
                            <div class="imgBx">
                                <img src="/picture/4.jpg">
                            </div>
                            <div class="textBx">
                                <h2>
                                    Someone Famous <br> <span>Product Designer</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            initialSlide: 2,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 30,
                depth: 100,
                modifier: 2,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>

    <script>
        let imgBx = document.querySelectorAll('.icon .imgBx');
        let contentBx = document.querySelectorAll('.contentBx');

        for (let i = 0; i < imgBx.length; i++) {
            imgBx[i].addEventListener('mouseover', function () {
                for (let i = 0; i < contentBx.length; i++) {
                    contentBx[i].className = 'contentBx';

                }
                document.getElementById(this.dataset.id).className = 'contentBx active';
                for (let i = 0; i < imgBx.length; i++) {
                    imgBx[i].className = 'imgBx';
                }
                this.className = 'imgBx active';
            });
        }

        for (let i = 0; i < imgBx.length; i++) {
            imgBx[i].addEventListener('click', function () {
                for (let i = 0; i < contentBx.length; i++) {
                    contentBx[i].className = 'contentBx';

                }
                document.getElementById(this.dataset.id).className = 'contentBx active';
                for (let i = 0; i < imgBx.length; i++) {
                    imgBx[i].className = 'imgBx';
                }
                this.className = 'imgBx active';
            });
        }
    </script>
@endsection
