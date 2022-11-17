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
      width: 100%;
       height: 810px;
       margin: 0;

     
  }
  .two{
       width: 100%;
       height: 810px;
       margin: 0;
       padding: 0;
     
       
       
  }
  .three{
       width: 100%;
       height: 402px;
       
      
      
          
       
         
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
  


.subjectInhoud { 
  height: 200px;
  width: 500px;
  border: 1px solid #e5e6e9;
  

  
  font-size: 13px;
  background: transparent;

}
.inputContact{
  width: 250px;
  height: 50px;
  border: 1px solid #e5e6e9;
  font-size: 13px;
  background: transparent;
}

.inputEmail { 
  width: 500px;
  height: 50px;
  border: 1px solid #e5e6e9;
  font-size: 13px;
  background: transparent;
}


  /* start contact Img center */

@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; } 
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; }
#slider {  
  border-radius: 20px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

#slider:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

div#slider figure { 
  position: relative;
  width: 500%;
  height: 20%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 20s slidy infinite; 
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
      <li><a href="./page/aboutUs.html">About</a></li>
      <li><a href="./page/products.html">shop</a></li>
      <li><a href="./page/contact.html">Contact</a></li>
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
<!------ row ---->
<div class="row">
  <div class="col-12">
    <h4>Multiversum</h4>
    
</div>
<!------ end row ---->
<!------ main ---->
<div class="main">
    <div class="col-12">
      <!-- <div class="containerContact">
        <div class="col-12">
        <img class="imgContact" src="../img/Foto/full-width-slideshow-background1 (1).jpg" alt="Snow">
        <h2 id="h2IdContact">Contacts</h2>
      </div>
      </div>
      </div> -->
      <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-cap text-center">
                            <h2>Contacts</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
         <!-- start Informtion -->
  <div class="product">
    <div class="col-12">
      <base href="">
      <div id="slider">
      <figure>
      <img src="../img/Foto/martin-woortman-2YZkzSUb6M8-unsplash.jpg">
      <img src="../img/Foto/thisisengineering-raeng-jqD8bSQY6Ic-unsplash.jpg" >
      <img src="../img/Foto/mike-petrucci-c9FQyqIECds-unsplash.jpg" >
      <img  src="../img/Foto/contact-details-3381225_1920_afbeelding_van_mohamed_hassan_via_pixabay.jpg" >
      <img  src="../img/Foto/thisisengineering-raeng-jqD8bSQY6Ic-unsplash.jpg">
      </figure>
      </div>
  </div>
  </div>
  <!--End informtion-->
     
  </div>
  <!------ end main  ---->

    
<!------ footer ---->


