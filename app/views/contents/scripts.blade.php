@section('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/price-regulator/jshashtable-2.1_src.js"></script>
<script src="js/price-regulator/jquery.numberformatter-1.2.3.js"></script>
<script src="js/price-regulator/tmpl.js"></script>
<script src="js/price-regulator/jquery.dependClass-0.1.js"></script>
<script src="js/price-regulator/draggable-0.1.js"></script>
<script src="js/price-regulator/jquery.slider.js"></script>
<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="js/jquery.imagesloaded.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/jquery.easypiechart.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/jquery.knob.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.selectBox.min.js"></script>
<script src="js/jquery.royalslider.min.js"></script>
<script src="js/jquery.tubular.1.0.js"></script>
<script src="js/SmoothScroll.js"></script>
<script src="js/country.js"></script>
<script src="js/spin.min.js"></script>
<script src="js/ladda.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/raphael.min.js"></script>
<script src="js/video.js"></script>
<script src="js/pixastic.custom.js"></script>
<script src="js/livicons-1.3.min.js"></script>
<script src="js/layerslider/greensock.js"></script>
<script src="js/layerslider/layerslider.transitions.js"></script>
<script src="js/layerslider/layerslider.kreaturamedia.jquery.js"></script>
<script src="js/revolution/jquery.themepunch.plugins.min.js"></script>
<script src="js/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="js/bootstrapValidator.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
$(document).ready(function(){
		$('.img-mon').mouseover(function(){
			$('.cont-cps').removeClass('active');
			$('.img-mon').removeClass('active');
			var id = $(this).attr("id");
			var id = "."+id;
			$(this).addClass('active');
			$(id).addClass('active');
		});
	});

$(document).ready(function(){
		jQuery('.formats').click(function(){
			jQuery('.formats').removeClass('active');
			jQuery(this).addClass('active');
			var img = jQuery(this).data('img');
			jQuery('.formato-b img').removeClass('active');
			jQuery('.formato-b img.'+img).addClass('active');
		});
	});

jQuery(document).ready(function(){
 jQuery('.menu-prov li a, .link-banner').click(function(e){
  e.preventDefault();
 
  var element = '#'+jQuery(this).data('scroll');
  var scroll = jQuery(element).offset().top - 60;
  console.log(scroll);
  jQuery('body').animate({scrollTop: scroll },'slow');
 
  return false;
 });
});

jQuery(window).load(function(){
					(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=324603094294664&version=v2.0";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));

				});

</script>
@stop