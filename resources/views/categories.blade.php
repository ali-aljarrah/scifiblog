@extends('layout.app')
@section('title', 'Categories')

@section('mainContent')

<section id="One">
    <div class="position-relative" style="background-image: url('/images/bg.jpg');
    height: 13rem;
    background-repeat: no-repeat; width: 100%;
    background-position: right bottom, left top;
    background-size: 100%;">
        <div class="position-absolute top-50 start-50 translate-middle text-center" style="font-family: Serif;">
            <h1 class="text-white">All Categories</h1>
            <hr style="margin: auto; height: 3px; opacity: 0.5; color: rgba(239, 239, 239, 1);">
            <p class="text-white">Enjoy Reading</p>
        </div>
    </div>
</section>


<section class="p-4">
    <div>
        <div class="container">
            @if(count($categories)>0)
            @foreach($categories as $c)
            <div class="border m-3" style="background-color: whitesmoke;">
                <div class="m-3 ">
                    <h4 class="m-3">{{$c->name}}</h4>
                    @php
                    $catdata = ['categoryName' => $c->name];
                    @endphp
                    <categoriessort :catdata="{{ json_encode($catdata) }}"></categoriessort>
                </div>
            </div>
            @endforeach
            @endif
        </div>
</section>
        <div>
            {!! $categories->links() !!}
        </div>
        <div class="p-4" style="background-color: #e5e7e9;"></div>
@endsection
