
fetch('http://marutigems.in/diamonds_web/index.php/home/getallproduct')
.then(response => response.json())
.then(data => {
 console.log(data); 
});


$(document).ready(function(){
    
    $(".nav_bar .bar_icon").click(function () {
        if ($(".nav_bar.nav_list").hasClass("active")) {
            $(".nav_list").removeClass("active");
        } else {
            $(".nav_list").addClass("active");
        }
    });
        
    // $(".search_icon").click(function(e){
    //     e.preventDefault();
    //     var p_id = $(this).data('p_id');
    //     alert(p_id);
    //     $(".modal-popup").addClass("modal-visible");
    // });
    
    $(".modal-popup .icon_close").click(function () {
        // alert("hello");
        $(".modal-popup").removeClass("modal-visible");
    });
 
        $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
    
    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height > 100) {
            $('#back2Top').fadeIn();
        } else {
            $('#back2Top').fadeOut();
        }
    });
        $("#back2Top").click(function(event) {
            event.preventDefault();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return false;
        });
        $(document).scroll(function() {
            var $nav = $("#mainNavbar");
            $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
        });
        $('.items').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    
    $(document).scroll(function() {
        var $nav = $("#mainNavbar");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
    
  });
 