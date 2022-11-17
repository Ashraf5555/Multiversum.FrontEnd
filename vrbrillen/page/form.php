
<div class="product">
    <div class="col-8">
        <div class="container">
            <form action="contact.php" method="POST">
              <div class="row">
                <div class="col-8">
                  <h1 id="h1Contact">Get in Touch</h1>
                </div>
                <div class="col-10">
                  <textarea class="subjectInhoud" name="subject" placeholder="Write something.." ></textarea>
                </div>
                
                
                <div class="col-10">
                  <input class="inputContact" type="text" id="fname" name="FullName" placeholder="Your name..">
                    <input class="inputContact" type="text" id="lname" name="lastName" placeholder="Your last name..">
                  
                </div></div>
             
                
                <div class="col-10">
                  <input class="inputEmail" type="email" id="lname" name="email" placeholder="Email">
                </div>
              </div>
              <div class="row">
              
              <div class="row">
                <div class="col-8">
                <input type="submit" value="Submit">
              </div></div>
            </form>
            <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
          </div>
      
    </div>
    <div class="col-4">
     <p>Multiversum B.V. </p>
     <p> Steenweg 21, 3511 JL, Utrecht</p>
    <p> info@multiversum.nl</p>
    <p> 030 – 123 456 7</p>
    <p>KVK nummer: 87654321</p>
    <p> BTW nummer: NL 123456789B01</p>
  </div>