
$(document).ready(function(){
    
    // Show Photo
    var modal = $("#myModal");
    var modalImg = $("#img01");
    var captionText = $("#caption");
    
    $(document).on("click",".photo_list",function(event){
        $('.photo_list').removeClass("list_active_photo");
        changePict(modalImg,$(this).attr("src"),event);
    });
    
    $(document).on("click","#header_img", function() {
        modal.css("display","block");
        modalImg.attr("src", $(this).attr("src"));
        captionText.html($(this).attr("alt"));
    });
    
    // Close Photo
   $(".close").click(function(){
     modal.css("display","none");
   });

   setInterval(function(){
        if($(window).width() > 1000){ $("#list-btn-r").hide(); }
    },500);
    
    $(".check-btn").click(function(){
        $("#list-btn-r").slideToggle( "slow" );
    });

});

