@extends('layouts/nav_footer')



@section('css')

  <link rel="stylesheet" href="./css/news_info.css">

@endsection


@section('content')

    <main role="main">
        <section class="news_info">
            <div class="container">
                <h2 class="info_title">{{$news->title}}</h2>
                <div class="row">
                    <div class="col-12 my-3 my-md-0 col-md-6">
                        <div class="image_box h-100">
                            <a href="{{$news->image_ul}}" data-lightbox="image-1" data-title="My caption">
                                <img width="100%" src="{{$news->image_ul}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 my-3 my-md-0 col-md-6">
                        <div class="info_content">
                            <h3>{{$news->sub_title}}</h3>
                            {{$news->content}}
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <hr>
    </main>


@endsection


@section('lightbox')


    <!-- lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>


@endsection
