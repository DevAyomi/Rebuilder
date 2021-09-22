<!DOCTYPE HTML>
<html>
<head>
<title>Divine Rebuilder | Home Page </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Generous Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{  asset('backend/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{ asset('/backend/css/style.css') }}" rel='stylesheet' type='text/css' />
<script src="{{ asset('backend/js/jquery.min.js') }}"> </script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Poiret+One|Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>


</head>
<body>
	<!--start-home-->
	<div id="home" class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="index.html"><h1>TD<span>RM</span></h1></a>
				</div>
				<div class="do-button">
					<ul class="f-icons">
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="gg"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="p"> </a></li>
						<li><a href="donation.html" class="donate">Donate Now<i class="glyphicon glyphicon-heart"></i></a></li>
					</ul>

				</div>
				<div class="clearfix"></div>
				<span class="menu"></span>
				<div class="top-menu">
				<ul class="cl-effect-16">
						<li><a class="active" href="index.html" data-hover="HOME">Home</a></li>
						<li><a href="about.html" data-hover="About">About</a></li>
						<li><a href="typography.html" data-hover="SERVICES">SERVICES</a></li>
						<li><a href="gallery.html" data-hover="Gallery">Gallery</a></li>
						<li><a href="blog.html" data-hover="BLOG">BLOG</a></li>
						<li><a href="contact.html" data-hover="CONTACT">Contact</a></li>
						<div class="clearfix"> </div>
					</ul>
				</div>
			<!-- script-for-menu -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-menu ul").slideToggle(300);
						});
					});
				</script>
	<!--End-top-nav-script-->
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="banner">
				<div class="container">
					<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider4">
					<li>
								<div class="banner-info">
									<h3>Deliverance</h3>
									<h4>FROM DEMONIC AFFLICTIONS</h4>
								</div>
							</li>
							<li>
								<div class="banner-info">
								   <h3>DEEP</h3>
									<h4>TEACHING OF THE WORD</h4>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<h3>INTENSE</h3>
									<h4>HEAVENLY WORSHIP</h4>
								</div>
							</li>
						</ul>
					</div>
					<!--- banner Slider starts Here --->
	  			<script src="{{ asset('backend/js/responsiveslides.min.js') }}"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });

			    });
			  </script>
				</div>

			   </div>
			</div>
	</div>
	<!--start-about-->
		<div class="about">
			<div class="container">
				<h3 class="tittle">A deliverance ministry</h3>
				<p>Deliverance is defined as “a rescue from bondage or danger.” Deliverance in the Bible is the acts of God whereby He rescues His people from peril. In the Old Testament, deliverance is focused primarily on God’s removal of those who are in the midst of trouble or danger. He rescues His people from their enemies (1 Samuel 17:37; 2 Kings 20:6), and from the hand of the wicked (Psalm 7:2; 17:13; 18:16-19; 59:2). He preserves them from famine (Psalm 33:19), death (Psalm 22:19-21), and the grave (Psalm 56:13; 86:13; Hosea 13:14). The most striking example of deliverance is the exodus from Egypt (Exodus 3:8; 6:6; 8:10). Here is God defined as the Deliverer of Israel who rescues His people, not because they deserve to be rescued, but as an expression of His mercy and love (Psalm 51:1; 71:2; 86:13).
                </p>
                <p>Deliverance is often sought from evil spirits or the spirit of lust, jealousy, etc. It’s important to understand that, as believers, we already have eternal victory over Satan and demons. But we can be delivered from their influence in our lives by using two weapons God has given us as part of our spiritual armor with which we battle “against the powers of this dark world and against the spiritual forces of evil in the heavenly realms”.
                </p>
			</div>
		</div>
	<!--start-services-->
	<div class="services">
		<!-- container -->
		<div class="container">
		   <h3 class="tittle">Features</h3>
			<div class="col-md-5 serve-info">
				<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Cras porttitor imperdiet volutpat nulla malesuada lectus eros ut convallis felis consectetur ut </h5>
					<img src="{{ asset('backend/images/s-gal.jpg') }}" alt="" />
				<div class="see-button">
					<a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal serve-button" href="#" role="button">Read More</a>
				</div>
			</div>
			<div class="col-md-7 serve-grids">
				<div class="serve-grids-top">
					<div class="col-md-6 service-box">
						<figure class="icon">
							<img src="{{ asset('backend/images/s1.png') }}" alt="" />
						</figure>
						<h5>Healing</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="col-md-6 service-box">
						<figure class="icon">
							<img src="{{ asset('backend/images/s2.png') }}" alt="" />
						</figure>
						<h5>Miracles</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="serve-grids-top">
					<div class="col-md-6 service-box">
						<figure class="icon">
							<img src="{{ asset('backend/images/s4.png') }}" alt="" />
						</figure>
						<h5>Deliverance</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="col-md-6 service-box">
						<figure class="icon">
							<img src="{{ asset('backend/images/s3.png') }}" alt="" />
						</figure>
						<h5>Bible Teachings</h5>
						<p>Sed ut perspiciis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //serve -->
	<!--start-camps-->
		<div class="camps">
	    <div class="container">
				<h3 class="tittle">Our Recent Post</h3>
			 <div class="cam-top-top">
				<div class="col-md-7 cam-top">
					<iframe src="https://www.youtube.com/embed/8uVDdZChAdE" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-md-5 cam-top-text">
				   <div class="sub-cam-top">
				       <div class="col-md-4 sub-img">
							<img src="{{ asset('backend/images/v2.jpg') }}" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="#">Killzone: Shadow Fall for PlayStation 4 Reviews</a>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				    <div class="sub-cam-top">
				       <div class="col-md-4 sub-img">
							<img src="{{ asset('backend/images/v1.jpg') }}" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="#"> Spiderman 2 Full Version PC Game</a>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				    <div class="sub-cam-top">
				       <div class="col-md-4 sub-img">
							<img src="{{ asset('backend/images/v3.jpg') }}" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="#">Killzone: Shadow Fall for PlayStation 4 Reviews</a>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				</div>
				 <div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--start-news-->
		<div class="news">
		    <div class="container">
				<h3 class="tittle">Our News</h3>
			 <div class="news-article">
			  <div class="col-md-6 article-post">
				<a href="single.html" ><img src="{{ asset('backend/images/n1.jpg') }}" alt="img07"/></a>
				<div class="col-md-3 post-meta">
					<div class="meta-icon">
						<div class="pic">
						 	 <a href="single.html" > <i class="glyphicon glyphicon-picture"></i></a>
						</div>
					</div>
					<ul class="ad-info">
					     <li>21 Aug'15</li>
						 <li> <a href="#">John Doe</a></li>
						 <li> <a href="#">24 Comments</a></li>
					</ul>
					<div class="clearfix"> </div>
				  </div>
				<div class="col-md-9 post-details">
					<a href="single.html"><h3>To Protect Humanity</h3></a>
					<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
					<div>
						<a class="blog hvr-shutter-out-horizontal" href="single.html" role="button">Read More</a>
					</div>
				</div>
				<!--post-details-->
				<div class="clearfix"> </div>
				</div>
				 <div class="col-md-6 article-post">
				<a href="single.html" ><img src="{{ asset('backend/images/n2.jpg') }}" alt="img07"/></a>
				<div class="col-md-3 post-meta">
					<div class="meta-icon">
						<div class="pic">
						 	 <a href="single.html" > <i class="glyphicon glyphicon-picture"></i></a>
						</div>
					</div>
					<ul class="ad-info">
					     <li>21 Aug'15</li>
						 <li> <a href="#">John Doe</a></li>
						 <li> <a href="#">24 Comments</a></li>
					</ul>
					<div class="clearfix"> </div>
				  </div>
				<div class="col-md-9 post-details">
					<a href="single.html"><h3>To Protect Humanity</h3></a>
					<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
					<div>
						<a class="blog hvr-shutter-out-horizontal" href="single.html" role="button">Read More</a>
					</div>
				</div>
				<!--post-details-->
				<div class="clearfix"> </div>
				</div>
			    <div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--//news-->
