<!-- 
  fileName : Database
  Arthur   : Ashraf Soudah , Ahmad Al Othman.
  Data     : 05-03-2021
-->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
  text-align: center;
  font-family:"Roboto";
 
}

body {
	font-family: 'Montserrat', sans-serif;
	line-height: 1.6;
	margin: 0;
	min-height: 100vh;
  background-color: #ffffff;
  color: #000000;
   
}
.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
  
}

.header {
	padding-top: .5em;
	padding-bottom: .5em;
	border: 1px solid #a2a2a2;
	background-color: #222f3e;
	box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);

	border-radius: 5px;

}

ul {
  margin: 0;
  padding: 0;
  list-style: none;
}


h2,
h3,
a {
  font-family:"Oswald";
	color: #000000;
}

a {
	text-decoration: none;
}



.logo {
	margin: 0;
	font-size: 1.45em;
}

.main-nav {
	margin-top: 5px;
  
  

}
.logo a,
.main-nav a {
	padding: 10px 15px;
	
	text-align: center;
	display: block;
  
}

.main-nav a {
	color: #ffffff;
	font-size: 20px;
  font-family: "Oswald";
  

}

.main-nav a:hover {
	color: #000000;
  
}



span{
    color: #ffffff;
    background-color: #222f3e;
    font-family: 'Courier New', Courier, monospace;
    font-size: 45px;
    
    
}
.aside {
  
  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
img{
     width: 400px;
     height: 400px;
    
     
}
.one{
    width: 600px;
     height: 400px;
   padding-left: 20px;
}
.two{
     width: 400px;
     height: 400px;
     margin-left: 25px;
     
     
}
#three{
     width: 300px;
     height: 300px;
     padding-left: 130px;
     
     
       
}
/* For button: */
button {
  border-radius: 4px;
  background-color: #222f3e; 
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

button:hover span {
  padding-right: 25px;
}

button:hover span:after {
  opacity: 1;
  
}
/* For video: */
iframe{
    width:1100px;
    height:400px;
}
.footer {
 
  color: #222f3e;
  
  text-align: center;
  font-size: 12px;
  padding: 15px;
}

/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
/* For navbar: */
@media (min-width: 769px) {
	.header,
	.main-nav {
		display: flex;
	}
  
	.header {
		flex-direction: column;
		align-items: center;
    
    
	}

}

@media (min-width: 1025px) {
	.header {
		flex-direction: row;
		justify-content: space-between;
	}

}


h4 { 
  font-style: oblique;
  font-size: 20px;
  color:#ffffff
}

.pFoot { 
  font-family:"Oswald";
	color: #f6f7f8;
 
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
 /* box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); */
}

a { 
  color: #ffffff;
  font-size: x-large;
  
  
}

p { 
 font-family:'Roboto';
}
h1 { 
  font-family:'Oswald';
}


#col-9,#box,
h3{
  background-color: red;
  margin-left: 8%;
 
  box-sizing: border-box;
  color: #fff;
    font-size: 20px;
    
    line-height: 1.2;
    
    
 
}
.pBox { 

  font-family: 'Courier New', Courier, monospace;
  line-height: 30px;
  font-weight: normal;
  margin-bottom: 15px;
  font-size: 16px;
    color: #d3d1d1;
}

.pFoot2{
  font-family: "Oswald";
  margin: 50px;
}

.aFoot{
  margin: -7px;
}

.pFoot3{
  font-family: "Oswald";
  margin: 27px;
}

#LogoHead { 
  width: 100px;
  height: 100px;
}

.divHead { 
  display: flex;
  padding: 5px;
}

#div1Flex {
  margin-top: 100px;
}

#div2Flex {
  margin-top: 150px;
}

/* 
 /* start img hover */ 
*/ 
.container {
  position: relative;
  width: 50%;
  max-width: 300px;
  padding-left: 50%;
  
}
.overlay {
  position: relative; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */ 
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 5px;
  text-align: center;
  
}

.container:hover .overlay {
  opacity: 1;
}


.hoverImg { 
  
  display: block;
  width: 100%;
  height: auto;
  margin-left: 24%;
}

