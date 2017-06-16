<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="<?php echo base_url(); ?>assets/images/logo3.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#works">Home</a></li>
                 <li ><a href="#about">About</a></li>
                 <li ><a href="#partners">Partners</a></li>
                 <li ><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->

<!-- Untuk menampilkan tabel categories -->
<div id="myCategories" class="modal fade" role="dialog">
		<div style="width:50%; height:50%" class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Categories</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p><embed style="width:100%; height:412px;" class="tbcategory" src="<?php echo base_url(); ?>index.php/categories" style="width:100%;"></embed></p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
</div>
<!-----------------------end------------------------------>

<!-- Untuk menampilkan tabel customers -->
<div id="myCustomers" class="modal fade" role="dialog">
		<div style="width:95%; height:90%" class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Customers</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p><embed style="width:100%; height:412px;" class="tbcustomers" src="<?php echo base_url(); ?>index.php/customers" style="width:100%;"></embed></p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
</div>
<!-----------------------end------------------------------>

<!-- Untuk menampilkan tabel employees -->
<div id="myEmployees" class="modal fade" role="dialog">
		<div style="width:95%; height:90%" class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Employees</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p><embed style="width:100%; height:412px;" class="tbemployees" src="<?php echo base_url(); ?>index.php/employees" style="width:100%;"></embed></p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
</div>
<!-----------------------end------------------------------>

<!-- Untuk menampilkan tabel orders -->
<div id="myOrders" class="modal fade" role="dialog">
		<div style="width:95%; height:90%" class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Orders</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p><embed style="width:100%; height:412px;" class="tborders" src="<?php echo base_url(); ?>index.php/orders" style="width:100%;"></embed></p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
</div>
<!-----------------------end------------------------------>

<!-- Untuk menampilkan tabel order details -->
<div id="myOrder_details" class="modal fade" role="dialog">
		<div style="width:40%; height:50%" class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Order Details</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p><embed style="width:100%; height:412px;" class="tborder_details" src="<?php echo base_url(); ?>index.php/order_details" style="width:100%;"></embed></p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
</div>
<!-----------------------end------------------------------>

<!-- Untuk menampilkan tabel products -->
<div id="myProducts" class="modal fade" role="dialog">
		<div style="width:75%; height:90%" class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Products</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p><embed style="width:100%; height:412px;" class="tbproducts" src="<?php echo base_url(); ?>index.php/products" style="width:100%;"></embed></p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
</div>
<!-----------------------end------------------------------>

<!-- Untuk menampilkan tabel shippers -->
<div id="myShippers" class="modal fade" role="dialog">
		<div style="width:50%; height:50%" class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Shippers</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p><embed style="width:100%; height:412px;" class="tbshippers" src="<?php echo base_url(); ?>index.php/shippers" style="width:100%;"></embed></p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
</div>
<!-----------------------end------------------------------>

<!-- Untuk menampilkan tabel suppliers -->
<div id="mySuppliers" class="modal fade" role="dialog">
		<div style="width:95%; height:90%" class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Suppliers</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p><embed style="width:100%; height:412px;" class="tbsuppliers" src="<?php echo base_url(); ?>index.php/suppliers" style="width:100%;"></embed></p>
				</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-close" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
</div>
<!-----------------------end------------------------------>

<!-- works -->
<div id="works"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url(); ?>assets/images/portfolio/kategori.jpg" alt="img01"/>
        <figcaption>
            <h2>Categories</h2>
            <p>Categories categories categories categories categories<br>
			<!----Tombol untuk memanggil myCategories----->
			<a href="" data-toggle="modal" data-target="#myCategories">View more</a></p>
			<!-------------------------------------------->
		</figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url(); ?>assets/images/portfolio/pelanggan.jpg" alt="img01"/>
        <figcaption>
            <h2>Customers</h2>
            <p>Customers customers customers customers customers<br>
            <a href="" data-toggle="modal" data-target="#myCustomers">View more</a></p>
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url(); ?>assets/images/portfolio/pegawai.jpg" alt="img01"/>
        <figcaption>
            <h2>Employees</h2>
            <p>Employees employees employees employees employees<br>
            <a href="" data-toggle="modal" data-target="#myEmployees">View more</a></p>
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url(); ?>assets/images/portfolio/pesanan.jpg" alt="img01"/>
        <figcaption>
            <h2>Orders</h2>
            <p>Orders orders orders orders orders orders orders<br>
            <a href="" data-toggle="modal" data-target="#myOrders">View more</a></p>           
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url(); ?>assets/images/portfolio/Detail Pesanan.jpg" alt="img01"/>
        <figcaption>
            <h2>OrderDetails</h2>
            <p>Orders details orders details orders details<br>
            <a href="" data-toggle="modal" data-target="#myOrder_details">View more</a></p>           
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url(); ?>assets/images/portfolio/barang.jpg" alt="img01"/>
        <figcaption>
            <h2>Product</h2>
            <p>Product product product product product product product<br>
            <a href="" data-toggle="modal" data-target="#myProducts">View more</a></p>        
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url(); ?>assets/images/portfolio/pengirim.jpg" alt="img01"/>
        <figcaption>
            <h2>Shippers</h2>
            <p>Shippers shippers shippers shippers shippers shippers<br>
            <a href="" data-toggle="modal" data-target="#myShippers">View more</a></p>             
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url(); ?>assets/images/portfolio/pemasok.jpg" alt="img01"/>
        <figcaption>
            <h2>Suppliers</h2>
            <p>Suppliers suppliers suppliers suppliers suppliers suppliers<br>
            <a href="" data-toggle="modal" data-target="#mySuppliers">View more</a></p>              
        </figcaption>
    </figure>
	<figure class="effect-oscar  wowload fadeInUp">
        <img src="<?php echo base_url(); ?>assets/images/portfolio/Testitestimoni.jpg" alt="img01"/>
        <figcaption>
            <h2>Testimoni</h2>
            <p>Testimoni testimoni testimoni testimoni testimoni testimoni<br>
            <a href="<?php echo base_url(); ?>assets/images/portfolio/Testimoni (2).jpg" title="Testimoni" data-gallery>View more</a></p>            
        </figcaption>
    </figure>	
