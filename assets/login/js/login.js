$(document).ready(function(){
  
    $(".mobile_view .registered").click(function(){
        $(".mobile_view .mobile_signup").addClass("active");
        $(".mobile_view .mobile_login").css("display", "none");
    });
});