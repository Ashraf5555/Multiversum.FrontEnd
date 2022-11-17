
<!-- 
  fileName : Database
  Arthur   : Ashraf Soudah , Ahmad Al Othman.
  Data     : 05-03-2021
-->

<!DOCTYPE html>
<html>
<head>
<title>####</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    * {
    box-sizing: border-box;
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
    top: 0;
   
  
    
      
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
      background-color: #fff;
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
    padding-right: 16px;
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
  
  /* start fotos header */ 
    .one1{
        width: 100%;
         height: 810px;
         margin: 0;
         opacity: 0.5;
    }
    .col-6:hover .one1 {
      opacity: 5;
     
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
      }
  
    .three3{
         width: 100%;
         height: 402px;
         opacity: 0.5; 
        }
  
        .col-3:hover .three3 {
          opacity: 5;
          }
  
  /* end fotos header */ 
  
  
  #spanLogo { 
    color: red;
   
  }

  #aboutImg { 
    width: 100%;
    height: 600px;
    margin-top:  100px;
    
  
  }
  /* Basic Styling */
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
  
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
  

}

/* Columns */
.left-column {
  width: 65%;
  position: relative;
  
  

}

.right-column {
  width: 35%;
  margin-top: 60px;
}


/* Left Column */
.left-column img {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  right: 100px;
  top: 50px;
  opacity: 0;
  transition: all 0.3s ease;
}

.left-column img.active {
  opacity: 1;
}


/* Right Column */

/* Product Description */
.product-description {
  border-bottom: 1px solid #eee5e1;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}

/* Product Configuration */
.product-color span,
.cable-config span {
  font-size: 14px;
  font-weight: 400;
  color: #86939E;
  margin-bottom: 20px;
  display: inline-block;
}

/* Product Color */
.product-color {
  margin-bottom: 30px;
}

.color-choose div {
  display: inline-block;
}

.color-choose input[type="radio"] {
  display: none;
}

.color-choose input[type="radio"] + label span {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
  border-radius: 50%;
}

.color-choose input[type="radio"] + label span {
  border: 2px solid #FFFFFF;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
}

.color-choose input[type="radio"]#red + label span {
  background-color: #C91524;
}
.color-choose input[type="radio"]#blue + label span {
  background-color: #314780;
}
.color-choose input[type="radio"]#black + label span {
  background-color: #323232;
}

.color-choose input[type="radio"]:checked + label span {
  background-image: url(images/check-icn.svg);
  background-repeat: no-repeat;
  background-position: center;
}

/* Cable Configuration */
.cable-choose {
  margin-bottom: 20px;
}

.cable-choose button {
  border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color: #5E6977;
  background-color: #fff;
  cursor: pointer;
  transition: all .5s;
}

.cable-choose button:hover,
.cable-choose button:active,
.cable-choose button:focus {
  border: 2px solid #86939E;
  outline: none;
}

.cable-config {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}

.cable-config a {
  color: #358ED7;
  text-decoration: none;
  font-size: 12px;
  position: relative;
  margin: 10px 0;
  display: inline-block;
}
.cable-config a:before {
  content: "?";
  height: 15px;
  width: 15px;
  border-radius: 50%;
  border: 2px solid rgba(53, 142, 215, 0.5);
  display: inline-block;
  text-align: center;
  line-height: 16px;
  opacity: 0.5;
  margin-right: 5px;
}

/* Product Price */
.product-price {
  display: flex;
  align-items: center;
}

.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}

.cart-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn:hover {
  background-color: #64af3d;
}

/* Responsive */
@media (max-width: 940px) {
  .container {
    flex-direction: column;
    margin-top: 150px;
  }

  .left-column,
  .right-column {
    width: 100%;
    
  }

  .left-column img {
    width: 250px;
    height: 150px;
    right: 0;
    top: 350px;
    left: initial;
    
  }
}

@media (max-width: 535px) {
  .left-column img {
    width: 220px;
    top: -85px;
    margin-top: 150px;
    
  }
  .container{
    margin-top: 100%;
  }
  
}



</style>
<body>
  <!------ header ---->
<header class="header">
  <div class="divHead">
  <img id="LogoHead" src="../img/Foto/001-virtual-reality.png" alt="Logo">

    <h1 class="logo"><a href="#"><span id="spanLogo">VR.</span>Brillen</a></h1>
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

<main class="container">

<!-- Left Column / Headphones Image -->
<div class="left-column">
  <img data-image="black" src="../img/black.png" alt="">
  <img data-image="blue" src="../img/blue.png" alt="">
  <img data-image="red" class="active" src="../img/red.png" alt="">
</div>


<!-- Right Column -->
<div class="right-column">

  <!-- Product Description -->
  <div class="product-description">
    <span>Headphones</span>
    <h1>Beats EP</h1>
    <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
  </div>

  <!-- Product Configuration -->
  <div class="product-configuration">

    <!-- Product Color -->
    <div class="product-color">
      <span>Color</span>

      <div class="color-choose">
        <div>
          <input data-image="red" type="radio" id="red" name="color" value="red" checked>
          <label for="red"><span></span></label>
        </div>
        <div>
          <input data-image="blue" type="radio" id="blue" name="color" value="blue">
          <label for="blue"><span></span></label>
        </div>
        <div>
          <input data-image="black" type="radio" id="black" name="color" value="black">
          <label for="black"><span></span></label>
        </div>
      </div>

    </div>

    <!-- Cable Configuration -->
    <div class="cable-config">
      <span>Cable configuration</span>

      <div class="cable-choose">
        <button>Straight</button>
        <button>Coiled</button>
        <button>Long-coiled</button>
      </div>

      <a href="#">How to configurate your headphones</a>
    </div>
  </div>

  <!-- Product Pricing -->
  <div class="product-price">
    <span>148$</span>
    <a href="#" class="cart-btn">Add to cart</a>
  </div>
</div>
</main>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
<script src="../js/product_detail_script.js" charset="utf-8"></script>
</body>