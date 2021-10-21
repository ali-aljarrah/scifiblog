@extends('layout.app')
@section('title', 'Blog')

@section('mainContent')

<div class="slideshow-container">

<div class="mySlides">
    <img src="/images/slide01.jpg" height="650" style="width:100%">
    <div class="text"><h1>Blog For Scientific Articles</h1>
    <hr></div>
</div>

<div class="mySlides">
  <img src="/images/slide02.jpg" height="650" style="width:100%">
  <div class="text"><h1>Blog For Scientific Articles</h1>
  <hr></div>
</div>

<div class="mySlides">
  <img src="/images/slide03.jpg" height="650" style="width:100%">
  <div class="text"><h1>Blog For Scientific Articles</h1>
  <hr></div>
</div>

<div class="mySlides">
  <img src="/images/slide04.jpg" height="650" style="width:100%">
  <div class="text"><h1>Blog For Scientific Articles</h1>
  <hr></div>
</div>

<div class="mySlides">
  <img src="/images/slide05.jpg" height="650" style="width:100%">
  <div class="text"><h1>Blog For Scientific Articles</h1>
  <hr></div>
</div>

</div>
<br>

<div style="text-align:center; display: none;">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<!-- One -->
<section class="container">
    <div class="row text-center m-4">
        <h2><b>Latest Blogs</b></h2>
        <hr style="width: 40%; margin: auto;">
    </div>
            <div class="container">
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
                            <h3 class="card-title" style="color: black;"><b>{{$b->title}}</b></h3>
                            <p class="card-text text-dark">{{$b->excerpt}}</p>
                        </div>
                    </a>
                    </div>
                    @endforeach
                    @endif
                    <div class="text-center m-5">
                        <button class="btn" style="background-color: black;"><a class="text-decoration-none text-white" href="/Allblogs">Discover All Blogs</a></button>
                    </div>
                </div>
            </div>
</section>

@endsection