</div>
<!-- works -->

<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Swalayan Banjar</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-paint-brush"></i> Design</h4>
    <p>Swalayan Banjar adalah sebuah toko yang menjual segala kebutuhan sehari-hari. Seperti bahan makanan, minuman, dan barang kebutuhan seperti tissue dan lain sebagainya.</p>

  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="fa fa-code"></i> Frontend & Backend</h4>
  <p> Toko-toko berjajar rapi Lampu-lampu bersinar warna-warni Pramuniaga tersenyum menanti pembeli Menawarkan barang dengan senang hati Belanja di swalayan Sungguh nyaman tidak berdesakan Juga tidak kepanasan Tapi jangan lupa Belanja seperlunya saja Agar hemat dan bersahaja</p>    
  </div>
  </div>

  <div class="process">
  <h3 class="text-center wowload fadeInUp">Process</h3>
  <ul class="row text-center list-inline  wowload bounceInUp">
      <li>
            <span><i class="fa fa-history"></i><b>1 Come</b></span>
        </li>
        <li>
            <span><i class="fa fa-puzzle-piece"></i><b>2 Choose</b></span>
        </li>
        <li>
            <span><i class="fa fa-database"></i><b>3 Take</b></span>
        </li>
        <li>
            <span><i class="fa fa-magic"></i><b>4 Pay</b></span>
        </li>        
        <li>
            <span><i class="fa fa-cloud-upload"></i><b>5 Enjoy</b></span>
        </li>
    </ul>
  </div>
</div>
<!-- #Cirlce Ends -->

<!-- About Starts -->
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-smile-o  fa-5x"></i><h4>2487 Member</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-rocket  fa-5x"></i><h4>8267232 Visitor</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-cloud-download  fa-5x"></i><h4>75 Branch</h4>
  </div>
  <div class="col-sm-3 col-xs-6">
  <i class="fa fa-map-marker fa-5x"></i><h4>5 Offices</h4>
  </div>
</div>
</div>
</div>
</div>
<!-- About Ends -->

<div id="partners" class="container spacer ">
	<h2 class="text-center  wowload fadeInUp">Some of our happy clients</h2>
  <div class="clearfix">
    <div class="col-sm-6 partners  wowload fadeInLeft">
         <img src="<?php echo base_url(); ?>assets/images/partners/indofood.jpg" alt="partners">
         <img src="<?php echo base_url(); ?>assets/images/partners/unilever.png" alt="partners">
         <img src="<?php echo base_url(); ?>assets/images/partners/nestle.jpg" alt="partners">
         <img src="<?php echo base_url(); ?>assets/images/partners/mayora.png" alt="partners">
    </div>
    <div class="col-sm-6">

    <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
    <div class="carousel-inner">  
      <div class="item active animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="<?php echo base_url(); ?>assets/images/team/1.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>      
      <span>Angel Smith - <b>eshop Canada</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="<?php echo base_url(); ?>assets/images/team/2.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
      <span>John Partic - <b>Crazy Pixel</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="<?php echo base_url(); ?>assets/images/team/3.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
      <span>Harris David - <b>Jet London</b></span>
      </div>
      </div>
  </div>

   <!-- Indicators -->
   	<ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
  	</ol>
  	<!-- Indicators -->
  </div>

    </div>
  </div>

<!-- team -->
<h3 class="text-center  wowload fadeInUp">Our team</h3>
<p class="text-center  wowload fadeInLeft">Our creative team that is making everything possible</p>
<div class="row grid team  wowload fadeInUpBig">	
	<div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo base_url(); ?>assets/images/team/Direksi.png" alt="img01" class="img-responsive" />
        <figcaption>
            <p><b>Desi Rima Melany</b><br>Direksi<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo base_url(); ?>assets/images/team/Direktur Utama.png" alt="img01"/>
        <figcaption>            
            <p><b>Melany Desi Rima</b><br>Direktur Utama<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo base_url(); ?>assets/images/team/Direktur.png" alt="img01"/>
        <figcaption>
            <p><b>Rima Desi Melany</b><br>Direktur<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>          
        </figcaption>
    </figure>
    </div>

    <div class=" col-sm-3 col-xs-6">
	<figure class="effect-chico">
        <img src="<?php echo base_url(); ?>assets/images/team/Manager.png" alt="img01"/>
        <figcaption>
            <p><b>Desi Melany Rima</b><br>Manager<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></p>
        </figcaption>
    </figure>
    </div>
 
</div>
<!-- team -->

</div>

<!--Contact Starts-->
<div id="contact" class="spacer">

<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">Contact Us</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Company">
        <textarea rows="5" placeholder="Message"></textarea>
        <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
      </div>
  </div>



</div>
</div>
<!--Contact Ends-->