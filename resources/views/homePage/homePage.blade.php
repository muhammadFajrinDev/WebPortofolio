@extends('layouts.layouts')
@section('content')

    {{-- Content Body --}}
    {{-- <div class="content opacity"></div> --}}
    <canvas id="canvas-interactive" class="opacity"></canvas>
    <div class="content content-body">
        <div class="c_1 photo-profile">
            <div class="oval-border">
                <div class="photos">
                <img src="{{asset('portofolioAssets/ganteng.png')}}">
                </div>
            </div>
        </div>
        <div class="c_1 name-info">
            <div class="name-index">
                <h1>Muhammad Fajrin Fahlevi</h1>
            </div>
        </div>
        <div class="c_1 jobs-info">
            <div class="jobs-text">
               Full-Stack Developer 
            </div>
        </div>
        <div class="c_1 project-now">
            <div class="project-btn">
                <div class="group-btn">
                    <div class="col-1">
                        Project Now
                    </div>
                    <div class="col-2">
                        <img src='{{asset('portofolioAssets/btn-now.png')}}'>
                    </div>
                </div>
            </div>
        </div>

        
        
    </div>
    <div class="content content-description">
        <div class="group-content-desc">
            <div class="text-desc">
                Hallo Brodhers And Sisters, Welcome to my Website,  
                My journey as a Web developer nearly 3 years ago,  
                a web developer, Not only as a Profession, but because as my hobby too, 
                I like to Learn About the latest technology and solve problems in various programming cases,
                I really like Clean Code, Neat and short Code, 
                I will keep Practicing and learning, Greetings from me.
            </div>
        </div>
    </div>

<script>
$(document).ready(function(){

// Project Now Btn
$( ".project-btn" ).on( "click", function() {
    window.location.href='{{ url('/portofolio') }}';
}); 

setInterval(function(){
    if($(window).width() > 1000){ $("#list-btn-r").hide(); }
},500);

$(".check-btn").click(function(){
    $("#list-btn-r").slideToggle( "slow" );
});

var element = $(".group-footer");
    $(window).scroll(function () {
          if($(window).scrollTop() > 0) {
            element.addClass("animation-footer");
          }
    });
});

// Granim Js
var granimInstance = new Granim({
    element: '#canvas-interactive',
    name: 'interactive-gradient',
    elToSetClassOn: '.opacity',
    direction: 'left-right',
    isPausedWhenNotInView: true,
    stateTransitionSpeed: 500,
    states : {
        "default-state": {
            gradients: [
                [
                    { color: '#e29483', pos: .4 },
                    { color: '#517894', pos: .9 },
                    { color: '#4e919a', pos: 1 }
                ], [
                    { color: '#585a8d', pos: .2 },
                    { color: '#517894', pos: .3 },
                    { color: '#4e919a', pos: .85 }
                ]
            ],
            transitionSpeed: 4000
        }
    }
});
</script>

@endsection 