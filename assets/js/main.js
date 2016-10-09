// Our custom js
$(document).ready(function(){
	
	$('.Slider').owlCarousel({
        loop:true,
        margin:10,
        autoplay: true,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
	
	$(".owl-next").html("<i class='fa fa-chevron-right'></i>");
    $(".owl-prev").html("<i class='fa fa-chevron-left'></i>");
	
	//
    
    $(".scrolltop").click(function(){
        $("html,body").animate({ scrollTop:0} , 600)
    });
	
	//
	$('.iconmob').click(function(){
		$('.MainNav .menu').toggleClass('show');
	});
	
	//
	function fix(){
		var windo = $(window).width();
	
		if (windo <= 768) {

			$(window).scroll(function(){

				var sc = $(window).scrollTop() ,
					hit = $('.right-side').outerHeight(),
					fot = $('footer').outerHeight(),
					kkk= $('#cardsWarpper').offset().top ,
					hhh = ($("footer").offset().top - hit),
					ofst = (($("footer").offset().top - hit) - fot);



				if(sc > kkk){
					if (sc > hhh) {

						$(".right-side").css({

							position : 'relative',

							top : (ofst)

						});

					} else {

						$(".right-side").css({

							position : 'fixed',

							top : '33px'

						});
					}
				}else{
					$(".right-side").css({

						position : 'relative',

						top : '0'

					});
				}

			});
		}
	}
	// fix();
	
	$(window).resize(function(){
		// fix();
	});
	
});





