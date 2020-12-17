{embed="Embed/header"}
	<main>
	 <div class="container-fluid position-relative pr-nav">
		<div class="row" id="home-video">
			<div class="col-12 p-0">
			  <div class="w-100 position-relative">
  				<div class="full-video-container d-none d-lg-block">
  				  <video autoplay loop preload="auto" muted class="full-video" poster="{site_url}images/Real-Estate-in-Toronto.jpg?v=3">
  					<source src="{site_url}images/spectrum.mp4?v=3" type="video/mp4">
  				  </video>
  				</div>
				<?php	
				$class='';	
				if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod'))
				{
					$class="pt-4";
				}
				?>
  				<div class="d-block <?php echo $class; ?> d-lg-none">
  				  <video autoplay preload="auto" muted class="w-100 <?php echo $class; ?>" poster="{site_url}images/Spectrum-Realty-Services-Real-Estate-in-Toronto.jpg?v=2">
  					<source src="{site_url}images/mobile.mp4?v=3" type="video/mp4">
  				  </video>
  				</div>
			  </div>
			</div>
		</div>
	</div>
	<div class="container py-5 bg-small-black pr-nav">
		<div class="row align-items-center py-5" id="resale-homes-search">
			<div class="col-12">
			 	<div class="row py-5 py-lg-3 py-xl-5 px-4 px-lg-0 justify-content-between justify-content-lg-start justify-content-xl-between align-items-center position-relative grey-box-full black-box-full ie-mid">
				  <div class="col-12 col-lg-5 d-none d-lg-block">
					<img src="{blank}" image-src="{site_url}images/Resale-Homes-Search.jpg?v=2" alt="Homes for Sale" class="w-100 img-grey">
				  </div>
				  <div class="col-12 col-lg-6 ml-auto mr-auto">
					<h1 class="h4 font-weight-bold text-uppercase text-white letter-spacing-4 line-height-2">Help me find a <em class="d-block text-serif text-primary letter-spacing-6 h1">Resale Property</em></h1>
					<h2 class="h6 text-white text-serif text-italic letter-spacing-2">If you&#8217;re looking for a resale property in the GTA, answer some questions below so we can help you get started!</h2>
					<form action="{site_url}listings/" method="post">
					  <div class="row">
						<div class="col-12 pb-4 pt-5">
						  <input type="text" name="city" id="city" class="form-control auto-submit small border-top-0 border-left-0 border-right-0 border-bottom border-white text-serif text-white letter-spacing-2 bg-transparent" placeholder="Search (Area, Street or Condo Project)">
						</div>
					  </div>
					  <div class="row d-none d-sp-none d-xl-flex">
						<div class="col-6 pb-4">
						  <div class="row align-items-end">
							<div class="col-3 pr-0">
							  <label for="bedrooms" class="m-0">
								<img src="{blank}" image-src="{site_url}images/icons/bedrooms.png" class="img-fluid webp" alt="Bedrooms">
							  </label>
							</div>
							<div class="col-9 pl-0">
							  <input type="number" min="1" max="9" name="bedrooms" id="bedrooms" class="form-control auto-submit small border-top-0 border-left-0 border-right-0 border-bottom border-white text-serif text-white letter-spacing-2 bg-transparent" placeholder="Bedrooms">
							</div>
						  </div>
						</div>
						<div class="col-6 pb-4">
						  <div class="row align-items-end">
							<div class="col-3 pr-0">
							  <label for="bathrooms" class="m-0">
								<img src="{blank}" image-src="{site_url}images/icons/bathrooms.png" class="img-fluid webp" alt="Bathrooms">
							  </label>
							</div>
							<div class="col-9 pl-0">
							  <input type="number" min="1" max="9" name="bathrooms" id="bathrooms" class="form-control auto-submit small border-top-0 border-left-0 border-right-0 border-bottom border-white text-serif text-white letter-spacing-2 bg-transparent" placeholder="Bathrooms">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="row d-none d-sp-none d-xl-flex">
						<div class="col-6 pb-4">
						  <div class="row align-items-end">
							<div class="col-3 pr-0">
							  <label for="min" class="m-0">
								<img src="{blank}" image-src="{site_url}images/icons/minimum.png" class="img-fluid webp" alt="Minimum Price">
							  </label>
							</div>
							<div class="col-9 pl-0">
							  <input type="number" name="min" id="min" class="form-control auto-submit small border-top-0 border-left-0 border-right-0 border-bottom border-white text-serif text-white letter-spacing-2 bg-transparent" placeholder="Min. Price">
							</div>
						  </div>
						</div>
						<div class="col-6 pb-4">
						  <div class="row align-items-end">
							<div class="col-3 pr-0">
							  <label for="max" class="m-0">
								<img src="{blank}" image-src="{site_url}images/icons/maximum.png" class="img-fluid webp" alt="Maximum Price">
							  </label>
							</div>
							<div class="col-9 pl-0">
							  <input type="number" name="max" id="max" class="form-control auto-submit small border-top-0 border-left-0 border-right-0 border-bottom border-white text-serif text-white letter-spacing-2 bg-transparent" placeholder="Max. Price">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="row align-items-end d-none d-sp-none d-xl-flex">
						<div class="col-6 pb-4">
						  <div class="row align-items-end">
							<div class="col-3 pr-0">
							  <label for="type" class="m-0">
								<img src="{blank}" image-src="{site_url}images/icons/home.png" class="img-fluid webp" alt="Home Type">
							  </label>
							</div>
							<div class="col-9 pl-0">
							  <select name="type" class="form-control small border-top-0 border-left-0 border-right-0 border-bottom border-white text-serif letter-spacing-2 text-white bg-black">
							  	<option value="">All Home Types</option>	
								<option value="Detached">Detached</option>
								<option value="Semi-Detached">Semi-Detached</option>
								<option value="townhouse">Townhouse</option>
								<option value="condo">Condo</option>
							  </select>
							</div>
						  </div>
						</div>
						<div class="col-12 col-lg-6 pb-4">
						  <label class="text-serif small letter-spacing-2 ml-5 d-inline-block d-lg-block pr-3 text-white m-0">Listing Type</label>
						  <div class="d-inline-block pr-3 ml-5">
							<input class="d-none label-highlight auto-submit" type="radio" name="exclusive" id="exclusive_yes" value="Yes">
							<label class="text-serif text-white small letter-spacing-2 m-0" for="exclusive_yes">Spectrum Only</label>
						  </div>
						  <div class="d-inline-block">
							<input class="d-none label-highlight auto-submit" type="radio" name="exclusive" id="exclusive_no" value="No">
							<label class="text-serif text-white small letter-spacing-2 m-0" for="exclusive_no">All</label>
						  </div>
						</div>
					  </div>
					  <div class="row align-items-end pb-5 pb-lg-0">
							<div class="col-8 col-lg-6 pb-lg-4">
							  <a href="{site_url}register/" class="small text-uppercase text-white text-serif text-italic letter-spacing-1 border-bottom border-white pb-2 line-height-3">Register for <span class="d-block d-xl-inline">resale updates</span></a>
							</div>
							<div class="col-4 col-lg-6 pb-lg-4 text-right">
							  <input type="hidden" name="XID" value="{XID_HASH}" />
							  <input class="text-uppercase text-primary text-serif text-italic letter-spacing-2 border-top-0 border-left-0 border-right-0 border-bottom border-secondary bg-transparent d-inline-block pl-0 pr-3 pb-2" type="submit" name="submit" id="submit" value="Search">
							</div>
					  </div>
					</form>
				  </div>
				</div>
			</div>
		 </div>
	 </div>
	 <div class="container py-5 pr-nav">
	  	<div class="row align-items-center py-5 pt-lg-0" id="new-homes-search">
				<div class="col-12">
				<div class="row py-5 py-lg-3 py-xl-5 px-3 px-lg-0 justify-content-between justify-content-lg-start justify-content-xl-between align-items-center position-relative grey-box-full ie-mid">
				  <div class="col-12 col-lg-5 d-none d-lg-block">
					<img src="{blank}" image-src="{site_url}images/New-Homes-Search.jpg?v=3" alt="New Homes Search" class="w-100 img-grey">
				  </div>
				  <div class="col-12 col-lg-6 ml-auto mr-auto">
					<h3 class="h4 font-weight-bold text-uppercase letter-spacing-4 line-height-2">Help me find a <em class="d-block text-serif text-primary letter-spacing-6 h1">New Property</em></h3>
					<h4 class="h6 text-serif text-italic letter-spacing-2 d-sp-none">We represent many of Ontario&#8217;s top new home builders. Find your dream home in the perfect community for you.</h4>
					<form action="{site_url}new-homes/" class="" method="post">
					  <input type="hidden" name="action" value="new-homes-form-hp">		
					  <div class="row">
						<div class="col-12 pb-4 pt-5">
						  <input type="text" name="city" id="city" class="form-control auto-submit small border-top-0 border-left-0 border-right-0 border-bottom border-primary text-serif letter-spacing-2 bg-transparent" placeholder="Search (Area, Street or Condo Project)">
						</div>
					  </div>
					  <div class="row d-none d-sp-none d-xl-flex">
						<div class="col-6 pb-4">
						  <div class="row align-items-end">
							<div class="col-3 pr-0">
							  <label for="min" class="m-0">
								<img src="{blank}" image-src="{site_url}images/icons/minimum.png" class="img-fluid webp" alt="Minimum Price">
							  </label>
							</div>
							<div class="col-9 pl-0">
							  <input type="number" name="min" id="min" class="form-control auto-submit small border-top-0 border-left-0 border-right-0 border-bottom border-primary text-serif letter-spacing-2 bg-transparent" placeholder="Min. Price">
							</div>
						  </div>
						</div>
						<div class="col-6 pb-4">
						  <div class="row align-items-end">
							<div class="col-3 pr-0">
							  <label for="max" class="m-0">
								<img src="{blank}" image-src="{site_url}images/icons/maximum.png" class="img-fluid webp" alt="Maximum Price">
							  </label>
							</div>
							<div class="col-9 pl-0">
							  <input type="number" name="max" id="max" class="form-control auto-submit small border-top-0 border-left-0 border-right-0 border-bottom border-primary text-serif letter-spacing-2 bg-transparent" placeholder="Max. Price">
							</div>
						  </div>
						</div>
					  </div>
					  <div class="row align-items-end d-none d-sp-none d-xl-flex">
						<div class="col-6 pb-4">
						  <div class="row align-items-end">
							<div class="col-3 pr-0">
							  <label for="type" class="m-0">
								<img src="{blank}" image-src="{site_url}images/icons/home.png" class="img-fluid webp" alt="Home Type">
							  </label>
							</div>
							<div class="col-9 pl-0">
							  <!--<input type="text" name="type" id="type" class="form-control auto-submit small border-top-0 border-left-0 border-right-0 border-bottom border-primary text-serif letter-spacing-2 bg-transparent" placeholder="Home Type">-->
							  <select name="type" class="form-control auto-submit small border-top-0 border-left-0 border-right-0 border-bottom border-primary text-serif letter-spacing-2 bg-transparent">
							  	<option value="">Select Home Type</option>	
								<option value="singles">Detached</option>
								<option value="semis">Semi-Detached</option>
								<option value="townhomes">Townhouse</option>
								<option value="condominiums">Condo</option>
							  </select>	
							</div>
						  </div>
						</div>
					  </div>
					  <div class="row">
						<div class="col-6 pb-4">
						  <select class="border-0 dropdown small bg-transparent text-serif text-search letter-spacing-2 small auto-submit w-100" id="status" name="status">
							<option value="">Community Status</option>
							<option value="Coming Soon">Upcoming</option>
							<option value="Current">Now Selling</option>
							<option value="Sold Out">Sold Out</option>
						  </select>
						</div>
						<div class="col-6 pb-4">
						  <select class="border-0 dropdown small bg-transparent text-serif text-search letter-spacing-2 small auto-submit w-100" id="builder" name="builder">
							<option value="">Select Builder</option>
							{exp:channel:entries channel="builder" dynamic="no" orderby="title" sort="asc" disable="categories|category_fields|member_data|pagination|trackbacks" cache="yes" refresh="30"}
							<option value="{title}">{title}</option>
							{/exp:channel:entries}
						  </select>
						</div>
					  </div>
					  <div class="row align-items-end pb-5 pb-lg-0">
						<div class="col-8 col-lg-7 pb-lg-4">
						  <a href="{site_url}register/" class="small text-uppercase text-search text-serif text-italic letter-spacing-1 border-bottom border-primary pb-2 line-height-3">Register for <span class="d-block d-xl-inline">new home updates</span></a>
						</div>
						<div class="col-4 col-lg-5 pb-lg-4 text-right">
						  <input type="hidden" name="XID" value="{XID_HASH}" />
						  <input class="text-uppercase text-primary text-serif text-italic letter-spacing-3 border-top-0 border-left-0 border-right-0 border-bottom border-secondary bg-transparent d-inline-block pl-0 pr-3 pb-2" type="submit" name="submit" id="submit" value="Search">
						</div>
					  </div>
					</form>
				  </div>
				</div>
			 </div>
			</div>
	  </div>
	  <div class="container-fluid pr-nav bg-small-grey">
	  	<div class="row align-items-center position-relative bg-grey" id="looking-to-sell-home">
		  	<div class="col-12">
					<div class="container py-5 position-relative">
						<div class="row pt-5 pb-lg-202 align-items-start px-3 px-lg-0 ie-mid">
						  <div class="col-12 py-2 col-lg-6">
							<h3 class="h1 font-weight-normal text-serif text-primary text-uppercase text-italic letter-spacing-6 line-height-2 pb-3 pb-xl-5"><span class="d-block">I am looking</span> <span class="d-inline-block">to</span> <span class="d-inline-block border-bottom border-secondary">sell</span> <span class="d-inline-block">my home.</span></h3>
							<h4 class="h6 font-weight-normal text-serif text-uppercase text-italic letter-spacing-2 line-height-2 pt-5 pt-lg-2 pt-xl-5 d-none d-lg-block">We represent sellers <span class="d-block">and will do our best</span> <span class="pb-5 border-bottom border-primary">to se</span>ll your home.</h4>
						  </div>
						  <div class="col-12 col-lg-5 col-xl-6">
							<p class="small line-height-2 pt-lg-3">Spectrum agents excel when it comes to selling homes. Our wealth of knowledge about the entire GTA, the market, pricing analysis, staging expertise and many other factors contribute to our ability to receive optimal offers in efficient time. If you would like to learn more, we&#8217;d be happy to help.</p>
							<p class="small line-height-2 d-none d-lg-block"><span class="text-uppercase text-primary font-weight-medium">Receive a free home evaluation</span> – Tell us a little about your home, and we will be happy to meet you at your convenience to let you know what you can expect.</p>
							<p class="small line-height-2 d-none d-lg-block"><span class="text-uppercase text-primary font-weight-medium">Why list with us?</span> – There are plenty of reasons Spectrum should represent you, and we&#8217;re happy to outline our advantages for you.
							<p class="small line-height-2 d-none d-lg-block"><span class="text-uppercase text-primary font-weight-medium">Learn more about selling your home</span> – If you&#8217;ve never done this before, or even looked into it, let us explain some of the finer points.
							<p class="small line-height-2 d-none d-lg-block"><span class="text-uppercase text-primary font-weight-medium">Help me find an agent</span> – Browse through our talented sales representatives and even search by language spoken! We want you to feel completely comfortable.</p>
							<div class="pt-xl-5">
							  <a href="{site_url}selling/" class="text-serif text-primary pb-2 border-bottom border-secondary letter-spacing-3">
								Read More
							  </a>
							</div>
						  </div>
						</div>
						<div class="position-absolute bottom left right d-none d-lg-block">
						  <div class="container">
								<div class="row">
								  <div class="col-6">
									<img src="{blank}" image-src="{site_url}images/New-Home-Builders.png" class="img-fluid webp">
								  </div>
								</div>
						  </div>
						</div>
					</div>
				</div>
		  </div>
		</div>
		<div class="container-fluid pr-nav bg-small-dark">
		  <div class="row py-5 align-items-center bg-dark" id="about-spectrum">
		  	<div class="col-12 py-5">
					<div class="container py-5">
						<div class="row py-5 align-items-start justify-content-between justify-content-lg-start justify-content-xl-between px-3 px-lg-0 ie-mid">
						  <div class="col-12 col-lg-5 pt-xl-5">
							<h3 class="h1 font-weight-normal text-serif text-primary text-uppercase text-italic letter-spacing-6 line-height-2 pb-3 pb-lg-5 pt-xl-5">About <span class="text-white">Spectrum</span></h3>
							<img src="{blank}" image-src="{site_url}images/About-Spectrum.png" class="img-fluid webp d-none d-lg-block" alt="About Spectrum">
						  </div>
						  <div class="col-12 col-lg-6">
							<h4 class="h6 small text-primary font-weight-medium  line-height-2 pt-lg-3">Since 1992, Spectrum has helped tens of thousands of people buy and sell real estate throughout the GTA.</h4>
							<p class="small text-white line-height-2">If you are looking into buying or selling real estate, in Toronto or the GTA, Spectrum Realty offers exceptional comprehensive real estate services. Our team focuses on meeting every need our clients have; our job is to make sure our clients get what they want out of their home buying or selling experience. We are proud to offer home buyers and sellers service in all of Toronto and the GTA including Vaughan, Maple, Brampton, Mississauga, Caledon, and Oakville.</p>
							<p class="small text-white line-height-2 d-none d-sp-none d-xl-block">Spectrum Realty provides comprehensive real estate services in the Greater Toronto Area (GTA). We are a boutique real estate service that has sold hundreds of millions of dollars&#8217; worth of real estate since our inception in 1992. We are one of the largest movers of residential properties in the area.</p>
							<p class="small text-white line-height-2 d-none d-sp-none d-xl-block">Navigating Toronto real estate listings, both commercial and residential, can be tricky. Spectrum Realty prides itself on taking a cutting-edge approach to customer service and technology. We are here to serve you as you search for your new home in the Greater Toronto Area. You will find complete listings for area homes that include photos, map, home features such as living style, and exterior type along with listing and room stats.</p>
							<p class="small text-white line-height-2 d-none d-sp-none d-xl-block">Our real estate listings are clear and easy to navigate. You can view a real estate listing and immediately have vital information at your fingertips regarding a property. Knowing you can search for the perfect home while getting as much information as possible is something on which we pride ourselves.</p>
							<p class="small text-white line-height-2 d-none d-sp-none d-xl-block">With a market in constant fluctuation, the search for real estate properties can be intimidating. At Spectrum Realty, our team of qualified agents will sort through the noise of Toronto and the GTA listings to find you the best possible options.</p>
							<div class="pt-lg-5">
							  <a href="{site_url}about/" class="text-serif text-primary pb-2 border-bottom border-secondary letter-spacing-3">
								Read More
							  </a>
							</div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="position-absolute bottom left right d-none d-lg-block z-index-negative">
					  <div class="container">
							<div class="row">
							  <div class="col-6">
								<img src="{blank}" image-src="{site_url}images/New-Home-Builders.png" class="img-fluid webp">
							  </div>
							</div>
					  </div>
					</div>
				</div>
		  </div>
		</div>
		<div class="container-fluid pr-nav">
		  <div class="row ie-mid" id="join-us">
				<div class="col-12 col-lg-6 py-5 align-items-center">
				  <div class="row py-5 justify-content-center">
						<div class="col-6 col-lg-8">
						  <h3 class="h2 sp-h4 font-weight-normal text-serif text-primary text-uppercase text-italic letter-spacing-6 line-height-2 pb-4 pb-sp-1 pb-lg-2 pb-xl-4"><span class="d-block">Are you an</span> <span class="d-inline-block border-bottom border-secondary">Agent</span> <span class="d-inline-block">looking</span> <span class="d-block">to join us?</span></h3>
						</div>
						<div class="col-5 col-lg-8 pb-5 pb-lg-3 pb-xl-5 pb-sp-1">
						  <a href="{site_url}join/" class="text-serif text-primary pb-2 border-bottom border-secondary letter-spacing-3">
							Join Now
						  </a>
						</div>
						<div class="col-6 col-lg-8">
						  <h3 class="h2 sp-h4 font-weight-normal text-serif text-uppercase text-italic letter-spacing-6 line-height-2 pt-lg-2 pt-xl-5 pt-sp-1 pb-4 pb-sp-1 pb-lg-2 pb-xl-4"><span class="d-block">Are you a</span> <span class="d-inline-block border-bottom border-primary">Client</span> <span class="d-inline-block">looking to</span> <span class="d-block">Buy/Sell with us?</span></h3>
						</div>
						<div class="col-5 col-lg-8">
						  <a href="{site_url}contact/" class="text-serif pb-2 border-bottom border-primary letter-spacing-3">
							Contact Us
						  </a>
						</div>
				  </div>
				</div>

				<div class="col-12 col-lg-6 bg-footer position-relative tooltip-left align-items-center d-none d-lg-flex">
				  <div class="w-75 mx-auto">
						<div class="pb-5">
						  <form class="ajax" action="{path="Functions/contact"}" method="post">
							<div class="row">
							  <div class="col-12">
									<div class="" id="message"></div>
							  </div>
							</div>
							<div class="row pb-5 pb-xl-4 pb-sp-1">
							  <div class="col-12">
								<input type="text" name="name" id="name" class="form-control text-capitalize small border-top-0 border-left-0 border-right-0 border-bottom border-primary text-serif letter-spacing-2 bg-transparent px-0" placeholder="Full Name" required>
							  </div>
							</div>
							<div class="row pb-5 pb-xl-4 pb-sp-1">
							  <div class="col-12">
								<input type="email" name="email" id="email" class="form-control small border-top-0 border-left-0 border-right-0 border-bottom border-primary text-serif letter-spacing-2 bg-transparent px-0" placeholder="Email" required>
							  </div>
							</div>
							<div class="row pb-5 pb-xl-4 pb-sp-1">
							  <div class="col-12">
								<input type="text" name="phone" id="phone" class="form-control small border-top-0 border-left-0 border-right-0 border-bottom border-primary text-serif letter-spacing-2 bg-transparent px-0" placeholder="Phone Number">
							  </div>
							</div>
							<div class="row pb-4 pb-xl-3 pb-sp-1">
							  <div class="col-12">
								<textarea name="message" id="comment" class="form-control small border-top-0 border-left-0 border-right-0 border-bottom border-primary text-serif letter-spacing-2 bg-transparent px-0" placeholder="Comments" required="required"></textarea>
							  </div>
							</div>
							<div class="row py-4 py-xl-3 pb-sp-1">
							  <div class="col-12">
								<div class="form-check">
								  <input class="form-check-input square-input square-reverse" type="checkbox" name="casl" id="casl" value="1" required>
								  <label class="form-check-label text-serif text-search small m-0 pl-3" for="casl">In accordance with Canadian Anti-Spam Legislation, I have read Spectrum&#8217;s Privacy Policy and give my consent to receive electronic communications from Spectrum regarding; communities of potential interest, news, events, promotions and other related subjects.</label>
								</div>
							  </div>
							</div>
							<div class="row pt-4 pt-xl-2 pt-sp-1">
							  <div class="col-12">
								<input type="hidden" name="XID" value="{XID_HASH}" />
								<input class="small text-uppercase text-primary text-serif text-italic letter-spacing-2 border-top-0 border-left-0 border-right-0 border-bottom border-secondary bg-transparent d-inline-block pl-0 pr-3 pb-2 mr-4" type="submit" name="submit" id="submit" value="Send">
								<a href="{site_url}register/" class="small text-uppercase text-search text-serif text-italic letter-spacing-2 border-top-0 border-left-0 border-right-0 border-bottom border-primary bg-transparent d-inline-block pb-2">
								  Register for new home updates
								</a>
							  </div>
							</div>
						  </form>
						</div>
						<div class="w-100 pb-5 d-none d-sp-none d-xl-block">
						  <div class="row pb-4 pb-xl-3 align-items-center">
								<div class="col-1">
								  <img src="{blank}" image-src="{site_url}images/icons/location.png" class="img-fluid webp" alt="Location">
								</div>
								<div class="col-11">
								  <p class="small m-0">8400 Jane Street, Unit 9. Vaughan, Ontario L4K 4L8</p>
								</div>
						  </div>
						  <div class="row pb-4 pb-xl-3 align-items-center">
								<div class="col-1">
								  <img src="{blank}" image-src="{site_url}images/icons/email.png" class="img-fluid webp" alt="Email">
								</div>
								<div class="col-11">
								  <p class="small m-0"><a href="mailto:reception@spectrumrealtyservices.com" onclick="ga('send', 'event', 'Contact', 'Click', 'Email');">reception@spectrumrealtyservices.com</a></p>
								</div>
						  </div>
						  <div class="row pb-4 pb-xl-3 align-items-center">
								<div class="col-1">
								  <img src="{blank}" image-src="{site_url}images/icons/fax.png" class="img-fluid webp" alt="Fax">
								</div>
								<div class="col-5">
								  <p class="small m-0"><a href="tel:14167369766">Fax: 416-736-9766</a></p>
								</div>
								<div class="col-1">
								  <img src="{blank}" image-src="{site_url}images/icons/office.png" class="img-fluid webp" alt="Office Phone">
								</div>
								<div class="col-5">
								  <p class="small m-0"><a href="tel:14167366500" onclick="ga('send', 'event', 'Contact', 'Call', 'Phone');">416-736-6500</a></p>
								</div>
						  </div>
						  <div class="row pt-5 pt-xl-2 align-items-center">
								<div class="col-7">
								  <p class="small text-search m-0">Copyright {current_time format="%Y"} - All Rights Reserved | <a href="{site_url}privacy-policy">Privacy Policy</a></p>
								</div>
								<div class="col-5">
								  <div class="d-inline-block px-1">
									<a href="{instagram}" target="_blank" rel="noopener">
									  <img src="{blank}" image-src="{site_url}images/icons/instagram.png" alt="Instagram" class="img-fluid webp">
									</a>
								  </div>
								  <div class="d-inline-block px-1">
									<a href="{facebook}" target="_blank" rel="noopener">
									  <img src="{blank}" image-src="{site_url}images/icons/facebook.png" alt="Facebook" class="img-fluid webp">
									</a>
								  </div>
								  <div class="d-inline-block px-1">
									<a href="{twitter}" target="_blank" rel="noopener">
									  <img src="{blank}" image-src="{site_url}images/icons/twitter.png" alt="Twitter" class="img-fluid webp">
									</a>
								  </div>
								  <div class="d-inline-block px-1">
									<a href="{linkedin}" target="_blank" rel="noopener">
									  <img src="{blank}" image-src="{site_url}images/icons/linkedin.png" alt="LinkedIn" class="img-fluid webp">
									</a>
								  </div>
								</div>
						  </div>
						</div>
				  </div>
				</div>
		  </div>
		</div>
		<a href="{site_url}images/spectrum-covid-19-information.jpg" data-fancybox id="popup"></a>
	</main>
	
{embed="Embed/footer" footer="No" logo="transparent"}