.buttonSearch { 
  border-radius: 4px;
  background-color: #222f3e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 130%;
  padding: 15px;
 width: 22%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0;
 
  

}
#content-item {
  width: 100%;
 
}
#content-item .item{
  height: 60vh;
  overflow: hidden;
  cursor: pointer;

  margin: 0;
}
#content-item .item img {

  opacity: .66;
}
#content-item .item:hover img{
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
  -webkit-transition: all 0.8s;
  transition: all 0.8s;
  opacity:1;
}


/* end img hover */ 
img:hover {
  transform: (1.0); /* IE 9 */
  
}
/** frist productcard  */
.product-card {
    width: 380px;
    position: relative;
    box-shadow: 0 2px 7px #dfdfdf;
    margin: 50px auto;
    background: #fafafa;
}

.badge {
    position: absolute;
    left: 0;
    top: 20px;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    background: red;
    color: #fff;
    padding: 3px 10px;
}

.product-tumb {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 300px;
    padding: 50px;
    background: #f0f0f0;
}

.product-tumb img {
    max-width: 100%;
    max-height: 100%;
}

.product-details {
    padding: 30px;
}

.product-catagory {
    display: block;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: #ccc;
    margin-bottom: 18px;
}

.product-details h4 a {
    font-weight: 500;
    display: block;
    margin-bottom: 18px;
    text-transform: uppercase;
    color: #363636;
    text-decoration: none;
    transition: 0.3s;
}

.product-details h4 a:hover {
    color: #fbb72c;
}

.product-details p {
    font-size: 15px;
    line-height: 22px;
    margin-bottom: 18px;
    color: #999;
}

.product-bottom-details {
    overflow: hidden;
    border-top: 1px solid #eee;
    padding-top: 20px;
}

.product-bottom-details div {
    float: left;
    width: 50%;
}

.product-price {
    font-size: 18px;
    color: red;
    font-weight: 600;
}

.product-price small {
    font-size: 80%;
    font-weight: 400;
    text-decoration: line-through;
    display: inline-block;
    margin-right: 5px;
}

.product-links {
    text-align: right;
}

.product-links a {
    display: inline-block;
    margin-left: 5px;
    color: #e1e1e1;
    transition: 0.3s;
    font-size: 17px;
}

.product-links a:hover {
    color: red;
}
/**w3 card */
.car {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.car button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color:#222f3e ;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.car button:hover {
  opacity: 0.7;
}

.hover06 figure img {
	-webkit-transform: rotate(15deg) scale(1.4);
	transform: rotate(15deg) scale(1.4);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.hover06 figure:hover img {
	-webkit-transform: rotate(0) scale(1);
	transform: rotate(0) scale(1);
}
/* start fotos header */ 
.one1{
      width: 100%;
       height: 810px;
       margin: 0;
       opacity: 0.5;
  }
  .col-6:hover .one1 {
    opacity: 5;
    -webkit-transform: scale(1.5);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    }

  .two2{
       width: 100%;
       height: 810px;
       margin: 0;
       padding: 0;  
       opacity: 0.5; 
  }

  .col-3:hover .two2 {
    opacity: 5;
    -webkit-transform: scale(1.5);
    transform: scale(1);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    }

  .three3{
       width: 100%;
       height: 402px;
       opacity: 0.5; 
      }

      .col-3:hover .three3 {
        opacity: 5;
        -webkit-transform: scale(1.5);
        transform: scale(1);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
        }

/* end fotos header */ 

#spanLogo { 
  color: red;
 
}

</style>
</head>
<body>
<!------ header ---->

<header class="header">
  <div class="divHead">
  <img id="LogoHead" src="../vrbrillen/img/Foto/001-virtual-reality.png" alt="Logo">

    <h1 class="logo"><a href="#"><span id="spanLogo" >VR.</span>Brillen</a></h1>
    </div>
  <ul class="main-nav">
      <li><a href="#home">Home</a></li>
      <li><a href="./page/products.php">Shop</a></li>
      <li><a href="./page/aboutUs.php">About</a></li>
      <li><a href="./page/contact.php">Contact</a></li>
  
   
      <!--Start (Search Search Bar and button) --> 
     <li>
       <div class="search-container">
        <form action="search.php" method="POST" >
          <input type="text"id="mySearch" placeholder="Search.." nkeyup="myFunction()" title="Type in a category" name="search">
          <button class="buttonSearch" type="submit"><i  class="fa fa-search"></i></button>
        </form>
      </div>
       
      </li>
      <!--End (Search Search Bar and button) -->  
     <li><a href="../loginfile/login.php"><i class="fa fa-user"></a></i></li> 
     <li><a href=""><i class="fa fa-shopping-basket"></a></i></li> 
  </ul>
