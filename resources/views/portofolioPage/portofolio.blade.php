@extends('layouts.layouts')
@section('content')

    {{-- Content Body --}}
    <div class="content opacity_portofolio"></div>
    <div class="content content_body_portofolio">
        <div class="name-info">
            <div class="name-index">
                <h1>My Projects</h1>
            </div>
        </div>
        <div class="container_slider">
            <div class="btn_left"></div>
            <div class="list_content">
                
            </div>
            <div class="btn_right"></div>
        </div>
    </div>
    <div class="content content-description">
        <div class="group-content-desc">
            
        </div>
    </div>

<script>
$(document).ready(function(){

$(this).scrollTop(0);

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
</script>

@endsection 