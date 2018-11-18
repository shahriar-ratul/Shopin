<!DOCTYPE html>
<html>
<head>
<title>Shopin A Ecommerce</title>
<link href="{{asset('/public/web/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{asset('/public/web/')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="{{asset('/public/web/')}}/css/style4.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script src="{{asset('/public/web/')}}/js/jquery.min.js"></script>
<!--- start-rate---->
<script src="{{asset('/public/web/')}}/js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<!--header-->
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="{{url('/')}}"><img src="{{asset('/public/web/')}}/images/logo.png" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
					@if (Auth::guest())
						<li><a href="{{url('/login')}}">Login</a></li>
						<li><a href="{{url('/register')}}">Register</a></li>
						<li><a href="">Checkout</a></li>
					@endif
					</ul>
				</div>
				
			<div class="col-sm-5 header-social">		
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li><a href="#"><i class="ic4"></i></a></li>
					</ul>
					
						
					
					
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
        	@if (Auth::user())
        		@if( Auth::user()->user_type==1)
	            <li><a class="color" href="{{url('/home')}}">Dashboard</a></li>
	            @elseif( Auth::user()->user_type==0)
	             <li><a class="color" href="{{url('/')}}">Home</a></li>
	            @endif
	          @endif
    		<li class="dropdown mega-dropdown active">
			    <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Women<span class="caret"></span></a>				
				<div class="dropdown-menu ">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>CLOTHING</h4>
									<ul>
										<li><a href="{{url('/')}}/salwar-kameez">SALWAR KAMEEZ</a></li>
										<li><a href="{{url('/')}}/saree">SAREE</a></li>
										<li><a href="{{url('/')}}/KURTIS-TUNICS">KURTIS & TUNICS</a></li>
										<li><a href="{{url('/')}}/HIJAB-SCARF">HIJAB & SCARF</a></li>
										<li><a href="{{url('/')}}/PALAZZO-LEGGINGS">PALAZZO & LEGGINGS</a></li>
										<li><a href="{{url('/')}}/w-T-SHIRTS">T-SHIRTS</a></li>
										<li><a href="{{url('/')}}/SHIRTS">SHIRTS</a></li>
										<li><a href="{{url('/')}}/PANTS">PANTS</a></li>
										
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>ACCESSORIES</h4>
								<ul>
										<li><a href="{{url('/')}}/BAGS">BAGS</a></li>
										<li><a href="{{url('/')}}/EYEWEAR">EYEWEAR</a></li>
										<li><a href="{{url('/')}}/CAPS">CAPS</a></li>
										<li><a href="{{url('/')}}/WEDDING-COLLECTION">WEDDING COLLECTION</a></li>
										<li><a href="{{url('/')}}/JEWELLERY">JEWELLERY</a></li>		
										<li><a href="{{url('/')}}/PERFUMES-DEO">PERFUMES & DEO</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>BEAUTY & HEALTH</h4>
									<ul>
										<li><a href="{{url('/')}}/MAKE UP">MAKE UP</a></li>
										<li><a href="{{url('/')}}/SKIN-CARE">SKIN CARE</a></li>
										<li><a href="{{url('/')}}/HAIR-CARE">HAIR CARE</a></li>
										<li><a href="{{url('/')}}/HEALTH">HEALTH</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>SHOES</h4>
								<ul>
									<li><a href="{{url('/')}}/HEELS">HEELS</a></li>
									<li><a href="{{url('/')}}/SANDALS">SANDALS</a></li>
									<li><a href="{{url('/')}}/FLAT-SHOES">FLAT SHOES</a></li>
								</ul>
								<h4>WATCHES</h4>
								<ul>
									<li><a href="{{url('/')}}/WATCHES">WATCHES</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1 col5">
						<img src="{{asset('/public/web/')}}/images/me.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>				
			<div class="dropdown-menu mega-dropdown-menu">
                <div class="menu-top">
					<div class="col1">
						<div class="h_nav">
							<h4>Topwear</h4>
								<ul>
									<li><a href="{{url('/')}}/t-shirt">T-Shirts</a></li>
									<li><a href="{{url('/')}}/c-shirt">Casual Shirts</a></li>
									<li><a href="{{url('/')}}/f-shirt">Formal Shirts</a></li>
									<li><a href="{{url('/')}}/sweater">Sweaters & Sweatshirts</a></li>
									<li><a href="{{url('/')}}/jackets">Jackets</a></li>
									<li><a href="{{url('/')}}/Coats">Blazers & Coats</a></li>
									<li><a href="{{url('/')}}/suits">Suits</a></li>
										
								</ul>	
						</div>							
					</div>
				<div class="col1">
							<div class="h_nav">
								<h4>Bottomwear</h4>
								<ul>
										<li><a href="{{url('/')}}/jeans">Jeans</a></li>
										<li><a href="{{url('/')}}/Casual-trousers">Casual Trousers</a></li>
										<li><a href="{{url('/')}}/formal-trousers">Formal Trousers</a></li>
										<li><a href="{{url('/')}}/Shorts">Shorts</a></li>
										<li><a href="{{url('/')}}/Track-pants">Track Pants</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Sports & Active Wear</h4>
								