</header> 
<!------ end header ---->
<!------ row ---->
<div class="row">
  <div id= "div1Flex" class="col-8">
    <h1 id="home">Multiversum</h1>
    <p>Wij zijn Multiversum, dé eerste fysieke Virtual Reality winkel van Nederland. 
      Wij zitten centraal gelegen in de binnenstad van Utrecht aan de Steenweg, waar je onze VR brillen kunt uitproberen. 
      Op zoek naar een VR Headset? Multiversum heeft het breedste aanbod aan VR Headsets en accessoires. Bekijk het aanbod in onze gloednieuwe webshop. <br> <br>

      <h1 > Multiversum:</h1><br>
      Bij Multiversum houden wij van Virtual Reality.
      Want hoe gaaf is het, dat de wereld op een digitale manier volledig nagemaakt kan worden?! Dit biedt niet alleen mogelijkheden voor gamen, maar ook nog eens enorme kansen voor commerciële en zakelijke instellingen. Wij willen deze passie dan ook met onze klanten delen.
      Door jarenlange ervaring in de VR-wereld en B2B geven wij jou altijd het beste advies. Of dit nou voor je eerste VR-headset thuis is, of als je een VR-arcade wil gaan beginnen: Multiversum staat voor je klaar.
      Multiversum is er voor de consument en voor de zakelijke gebruiker. Onze klantenservice-medewerkers staan 5 dagen in de week voor je klaar! Of je nou vragen hebt over een nieuwe VR-headset, wilt weten waar je bestelling is gebleven, of benieuwd bent naar de laatste VR-ontwikkeling: vraag het aan onze klantenservice!
      </p>
  </div>
  <div id="content-item">
  <div id="div2Flex" class="col-4 right">
    <div class="item">
       <img src="img/Foto/jessica-lewis-DeyfdybVQhA-unsplash.jpg" alt="">
    
  </div>
  </div>
  </div>
   <!-- start Informtion -->
   <div class="product">
          <div class="col-6">
             <img class="one1" src="./img/Foto/stephan-sorkin-kCrwoHRWe8Y-unsplash.jpg" alt="">
           
          </div>
          <div class="col-3">
              <img  class="two2" src="./img/Foto/xianjuan-hu-uPYpcsbICI4-unsplash.jpg" alt="">
            
          </div>
          <div class="col-3">
              <img class="three3" src="./img/Foto/thisisengineering-raeng-jqD8bSQY6Ic-unsplash.jpg" alt="">
              <img class="three3" src="./img/Foto/001-virtual-reality.png" alt="">
            
          
          <div class="col-3">
            
            
          
        </div>
        </div>
        <!--End informtion-->
 
  </div>
</div>
<!------ end row ---->
<!------ main ---->
<div>
  <h1>Wij adviseren</h1>
