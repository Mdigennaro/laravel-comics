@extends('layouts.app')
@section('content')
  
  <main>

    <div class="jumbotron"></div>

    <div class="comic-center">
      <div class="container">

        <div class="title">
          <h2>current series</h2>
        </div>

        <div class="box-fumetti">
        @foreach ($fumetti as $fumetto)
          
          <div class="fumetto">
            <a href="#">

              <div class="cover">
                <img src="{{$fumetto['thumb']}}" alt="">
              </div>
              
              <h4>{{$fumetto['series']}}</h4>
            </a>
          </div>
          
          @endforeach
        </div>

        <div class="load">
          <h2>load more</h2>
        </div>

      </div>
    </div>

    <div class="comic-bottom">
      <div class="container">
        <ul>
          <li><a href="#"><img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">Digital comics</a></li>
          <li><a href="#"><img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">dc merchandise</a></li>
          <li><a href="#"><img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">subscription</a></li>
          <li><a href="#"><img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">comic shop locator</a></li>
          <li><a href="#"><img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">dc power visa</a></li>
        </ul>
      </div>
    </div>

  </main>
    
@endsection