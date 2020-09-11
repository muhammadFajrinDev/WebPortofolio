<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muhammad Fajrin Fahlevi</title>
    {{-- <link href="{{ asset('portofolioAssets/programming-icon.ico') }}" /> --}}
    <link href="{{ asset('mainCSS/style.css') }}" rel="stylesheet">
    <script src="{{ asset('main-js/jquery.js') }}"></script>
    <script src="{{ asset('main-js/keyframe-lib.js') }}"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mainCSS/font-awesome.css') }}"> 
    <script src="{{ asset('main-js/granim.min.js') }}"></script>
</head>
<body>
      {{-- Header --}}
      <div class="content header">
        <div class='group-header'>
            {{-- <div class="welcomes">
                Welcome to my Portofolio, You can give me 
                <a href="#">Suggestion</a> for my Portofolio Thankyou !
            </div> --}}
            <div class="btn-suggestion">
                Suggestion !
            </div>
        </div>
        <div class="group-header-bar">
            <div class="menu-res">
                <input type="checkbox" id="check">
                <label for="check" class="check-btn">
                    <i class="fas fa-bars"></i>
                </label>
            </div>
           <div class='bar'>
                <div id="list-btn">
                    <div class="searching-container">
                        <form action="#">
                            <input type="text" id='search-txt' placeholder="Mau nyari opo?" name="search">
                            <button id="submit-sch" type="submit"><i class="fas fa-search"></i></button>
                          </form>
                    </div>
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/portofolio') }}">Portofolio</a>
                    <a href="#">Experience</a>
                    <a href="#">About Me</a>
                    <a href="#">Contact</a>
                    <a href="#">Articles</a>
                </div>
           </div>
        </div>
    </div>
    <div id="list-btn-r">
        <div class="list-r">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/portofolio') }}">Portofolio</a>
            <a href="#">Experience</a>
            <a href="#">About Me</a>
            <a href="#">Contact</a>
            <a href="#">Articles</a>
        </div>
        <div class="searching-container">
            <form action="#">
                <input type="text" id='search-txt' placeholder="Mau nyari opo?" name="search">
                <button id="submit-sch" type="submit"><i class="fa fa-search"></i></button>
              </form>
        </div>
    </div>
    
    {{-- Body --}}
    @yield('content')
    
    {{-- Footer --}}
    <div class="content footer">
        <div class="group-footer">
            <div class="logo-fajrin">
                <img src="{{asset('portofolioAssets/programming.png')}}">
            </div>
            <div class="list-menu-group">
                <div class="col-head-list">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="#">Experience</a>
                        <a href="#">Contact</a>
                        <a href="#">Suggestion</a>
                </div>
                <div class="col-footer-list">
                        <a href="{{ url('/portofolio') }}">Portofolio</a>
                        <a href="#">About Me</a>
                        <a href="#">Articles</a>
                </div>
            </div>
            <div class="group-medsos">
                <div class="logo-medsos">
                    <img src="{{asset('portofolioAssets/ig.png')}}" alt="">
                    <img src="{{asset('portofolioAssets/fb.png')}}" alt="">
                    <img src="{{asset('portofolioAssets/gh.png')}}" alt="">
                    <img src="{{asset('portofolioAssets/wa.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="msg-love">
            <div class="msg-wife">
            Copyright © Muhammad Fajrin Fahlevi 2020  | Tangerang & Jakarta | Creating With My Wife <img src="{{asset('portofolioAssets/wife.gif')}}">
            </div>
        </div>
    </div>

</body>
</html>