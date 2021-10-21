@extends('layout.app')
@section('title', $categoryName)

@section('mainContent')

<section id="One">
    <div class="position-relative" style="background-image: url('/images/bg.jpg');
    height: 13rem;
    background-repeat: no-repeat; width: 100%;
    background-position: right bottom, left top;
    background-size: 100%;">
        <div class="position-absolute top-50 start-50 translate-middle text-center" style="font-family: Serif;">
            <h1 class="text-white">{{$categoryName}}</h1>
            <hr style="margin: auto; height: 3px; opacity: 0.5; color: rgba(239, 239, 239, 1);">
        </div>
    </div>
</section>


<section class="container">
    <div class="container"  style="margin: 50px 0;">
        <div class="row d-flex justify-content-center">
            @if(count($blogs)>0)
            @foreach($blogs as $b)
            <div class="card text-center m-2 p-0" style="width: 18rem; height: 28rem;">
                <a href="/blog/{{$b->id}}" style="text-decoration: none; color: black;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border border-5 border-end-0 border-start-0 rounded-2 p-0">{{$b->category_id}}</li>
                    </ul>
                    <div style="height: 200px; width: auto;">
                        <img class="card-img-top" src="{{$b->featuredImage}}" alt="Card image cap" style="width: 100%; height: 100%;">
                    </div>
                    <div class="card-body position-relative" style="height: 195px;">
                        <h3 class="card-title"><b>{{$b->title}}</b></h3>
                        <p class="card-text text-dark">{{$b->excerpt}}</p>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
<div>
    {{ $blogs->links() }}
</div>
<div class="p-4" style="background-color: #e5e7e9;"></div>
@endsection