<div class="testimonials">
	  <div class="container">
	   <h3 class="tittle two">Testimonials</h3>
		<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">
						<li>
							<div class="testi-text">
								<div class="col-md-3 testi-img">
									<img src="{{ asset('backend/images/c2.jpg') }}" alt=""/>
								</div>
								<div class="col-md-9 tt-text">
									<h4>Save Childrens</h4>
									<p>Duis vitae feugiat lorem. Mauris eget ipsum sapien. Praesent euismod nec risus id tempor In sit amet sapien eros. Integer in tincidunt velit.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Ut in tincidunt</p>
								</div>
									 <div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="testi-text">
								<div class="col-md-3 testi-img">
									<img src="{{ asset('backend/images/c1.jpg') }}" alt=""/>
								</div>
								<div class="col-md-9 tt-text">
									<h4>Save Humanity</h4>
									<p>Duis vitae feugiat lorem. Mauris eget ipsum sapien. Praesent euismod nec risus id tempor In sit amet sapien eros.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Integer in tincidunt velit. Ut in tincidunt</p>
								</div>
									 <div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="testi-text">
								<div class="col-md-3 testi-img">
									<img src="{{ asset('backend/images/c2.jpg') }}" alt=""/>
								</div>
								<div class="col-md-9 tt-text">
									<h4>Save Childrens</h4>
									<p>Duis vitae feugiat lorem. Mauris eget ipsum sapien. Praesent euismod nec risus id tempor In sit amet sapien eros. Integer in tincidunt velit.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Ut in tincidunt</p>
								</div>
									 <div class="clearfix"> </div>
							</div>
						</li>
					</ul>
				</div>
		</div>
	</div>
	<!-- banner-text Slider starts Here -->
		<script src="js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
				$(function () {
				// Slideshow 3
					$("#slider3").responsiveSlides({
					auto: true,
					pager:true,
					nav:false,
					speed: 500,
					namespace: "callbacks",
					before: function () {
					$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});
			});
		</script>

	<!--footer-->
			<div class="footer text-center">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-4 footer-text">
							<h3>About Us</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's.</p>
						</div>
						<div class="col-md-4 footer-flickr">
							<h3>Flickr Feed</h3>
						<div class="flickr-grids">
							<div class="flickr-grid">
								<a href="#"><img src="{{ asset('backend/images/t1.jpg') }}" alt=""/></a>
							</div>
							<div class="flickr-grid">
								<a href="#"><img src="{{ asset('backend/images/c2.jpg') }}" alt=""/></a>
							</div>
							<div class="flickr-grid">
								<a href="#"><img src="{{  asset('backend/images/c1.jpg') }}" alt=""/></a>
							</div>
								<div class="clearfix"> </div>

							<div class="flickr-grid">
								<a href="#"><img src="{{asset('backend/images/c2.jpg') }}" alt=""/></a>
							</div>
							<div class="flickr-grid">
							   <a href="#"><img src="{{ asset('backend/images/c1.jpg') }}" alt=""/></a>
							</div>
							<div class="flickr-grid">
							   <a href="#"><img src="{{ asset('backend/images/t1.jpg') }}" alt=""/></a>
							</div>
								<div class="clearfix"> </div>
						</div>
					</div>
						<div class="col-md-4 footer-info">
							<h3>Get In Touch</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since, </p>
							<div class="support">
								<form>
									<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
									<input type="submit" value="SUBSCRIBE">
								</form>
							</div>
					</div>

					<div class="clearfix"> </div>
				</div>
		<div class="copy">
		    <p>&copy; 2015 All Rights Reserved | Design by <a href="">Devayomi</a> </p>
		</div>
		<!--footer-->
	</div>
</div>
			<!--start-smoth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear'
								 		};
										*/

										$().UItoTop({ easingType: 'easeOutQuart' });

									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>
