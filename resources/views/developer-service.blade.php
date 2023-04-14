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

    <link rel="stylesheet" type="text/css" href="{{asset('css/services.css')}}">

@endsection


@section('content')
    <div class="float-bt">
        <button class="button">طلب الخدمة</button>
    </div>
    <div class="c1">
        <img src="/picture/title_hexagons.png"
             alt="تصميم التطبيقات الذكية">
        <div class="page_title_wrapper">
            <div class="page_title_customizer_size">
                <h1 class="page_title">خدمات البرمجة</h1>
            </div>
            <span class="title_divider"></span>
            <div class="breadcrumbs"></div>
        </div>
    </div>
    <section class="c2">
        <div class="split-div">
            <div class="discreption">
                <h3>
                    برمجة وتطوير المواقع الإلكترونية
                    <span class="rb_textmodule_divider"></span>
                </h3>
                <div>

                </div>
                <p>
                    تتيح خدمة تطوير المواقع التي نقدمها في فريقنا إنشاء مواقع ويب مخصصة لتلبية احتياجات عملك بدقة وذلك
                    بتصميم واجهات المستخدم الأنيقة والمتجاوبة مع جميع الأجهزة.
                </p>
            </div>
            <div class="pictures">
                <img src="/picture/siteweb.png">
            </div>
        </div>

        <div class="split-div rev-div">
            <div class="discreption">
                <h3>
                    برمجة تطبيقات الهاتف
                    <span class="rb_textmodule_divider"></span>
                </h3>
                <div>

                </div>
                <p>
                    سواء كنت تريد تطبيقًا لعملك أو لنشاطك التجاري أو حتى لأغراض شخصية، يمكننا مساعدتك في تحقيق ذلك، نقدم
                    خدمة تطوير تطبيقات الهواتف، ونهدف إلى توفير أفضل تجربة للمستخدم من خلال تطبيقات مبتكرة وذكية.
                    <br>
                    نحن نوفر خدمات تطوير التطبيقات للأندرويد وiOS، بدءًا من تصميم الواجهة الرسومية وتطوير البرمجيات
                    وصولاً إلى إطلاق التطبيق في المتاجر الرئيسية.
                </p>
            </div>
            <div class="pictures">
                <img src="/picture/banner.svg">
            </div>
        </div>

        <div class="split-div">
            <div class="discreption">
                <h3>
                    برمجة برامج سطح المكتب
                    <span class="rb_textmodule_divider"></span>
                </h3>
                <div>

                </div>
                <p>
                    تهدف خدمة تطوير برامج سطح المكتب التي نقدمها إلى تلبية احتياجات عملك من خلال تصميم برامج تلائم عملك
                    وتساعدك على تحسين الإنتاجية، بتصميم برامج مختلفة ، مثل برامج الإدارة، برامج المحاسبة، برامج
                    المشروعات، والعديد من البرامج الأخرى
                </p>
            </div>
            <div class="pictures">
                <img src="/picture/sss.png">
            </div>
        </div>

        <div class="split-div rev-div">
            <div class="discreption">
                <h3>
                    تقديم حلول تقنية برمجية
                    <span class="rb_textmodule_divider"></span>
                </h3>
                <div>
                </div>
                <p>
                    إذا كنت تواجه مشكلات في مجال التكنولوجيا أو البرمجيات، ففريقنا هنا لمساعدتك في إيجاد الحلول المناسبة
                    لك. نحن نوفر خدمات تطوير برمجيات مخصصة لتلبية احتياجات عملك، سواء كان ذلك بما يتعلق بتطوير تطبيقات
                    الويب، تطوير تطبيقات الهواتف الذكية، أو تقديم حلول برمجية مخصصة لبرامج سطح المكتب.
                </p>
            </div>
            <div class="pictures">
                <img src="/picture/areas.png">
            </div>
        </div>


    </section>
@endsection

@section('script')

@endsection
