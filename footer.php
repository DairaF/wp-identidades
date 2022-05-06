<footer class="">
		<div class="container-fluid p-4">
			<div class="row justify-content-between">
        
				<div class="col-12 col-lg-6 col-xl-4">
					<div class="w-100 footer-brand mb-4">
						<a href="https://fund.ar" target="blank">
						<img src="https://identidadesinformadas.fund.ar/wp-content/uploads/2022/05/brand-footer.png" />
						</a>
					</div>
				</div>
				
				<div class="col-12 col-lg-6 ">
				
					<div class="mb-4 ">
						<h5><strong>Identidades Informadas</strong></h5>
						<h6>Invitación a grupos y organizaciones a dejar un email para quedar en contacto.</h6>
					</div>
					<?php echo apply_shortcodes( '[contact-form-7 id="144" title="Untitled"]' ); ?>
				</div>
			 
      <div class="col-12 col-lg-3 ajusta-desk">
				<div class="row align-items-center mt-5 mt-lg-0">				
					<div class="col-6">							
						<a href="mailto:contacto@fund.ar" class="blanco"><strong>contacto@fund.ar</strong></a>           
					</div>
					<div class="col-6">
						<div class="links-sociales">
							<a href="https://www.instagram.com/fundarpoliticas" target="_blank"><i class="fab fa-instagram"></i></a>
							<a href="https://twitter.com/fundarpoliticas" target="_blank"><i class="fab fa-twitter"></i></a>
							<a href="https://www.linkedin.com/company/fundarpoliticas/?originalSubdomain=ar" target="_blank"><i class="fab fa-linkedin-in"></i></a>
						</div>           
					</div>
				</div>
			</div>
    
		</div>								
    </div>								
  </footer>

	
 <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!-- SLICKt -->
 <script type="text/javascript" src="/wp-includes/js/slick.js" ></script>
 
 <!-- Core JavaScript -->
 <script type="text/javascript" src="/wp-includes/js/main.js" ></script>
 <script>
	 
(function(){

var doc = document.documentElement;
var w = window;

var prevScroll = w.scrollY || doc.scrollTop;
var curScroll;
var direction = 0;
var prevDirection = 0;

var header = document.getElementById('site-header');

var checkScroll = function() {

  /*
  ** Find the direction of scroll
  ** 0 - initial, 1 - up, 2 - down
  */

  curScroll = w.scrollY || doc.scrollTop;
  if (curScroll > prevScroll) { 
	//scrolled up
	direction = 2;
  }
  else if (curScroll < prevScroll) { 
	//scrolled down
	direction = 1;
  }

  if (direction !== prevDirection) {
	toggleHeader(direction, curScroll);
  }

  prevScroll = curScroll;
};

var toggleHeader = function(direction, curScroll) {
  if (direction === 2 && curScroll > 52) { 

	//replace 52 with the height of your header in px

	header.classList.add('hide');
	prevDirection = direction;
  }
  else if (direction === 1) {
	header.classList.remove('hide');
	prevDirection = direction;
  }
};

window.addEventListener('scroll', checkScroll);

})();

$(window).on('scroll', function() {
	  if ($(window).scrollTop() > 200) {
			  $('#site-header').addClass('menu-bg');
	  } else {
			  $('#site-header').removeClass('menu-bg');
	  }
});


$('.c-relacionadas').slick({
dots: true,
infinite: false,
speed: 300,
  arrows:false,
slidesToShow: 4,
slidesToScroll: 4,
responsive: [
  {
	breakpoint: 1200,
	settings: {
	  slidesToShow: 3,
	  slidesToScroll: 3,
	  infinite: true,
	  dots: true
	}
  },
  {
	breakpoint: 991,
	settings: {
	  slidesToShow: 2,
	  slidesToScroll: 2
	}
  },
  {
	breakpoint: 480,
	settings: {
				centerMode: true,
	  slidesToShow: 1,
	  slidesToScroll: 1
	}
  }
  // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
]
});



// tabbed content //
  $(".tab_content").hide();
  $(".tab_content:first").show();

/* if in tab mode */
  $("ul.tabs li").click(function() {
	  
	$(".tab_content").hide();
	var activeTab = $(this).attr("rel"); 
	$("#"+activeTab).fadeIn();		
	  
	$("ul.tabs li").removeClass("active");
	$(this).addClass("active");

	$(".tab_drawer_heading").removeClass("d_active");
	$(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
	
  /*$(".tabs").css("margin-top", function(){ 
	 return ($(".tab_container").outerHeight() - $(".tabs").outerHeight() ) / 2;
  });*/
  });
  $(".tab_container").css("min-height", function(){ 
	return $(".tabs").outerHeight() + 50;
  });
  /* if in drawer mode */
  $(".tab_drawer_heading").click(function() {
	
	$(".tab_content").hide();
	var d_activeTab = $(this).attr("rel"); 
	$("#"+d_activeTab).fadeIn();
	
	$(".tab_drawer_heading").removeClass("d_active");
	$(this).addClass("d_active");
	
	$("ul.tabs li").removeClass("active");
	$("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
  });
  
  


  
   /*STICKY MENU*/
$(function(){	 
if(window.innerWidth < 980){
			  const navLinks = document.querySelectorAll('.nav-item-hoja')
			  const menuToggle = document.getElementById('navbarNav')
		  const bsCollapse = new bootstrap.Collapse(menuToggle, {toggle:false})
	  navLinks.forEach((l) => {
			  l.addEventListener('click', () => { bsCollapse.toggle() })
	  })
}
	
});	
  
var div_top = $('.navbar-hoja').offset().top;

$(window).scroll(function() {
  var window_top = $(window).scrollTop() - 0;
  if (window_top > div_top) {
	  if (!$('.navbar-hoja').is('.sticky')) {
		  $('.navbar-hoja').addClass('sticky');
	  }
  } else {
	  $('.navbar-hoja').removeClass('sticky');
  }
});


$('.menu-hoja').click(function(e) {
  e.stopPropagation();
});











 </script>
</body>
</html>