<ul>
										<li><a href="{{url('/')}}/A-T-shirt">Active T-Shirts</a></li>
										<li><a href="{{url('/')}}/Track-Pants-&-Shorts">Track Pants & Shorts</a></li>
										<li><a href="{{url('/')}}/Swimwear">Swimwear</a></li>
										<li><a href="{{url('/')}}/Sports-Accessories">Sports Accessories</a></li>
										<li><a href="{{url('/')}}/Sports-Equipment">Sports Equipment</a></li>
										<li><a href="{{url('/')}}/Sports-Shoes">Sports Shoes</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="{{url('/')}}/Wallets">Wallets</a></li>
									<li><a href="{{url('/')}}/Belts">Belts</a></li>
									<li><a href="{{url('/')}}/Headphones">Headphones</a></li>
									<li><a href="{{url('/')}}/Caps-&-Hats">Caps & Hats</a></li>
									<li><a href="{{url('/')}}/Travel-Accessories">Travel Accessories</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1 col5">
						<img src="{{asset('/public/web/')}}/images/me1.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>

			<li><a class="color3" href="{{url('/products')}}">PRODUCT</a></li>
			<li><a class="color4" href="{{url('/about')}}">About</a></li>
            <li ><a class="color6" href="{{url('/contact')}}">Contact</a></li>
            @if (Auth::user())
            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                	 <li><a href="{{url('/user-profile')}}/{{Auth::user()->id}}">My profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                   
                                </ul>
               </li>
               @endif
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				<li>
				<a href="#" >
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
				</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
					</ul>
					<div class="cart box_1">
						<a href="{{URL('/')}}/mycart">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="{{asset('/public/web/')}}/images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="{{asset('/public/web/')}}/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="{{asset('/public/web/')}}/js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
				<form action="{{url('/')}}/search" method="POST" role="search">
    				{{ csrf_field() }}
					<div class="login-search">
						<input type="submit" value="">
						<input type="text" name="q" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
					</div>
					</form>
				</div>				
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>


		@yield('content')


			
			
		</div>
	<!--//content-->
	<!--//footer-->
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<a href="index.html"><img src="{{asset('/public/web/')}}/images/log.png" alt=""></a>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					
					<div class="col-md-3 footer-middle-in">
						<h6>Information</h6>
						<ul class=" in">
							<li><a href="{{url('/about')}}">About</a></li>
							<li><a href="{{url('/contact')}}">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="contact.html">Site Map</a></li>
						</ul>
						<ul class="in in1">
						@if(Auth::user())
							<li><a href="#">Order History</a></li>
							<li><a href="">Wish List</a></li>
						@else
							<li><a href="{{url('/login')}}">Login</a></li>
						@endif
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Tags</h6>
						<ul class="tag-in">
							<li><a href="#">Shopping</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Women</a></li>
							<li><a href="#">cloth</a></li>
							<li><a href="#">Watch</a></li>
							<li><a href="#">Bags</a></li>
							<li><a href="#"></a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Newsletter</h6>
						<span>Sign up for News Letter</span>
							<form>
								<input type="text" value="Enter your E-mail" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
								<input type="submit" value="Subscribe">	
							</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<ul class="footer-bottom-top">
						<li><a href="#"><img src="{{asset('/public/web/')}}/images/f1.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="{{asset('/public/web/')}}/images/f2.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="{{asset('/public/web/')}}/images/f3.png" class="img-responsive" alt=""></a></li>
					</ul>
					<p class="footer-class">RATUL </p>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('/public/web/')}}/js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="{{asset('/public/web/')}}/js/bootstrap.min.js"></script>
<!--light-box-files -->
		<script src="{{asset('/public/web/')}}/js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="{{asset('/public/web/')}}/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});
		</script>


</body>
</html>