<?php include("header.php") ?>
     
      <body>
	  <!-- Service Header-->
      <div class="col-md-12 service-header text-center" id="prom-header">
		 <!-- Navbar Fixed-->
		 <nav class='navbar navbar-default'>
			<div class='container-fluid'>
			   <div class='col-md-12 navbar-socials'>
				  <ul class='nav navbar-nav navbar-right'>
					  <li><span class='call'>Call us at:</span><span class='number'>408-230-6622</span></li>
					  <li><a class='btn btn-social' href='#'><span class='fa fa-facebook'></span></a></li>
					  <li><a class='btn btn-social' href='#'><span class='fa fa-linkedin'></span></a></li>
					  <li><a class='btn btn-social' href='#'><span class='fa fa-google-plus'></span></a></li>
					  <li>[<strong>TCP</strong> #(33733-B)]</li>
				  </ul>
			   </div>
			   <!-- Brand and toggle get grouped for better mobile display-->
			   <div class='navbar-header'>
				  <button class='navbar-toggle collapsed' type='button' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'><span class='sr-only'>Toggle navigation</span><span class='icon-bar'></span><span class='icon-bar'></span><span class='icon-bar'></span></button>
				  <a class='navbar-brand' href='/'>
					 <div class='brand-logo'><img class='img-responsive' src='./public/img/logo.png'/></div>
				  </a>
			   </div>
			   <!-- Collect the nav links, forms, and other content for toggling-->
			   <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
				  <ul class='nav navbar-nav navbar-right'>
					 <li><a href='/'>Home</a></li>
					 <li><a class='active' href='/contact.php'>Contact</a></li>
				  </ul>
			   </div>
			</div>
		 </nav>     
     
        <div class="col-md-6 col-md-offset-3">
            <h1>Prom Special</h1>
            <p>Start your night in style with First Impression!</p>
            <a class="btn btn-book scroll-to-quote" href="#">Book Now</a>
        </div>
      </div>
      <!-- Fleet Section-->
        <div class="col-md-12 fleet text-center">
         <div class="col-md-8 col-md-offset-2">
            <h2>Fleet</h2>
            <p>We provide a large fleet of immaculate vehicles from executive sedans and SUVs to presidential super-stretched limousines.</p>
         </div>
         <div class="col-md-12 carousel fade-carousel slide vehicles-carousel" id="vh-carousel-web" data-ride="carousel" data-interval="false">
            <!-- Wrapper for slides-->
            <div class="carousel-inner">
               <div class="col-md-12 item slides active">
                  <div class="hero">
                     <div class="col-md-3 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="suburban" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>Suburban</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="mkt" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>MKT</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="party-bus" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>Party Bus</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="pink-hummer" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>Pink Hummer</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item slides">
                  <div class="hero">
                     <div class="col-md-3 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="white-hummer" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>White Hummer</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="chrysler" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>Chrysler</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="cadillac" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>Cadillac Escalade</h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="escalade" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>Cadillac Escalade</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Left and right controls--><button class="left carousel-control btn-vehicle-scroll" id="vehicle-left-scroll" href="#vh-carousel-web" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span></button><button class="right carousel-control btn-vehicle-scroll" id="vehicle-right-scroll" href="#vh-carousel-web" role="button" data-slide="next"><span class="fa fa-chevron-right"></span></button>
            </div>
         </div>
         <div class="col-md-12 carousel fade-carousel slide vehicles-carousel" id="vh-carousel-mob" data-ride="carousel" data-interval="false">
            <!-- Wrapper for slides-->
            <div class="carousel-inner">
               <div class="col-md-12 item slides active">
                  <div class="hero">
                     <div class="col-md-4 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="suburban" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>Suburban</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 item slides">
                  <div class="hero">
                     <div class="col-md-4 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="white-hummer" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>White Hummer</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 item slides">
                  <div class="hero">
                     <div class="col-md-4 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="pink-hummer" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>Pink Hummer</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 item slides">
                  <div class="hero">
                     <div class="col-md-4 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="mkt" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>MKT</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 item slides">
                  <div class="hero">
                     <div class="col-md-4 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="chrysler" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>Chrysler</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 item slides">
                  <div class="hero">
                     <div class="col-md-4 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="party-bus" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>Party Bus</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 item slides">
                  <div class="hero">
                     <div class="col-md-4 vehicle-outer text-center">
                        <div class="col-md-12 vehicles" id="cadillac" data-toggle="modal" data-target="#vehicle-popup">
                           <div class="vehicle-name">
                              <h3>Cadillac</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Left and right controls--><button class="left carousel-control btn-vehicle-scroll" id="vehicle-left-scroll" href="#vh-carousel-mob" role="button" data-slide="prev"><span class="fa fa-chevron-left"></span></button><button class="right carousel-control btn-vehicle-scroll" id="vehicle-right-scroll" href="#vh-carousel-mob" role="button" data-slide="next"><span class="fa fa-chevron-right"></span></button>
            </div>
         </div>
      </div>
      <div class="col-md-12 fleet text-center">
        <div class="col-md-8 col-md-offset-2">
          <p>
             <h2>  20 Passenger Vehicles: White Hummer & Escalade Limousines </h2></br>
            6 Hours for $1,100 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $185/HR</br>
            </br>
            </br>

              <h2> 14 Passenger Vehicle: Pink Hummer Limousine </h2></br>
            6 Hours for $1,000 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $165/HR</br>
            </br>
            </br>
<!---- SEPERATION --->

  <div class="col-md-12 contact-info">
  
            
            <div class="col-md-12 contact-icon">
              
               <h3> 20 Passenger Vehicles: White Hummer & Escalade Limousines </h3></br>
            6 Hours for $1,100 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $185/HR</br>

            </div>

<div class="col-md-12 contact-icon">
          
              <h3> 30 Passenger Party Bus </h3></br>
            6 Hours for $1,350 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $225/HR</br>

            </div>

            <div class="col-md-12 contact-icon">
                     <h3> 14 Passenger Vehicle: Pink Hummer Limousine </h3></br>
            6 Hours for $1,000 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $165/HR</br>
            </div>

  <div class="col-md-12 contact-icon">
                <h3> 10 Passenger Vehicle: Chrysler 300 Limousine </h3></br>
            6 Hours for $700 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $115/HR</br>
            </div>

  <div class="col-md-12 contact-icon">
                 <h3>  20 Passenger Vehicles: White Hummer & Escalade Limousines </h3></br>
            6 Hours for $1,100 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $185/HR</br>
            </div>

  <div class="col-md-12 contact-icon">
                <h3>7 Passenger SUV: Suburban or Yukon</h3></br>
            6 Hours for $450 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $75/HR</br>
            </div>

 <div class="col-md-12 contact-icon">
	 <b<<h3> 4 Passenger Sedan: Lincoln MKT </h3></b></br>
            6 Hours for $390 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $65/HR</br>
            </div>

     
      </div>

<!---SEPERATION -->
              <h2> 10 Passenger Vehicle: Chrysler 300 Limousine </h2></br>
            6 Hours for $700 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $115/HR</br>
            </br>
            </br>

		<h2> 30 Passenger Party Bus </h2></br>
            6 Hours for $1,350 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $225/HR</br>
            </br>
            </br>

		<h2>7 Passenger SUV: Suburban or Yukon</h2></br>
            6 Hours for $450 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $75/HR</br>
            </br>
            </br>

           <h2> 4 Passenger Sedan: Lincoln MKT </h2></br>
            6 Hours for $390 (that's an all-inclusive rate minus driver gratuity)</br>
            Any additional hours are charged at a rate of: $65/HR</br>
          </p>
        </div>
      </div>
      <!-- Service Content-->
      <div class="col-md-12 contact-info">
         <div class="col-md-6 col-md-offset-3">
            <div class="col-md-12">
                <h1>Interested?</h1>
               <p>Please get in touch with us.</p>
            </div>
            <div class="col-md-12 contact-icon">
               <span><img class="img-responsive" src="./public/img/icons/inbox-inv.svg"/></span>
               <h3><a href="mailto:reservations@gofitrans.com" target="_blank">reservations@gofitrans.com</a></h3>
            </div>
            <div class="col-md-12 contact-icon">
               <span><img class="img-responsive" src="./public/img/icons/location-inv.svg"/></span>
               <h3><a href="https://goo.gl/maps/bvKsCdjYygN2" target="_blank">1250 Aviation Ave, 95110, Suite 135</a></h3>
            </div>
            <div class="col-md-12 contact-icon">
               <span><img class="img-responsive" src="./public/img/icons/call-inv.svg"/></span>
               <h3><a href="tel:+4082306622" target="_blank">408-230-6622</a></h3>
            </div>
         </div>
      </div>
      
<?php include("footer.php") ?>
