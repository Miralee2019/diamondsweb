$(document).ready(function(){

    // $(window).scroll(function() {
    //     $(".onsale_img").mouseenter(function () {
    //         $(".onsale_content_overlay").show(500);
    //      });
    //     $(".onsale_img").mouseleave(function () {
    //         $(".onsale_content_overlay").hide(500);
    //     }); 
    //     var height = $(window).scrollTop();
    //     if (height > 100) {
    //         $('#back2Top').fadeIn();
    //     } else {
    //         $('#back2Top').fadeOut();
    //     }
    // });
        $("#back2Top").click(function(event) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });
        $(document).scroll(function() {
            var $nav = $("#mainNavbar");
            $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        });
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
    
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
    output.innerHTML = this.value;
    }
    function sortProductsPriceAscending() {
        // change variable name, so it's clear what it contains
        var gridItems = $('.price_box');
      
        gridItems.sort(function(a, b){
          // we are sorting the gridItems, but we are sorting them on the nested
          // product card prices.  So we have to find the nested product card
          // to get the price off of
          return $('.product-card', a).data("price") - $('.product-card', b).data("price");
        });
      
        // when you put the grid items back on the container, just append them rather
        // than using html().  Append will just move them.
        $(".price_cart").append(gridItems);
      }
  
});
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}    