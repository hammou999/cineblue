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
    <div class="c1">
        <img src="/picture/title_hexagons.png"
             alt="تصميم التطبيقات الذكية">
        <div class="page_title_wrapper">
            <div class="page_title_customizer_size">
                <h1 class="page_title">خدمات منتاج الفيديو</h1>
            </div>
            <span class="title_divider"></span>
            <div class="breadcrumbs"></div>
        </div>
    </div>
    <section class="c2">

    </section>
@endsection

@section('script')

@endsection
