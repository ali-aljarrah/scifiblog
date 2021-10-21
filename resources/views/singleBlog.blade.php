@extends('layout.app')
@section('title', $blog->title)

@section('mainContent')
<!-- One -->
<!-- <section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>Enjoy Reading</p>
            <h2>{{$blog->title}}</h2>
        </header>
    </div>
</section> -->

<section id="One">
    <div class="position-relative" style="background-image: url('/images/bg.jpg');
    height: 13rem;
    background-repeat: no-repeat; width: 100%;
    background-position: right bottom, left top;
    background-size: 100%;">
        <div class="position-absolute top-50 start-50 translate-middle text-center" style="font-family: Serif;">
            <h1 class="text-white">{{$blog->title}}</h1>
            <hr style="margin: auto; height: 3px; opacity: 0.5; color: rgba(239, 239, 239, 1);">
        </div>
    </div>
</section>

<!-- Two -->
<section class="p-4">
    <div class="container">
        <div class="row">
            <article class="p-4">
                <img class="rounded" style=" width: 315px; float: left; margin-right: 33px;" src="{{$blog->featuredImage}}" alt="">
                <h2 class="mb-5" style="display: inline;"><b>{{$blog->title}}</b></h2>
                <p class="mt-5 fs-4">{{$blog->body}}</p>
                <div class="mt-5 mb-5">
                    <p class="fs-5">Article's Category: {{$blog->category_id}}</p>
                    <p class="fs-5">Article's By: Ali Aljarrah</p>
                </div>
            </article>
        </div>
        @php
        $blogdata = ['blog_id' => $blog->id];
        @endphp
        <comment :blogdata="{{ json_encode($blogdata) }}"></comment>
    </div>
</section>
@endsection
