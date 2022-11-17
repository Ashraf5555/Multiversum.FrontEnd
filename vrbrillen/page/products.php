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
	-webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
  position: fixed;
  width: 100%;
padding: 0px;

    
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
    color: #ff0000;
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
  padding-right: 16px;
}

button:hover span:after {
  opacity: 1;
  right: 0;
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

#headImg { 
  width: 60%;
  height: 500px;
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



</style>
</head>
<body>
<!------ header ---->
<header class="header">
  <div class="divHead">
  <img id="LogoHead" src="../img/Foto/001-virtual-reality.png" alt="Logo">

    <h1 class="logo"><a href="#"><span>VR.</span>Brillen</a></h1>
    </div>
  <ul class="main-nav">
      <li><a href="../vrbrillen.php">Home</a></li>
      <li><a href="./products.php">Shop</a></li>
      <li><a href="./aboutUs.php">About</a></li>
      <li><a href="./contact.php">Contact</a></li>
      <!--Start (Search Search Bar and button) --> 
     <li>
       <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search">
          <button class="buttonSearch" type="submit"><i  class="fa fa-search"></i></button>
        </form>
      </div>
       
      </li>
      <!--End (Search Search Bar and button) -->  
     <li><a href=""><i class="fa fa-user"></a></i></li> 
     <li><a href=""><i class="fa fa-shopping-basket"></a></i></li> 
  </ul>
</header> 
<!------ end header ---->
<!------ end header ---->
<!------ row ---->
<div class="row">
  <div class="col-12">
       <img id="headImg" src="../img/Foto/jessica-lewis-DeyfdybVQhA-unsplash.jpg" alt="">
  </div>
</div>
<!------ end row ---->
<!------ main ---->
<div>
  <h1>Wij adviseren</h1>
</div>
<div class="main">
    <div class="col-4">
         <a href="page/detail.html"><img src="../img/HP Reverb.jpeg" alt=""></a>
      <h1>HP Reverb</h1>
      <p>€ 699,-</p>
    </div>
    <div class="col-4">
      <a href="page/detail.html"><img src="../img/VR BOX VR-bril.jpeg" alt=""></a>
      <h1>VR BOX VR-bril</h1>
      <p>€ 17,50-</p>
    </div>
    <div class="col-4">
      <a href="page/detail.html"> <img src="../img/DPVR DPVR E3 4K.png" alt=""></a>
      <h1>DPVR DPVR E3 4K</h1>
      <p>€ 22,99 - </p>
    </div>
  </div>
  <!------ end main  ---->



  <!-- <div class="product">
    <div class="col-4">
        <img class="one" src="../img/Foto/martin-woortman-2YZkzSUb6M8-unsplash.jpg" alt="">
      <h1>The City</h1>
      <p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
    </div>
    <div class="col-4">
        <img  class="two" src="../img/Foto/xianjuan-hu-uPYpcsbICI4-unsplash.jpg" alt="">
      <h1>The City</h1>
      <p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
    </div>
    <div class="col-4">
        <img class="three"src="../img/Foto/mike-petrucci-c9FQyqIECds-unsplash.jpg" alt="">
      <h1>The City</h1>
      <p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
    </div>
  </div> -->
  <!------  Populartext Items  ---->
  <div class="Populartext">
    <div class="col-12">
        <h1>Popular Items</h1>
      <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
        
  </div>
  <!-- end Populartext-->
  <!------  Popular Items  ---->
 <!------  Popular Items  ---->
 <div class="Popular">
  <div class="col-4">
    <div class="container">
      <img id="three"src="img/Oculus Quest 2 64GB.png" alt="">
      <h1>Oculus Rift S.jpeg</h1>
      <p>vanaf € 450,59</p>
      <div class="overlay"><button class="buttonImg">Add to cart</button></div>
      </div>
</div>
<div class="col-4">    
  <div class="container">
  <img id="three"src="img/Oculus Quest 128GB.jpeg" alt="">
    <h1>Oculus Quest 128GB</h1>
    <p>100</p>
    <div class="overlay"><button class="buttonImg">Add to cart</button></div>
</div>
</div>
<div class="col-4">    
  <div class="container">
  <img id="three"src="img/Samsung New Gear VR + Gear VR Controller.png" alt="">
    <h1>Samsung New Gear VR + Gear VR Controller</h1>
    <p>100</p>
    <div class="overlay"><button class="buttonImg">Add to cart</button></div>
</div>
</div>

<!-- end Popular-->
<!------  Popular Items  ---->
<div class="Popular2">
  <div class="col-4">
    <div class="container">
      <img class="hoverImg" id="three" src="img/VR-SHINECON.jpg" alt=""> <!-- Img hover (add to cart) -->
      <h1>Samsung New Gear VR + Gear VR Controller</h1>
    <p>100</p>
      <div class="overlay"><button class="buttonImg">Add to cart</button></div>
     
    </div>
      
</div>
<div class="col-4">  
  <div class="container">  
  <img id="three" src="img/Oculus Quest 2 64GB.png" alt="">
    <h1>The City</h1>
    <p>100</p>
    <div class="overlay"><button class="buttonImg">Add to cart</button></div>
</div>
</div>
<div class="col-4">    
  <div class="container">
  <img id="three" src="./img/DESTEK V5 VR Headset.jpg" alt="">
    <h1>The City</h1>
    <p>100</p>
    <div class="overlay"><button class="buttonImg">Add to cart</button></div>
</div>
</div>

<!-- end Popular-->

  <!-- end Popular-->
  <!------  Popular Items  ---->
  <div class="Popular">
    <div class="col-4">
        <img id="three"src="../img/Oculus Rift S.jpeg" alt="">
        <h1>Oculus Rift S.jpeg</h1>
        <p>vanaf € 450,59</p>
        
  </div>
  <div class="col-4">    
    <img id="three"src="../img/Oculus Quest 128GB.jpeg" alt="">
      <h1>Oculus Quest 128GB</h1>
      <p>100</p>
  </div>
  <div class="col-4">    
    <img id="three"src="../img/Samsung New Gear VR + Gear VR Controller.png" alt="">
      <h1>Samsung New Gear VR + Gear VR Controller</h1>
      <p>100</p>
  </div>

  <!-- end Popular-->
  <!------  Popular Items  ---->
  <div class="Popular">
    <div class="col-4">
        <img id="three"src="../img/Oculus Rift S.jpeg" alt="">
        <h1>Oculus Rift S.jpeg</h1>
        <p>vanaf € 450,59</p>
        
  </div>
  <div class="col-4">    
    <img id="three"src="../img/Oculus Quest 128GB.jpeg" alt="">
      <h1>Oculus Quest 128GB</h1>
      <p>100</p>
  </div>
  <div class="col-4">    
    <img id="three"src="../img/Samsung New Gear VR + Gear VR Controller.png" alt="">
      <h1>Samsung New Gear VR + Gear VR Controller</h1>
      <p>100</p>
  </div>

  <!-- end Popular-->
  <!------  Popular Items  ---->
  <div class="Populartext">
    <div class="col-12">
      <button><span>view more products</span> </button>  
  </div>
  <!-- end Populartext-->


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
     <a  style="color: #000000;" class="aFoot" href="#">Neem contact op</a><br>
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
<p>Copyright ©2021 All rights reserved | This template is made with  by Colorlib</p>
</div>
</div>
</div>
</div>

</body>
</html>
