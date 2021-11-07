@extends('layout.base')

@section('pageContent')
    <section class="container ">

        <ul class="comics">
            <div class="tag-series" >
                CURRENT SERIES
            </div>
        @foreach ($comicsResults as $comic)
            <li class="comic" >
                <div class="box-img" >
                    <img class="cover-img" src="{{$comic["thumb"]}}" alt="">
                </div>
                <h5>{{$comic["series"]}}</h5>
            </li>
        @endforeach
        </ul>
        <div class="load-btn">
            <a href="#">LOAD MORE</a>
        </div>
    </section>
@endsection