</div>
<div class="main">
    <div class="col-4">
    <div class="product-card">
		<div class="badge">Hot</div>
		<div class="product-tumb">
			<img src="img/Oculus Rift S.jpeg" alt="">
		</div>
		<div class="product-details">
			<span class="product-catagory">Oculus Rift S</span>
			<h4><a href="">oculus Rift S</a></h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
			<div class="product-bottom-details">
				<div class="product-price"><small>$96.00</small>$230.99</div>
				<div class="product-links">
					<a href=""><i class="fa fa-heart"></i></a>
					<a href=""><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
		</div>
	</div>
    </div>
    <div class="col-4">
    <div class="product-card">
		<div class="badge">Hot</div>
		<div class="product-tumb">
			<img src="img/Oculus Rift S.jpeg" alt="">
		</div>
		<div class="product-details">
			<span class="product-catagory">Oculus Rift S</span>
			<h4><a href="">Oculus Rift</a></h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
			<div class="product-bottom-details">
				<div class="product-price"><small>$96.00</small>$230.99</div>
				<div class="product-links">
					<a href=""><i class="fa fa-heart"></i></a>
					<a href=""><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
		</div>
	</div>
    </div>
    <div class="col-4">
    <div class="product-card">
		<div class="badge">Hot</div>
		<div class="product-tumb">
			<img src="img/Oculus Rift S.jpeg" alt="">
		</div>
		<div class="product-details">
			<span class="product-catagory">oculus Rift S</span>
			<h4><a href="">oculus Rift S</a></h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
			<div class="product-bottom-details">
				<div class="product-price"><small>$96.00</small>$230.99</div>
				<div class="product-links">
					<a href=""><i class="fa fa-heart"></i></a>
					<a href=""><i class="fa fa-shopping-cart"></i></a>
				</div>
			</div>
		</div>
	</div>
    </div>
  </div>
  <!------ end main  ---->



  <!------  Populartext Items  ---->
  <div class="Populartext">
    <div class="col-12">
        <h1>Popular Items</h1>
      <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
        
  </div>
  <!-- end Populartext-->
  <!------  Popular Items  ---->
  <div class="Popular">
    <div class="col-4">
      <div class="container">
        <div class="car">
            <img src="img/Oculus Quest 2 64GB.png" alt="Denim Jeans" style="width:100%">
            <h1>Tailored Jeans</h1>
            <p class="price">$19.99</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
             <p><button>Add to Cart</button></p>
          </div>
        </div>
  </div>
  <div class="col-4">    
    <div class="container">
    <div class="car">
            <img src="img/Oculus Rift S.jpeg" alt="Denim Jeans" style="width:100%">
            <h1>Tailored Jeans</h1>
            <p class="price">$19.99</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
             <p><button>Add to Cart</button></p>
          </div>
        </div>
  </div>
  </div>
  <div class="col-4">    
    <div class="container">
    <div class="car">
            <img src="img/Oculus Rift S.jpeg" alt="Denim Jeans" style="width:100%">
            <h1>Tailored Jeans</h1>
            <p class="price">$19.99</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
             <p><button>Add to Cart</button></p>
          </div>
        </div>
  </div>
  </div>

  <!-- end Popular-->
  <!------  Popular Items  ---->
  <div class="Popular2">
    <div class="col-4">
      <div class="container">
      <div class="car">
            <img src="img/Oculus Rift S.jpeg" alt="Denim Jeans" style="width:100%">
            <h1>Tailored Jeans</h1>
            <p class="price">$19.99</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
             <p><button>Add to Cart</button></p>
          </div>
        </div>
       
      </div>
        
  </div>
  <div class="col-4">  
    <div class="container">  
     <div class="car">
            <img src="img/Oculus Rift S.jpeg" alt="Denim Jeans" style="width:100%">
            <h1>Tailored Jeans</h1>
            <p class="price">$19.99</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
             <p><button>Add to Cart</button></p>
          </div>
        </div>
  </div>
</div>
  <div class="col-4">    
    <div class="container">
    <div class="car">
            <img src="img/Oculus Rift S.jpeg" alt="Denim Jeans" style="width:100%">
            <h1>Tailored Jeans</h1>
            <p class="price">$19.99</p>
            <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
             <p><button>Add to Cart</button></p>
          </div>
        </div>
  </div>
</div>

  <!-- end Popular-->
    <!------  Populartext Items  ---->
    <div class="Populartext">
        <div class="col-12">
          <button><span><a href="../vrbrillen/page/products.html"> VIEW MORE PRODUCTS  </a> </span> </button>  
      </div>
      <!-- end Populartext-->
      <!-- video-->
      <div class="video">
         <div class="col-12">
         <iframe  src="https://www.youtube.com/embed/s5vAMhJsPfc"></iframe>
      </div>
      <!-- end video -->
       <!--  keuze -->
       <div class="keuze">
        <div class="col-6">
          <h1>Kijk naar de keuze</h1>
          <p>Chania is the capital of the Chania region on the island of Crete.
               The city can be divided in two parts, the old town and the modern city.
            </p>
            <button>kijk vrbrillen </button>
        </div>
      
        <div class="col-6 right">
             <img src="./img/VR-SHINECON.jpg" alt="">
        </div>
      </div> 

  
