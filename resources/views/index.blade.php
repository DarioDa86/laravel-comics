@extends('layout.base')

@section('pageContent')
    <section class="container">

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
    <section class="icons" >
        <ul class="row-icons container">
            
            <li><a href="#"><img src="{{asset("images/buy-comics-digital-comics.png")}}" alt="Logo DC"> DIGITAL COMICS</a></li>
            <li><a href="#"><img src="{{asset("images/buy-comics-merchandise.png")}}" alt="Logo DC"></a><a href="#">DC MERCHANDISE</a></li>
            <li><a href="#"><img src="{{asset("images/buy-comics-subscriptions.png")}}" alt="Logo DC"></a><a href="#">SUBSCRIPTION</a></li>
            <li><a href="#"><img src="{{asset("images/buy-comics-shop-locator.png")}}" alt="Logo DC"></a><a href="#">COMIC SHOP LOCATOR</a></li>
            <li><a href="#"><img src="{{asset("images/buy-dc-power-visa.svg")}}" alt="Logo DC"></a><a href="#">DC POWER VISA</a></li>
            
        </ul>
    </section>
@endsection