<!--  end keuze -->
<!--  deel 2keuze -->
  
    <!--  keuze -->
  
    <div class="keuze">
      <div class="col-6 right">
        <img src="img/VR-Headset-Compatible.jpg" alt="">
   </div>
 </div>
      <div class="col-6">
        <h1>Kijk naar de keuze</h1>
        <p>Chania is the capital of the Chania region on the island of Crete.
             The city can be divided in two parts, the old town and the modern city.
          </p>
          <button>kijk vrbrillen </button>
      </div>
    <br> 
     





<!--  end keuze -->



<!--  end deel keuze -->

<!--- Free Shipping Method--> 
     <div id="col-9">
        
        <div class="col-12" id="col-12">
          <div class="Quick">
              <div   >
                  <div id="box" >
                      <div id="box" class="col-2" >
                          <div >
                            <i class="fa fa-cube" style="font-size:35px;color:#ffffff"></i>
                              <h3>Free Shipping Method</h3>
                              <p class="pBox">aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                          </div>
                      </div>
                      <div id="box"  class="col-2" >
                          <div >
                            <i class="fa fa-unlock-alt" style="font-size:35px;color:#ffffff"></i>
                              <h3>Secure Payment System</h3>
                              <p class="pBox">aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                          </div>
                      </div> 
                      <div id="box" class="col-2" >
                          <div  >
                            <i class="fa fa-refresh" style="font-size:30px;"></i>
                              <h3>Secure Payment System</h3>
                              <p class="pBox">aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    </div>
      <!-- Shop Method End-->



<!--- New Products-->

    
   
     


<!--- end New Products-->
<!------ footer ---->


<div class="col-12" id="col-12">
  <div class="Quick">
    <div class="col-3">
      <!-- Link block 1 (vr.brillen) -->
      <h1><span style=" background-color:#ffffff; color: red; font-size: 60px";  >VR</span>.brillen </h1>
      <!-- <p><strong> VR Brillen:</strong> <br> -->
    <p style="font-family:'Oswald';">   Met een VR-bril duik je in de wondere wereld van Virtual Reality! Zet een VR-bril op je hoofd en geniet van de mooiste VR-applicaties en 360-graden video's.
        Kies voor een VR-bril die je op een PC aansluit voor extra power, of voor een standalone VR-bril om te genieten van extra vrijheid zonder kabels.<br></p> 
    </div>
  <div class="main-nav"> 
        <!-- Link block 2 ( Quick Links )-->
        <div class="col-12">
          <h1 >Quick Links</h1>
          <a style="color: #000000;" class="aFoot" href="#">Over</a><br>
          <a  style="color: #000000;"class="aFoot" href="#"> Aanbiedingen en kortingen</a><br>
          <a  style="color: #000000;"class="aFoot" href="#">Krijg een kortingsbon</a><br>
          <a  style="color: #000000;" class="aFoot" href="./page.contact.php">Neem contact op</a><br>
        </div>
        <!-- Link block 2 ( Openingstijden )-->
        <div class="col-12">
          <h1>Openingstijden</h4>
          <ul>
              <li><p class="pFoot2">Maandag & dinsdag: Gesloten</i></li>
              <li><p class="pFoot2">(alleen groepsreserveringen)</p></li>
              <li><p class="pFoot2">maandag t/m zondag: 12:00 – 22:00 (vrije inloop)</p></li>
          </ul>
      </div>



         <!-- Link block 2, Social -->
         <div class="col-12">
          <div class="col-12">
           
              <h1>Support</h1>
                <p class="pFoot3">Veel Gestelde Vragen</p> 
                <p class="pFoot3">algemene voorwaarden</p>
                <p class="pFoot3">Privacybeleid</p>
                <p class="pFoot3">Meld een betalingsprobleem</p>
            </div>
        </div>
          
      </div>
    </div>
    <div class="col-12" id="col-12">
      <div class="Quick">
        <div class="col-12">
   <ul class="main-nav">
    <div class="col-12"></div>
   <li><a style="color: #000000;" href=""><i class="fa fa-twitter"></a></i></li> 
   <li><a style="color: #000000;" href=""><i class="fa fa-envelope-o"></i></a></i></li> 
   <li><a style="color: #000000;" href=""><i class="fa fa-facebook"></i></a></i></li> 

</ul>
</div> 
<div class="col-4">
  <p>Copyright ©2021 All rights reserved | This  website is made with by Ashraf and Ahmed</p>
</div>
</div>
</div>
</div>

</body>
</html>
