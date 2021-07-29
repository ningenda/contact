<?php
include "contact1.php";
$r='';
if(isset($_POST['save'])){
$obj=new Studentinfo();

$data=array('name'=>$_POST["name"],'email'=>$_POST["email"],'phone'=>$_POST["phone"],'message'=>$_POST["message"]);

$r=$obj->insert_data($data);



}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Booking</title>
  </head>
  <body>
    <header>
        <div class="collapse bg-dark "  id="navbarHeader">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-md-7 py-4">
                <h4 class="text-warning">About</h4>
                <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
              </div>
              <div class="col-sm-4 offset-md-1 py-4">
                <h4 class="text-warning">Contact</h4>
                <ul class="list-unstyled justify-content-between">
                  <li><a href="#" class="text-primary"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" class="text-primary"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#" class="text-white"><i class="fas fa-paper-plane"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="navbar navbar-dark bg-dark border-bottom  shadow-sm">
          <div class="container d-flex justify-content-between">
            <a href="index.php" class="navbar-brand d-flex align-items-center">
              <img src="download.png" alt="" class="indexheadlogo">&nbsp
              <strong class="text-warning">Bike It</strong>
            </a>
            <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link text-warning" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-warning" href="#">About Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-warning active" href="#">Booking</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-warning" href="#" >Contact Us</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-warning" href="signin.php" >Sign in</a>
  </li>
</ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
        


        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center bg-dark text-warning">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-dark">
                  <li class="breadcrumb-item "><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Booking</li>
                </ol>
              </nav>
            <h1 class="display-4"><br> <strong class="">Save</strong> </h1>
            
            <div class="hrout text-warning"><hr><i class="fas fa-cog"></i><hr></div>
      </header>


      <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        
        <h1 class="display-4"><br> <strong class="">Fill the details below</strong> </h1>
        <p class="lead">Competetive pricing and best prices</p>
            <div class="hrout text-warning"><hr><i class="fas fa-cog"></i><hr></div>
   
            <span style="color:red"><?php  echo $r; ?></span>
            <form class="bg-light text-dark text-left" name="myform" method="post" enctype="multipart/form-data" onsubmit="return validate()" action=""    >
                <fieldset>
                <legend class="book">Contact Form</legend>
                <div class="form-row">
                  <div class="form-group col-md-12">
                     
                    <label for="inputEmail4" class="book">Name</label>
                    <input type="text" placeholder="name" name="name"class="form-control" id="inputEmail4" required>
                  </div>
                  <div class="form-group col-md-12">
                  <label for="inputEmail4" class="book">Email</label>
                    <input type="email" placeholder="Email" name="email" class="form-control" id="email" required>                  
                    </div>
                  </div>

                   <div class="form-group col-md-12">
                  <label for="inputEmail4" class="book">Contact</label>
                    <input type="text"xaceholder="phone" name="phone" class="form-control" id="phone" maxlength="10" required >                 
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                  <label for="inputEmail4" class="book">Message</label>
                    <textarea rows="4" cols="20" name="message" class="form-control" id=""  >    </textarea>            
                    </div>

    
                  
                <button type="submit" class="btn btn-outline-warning text-dark book" name="save">save</button>
            </fieldset>
            
              </form>


      </div>

      <section id="contact" class="contact">
        <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
     <div class="section-title">
       <h2 class="display-4"> <strong>Contact</strong> </h2>
    
       <p class="lead">Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
       <div class="hrout text-warning"><hr><i class="fas fa-cog"></i><hr></div>
     </div>

     <div>
       <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=programming%20classes%20patna&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
     </div>

      <footer class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center text-dark ">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2015-2021 Programming Classes, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        <div class="row">
              <div class="col-12 col-md">
                <img class="mb-2" src="download.png" alt="" width="24" height="24">
              
              </div>
              <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Cool stuff</a></li>
                  <li><a class="text-muted" href="#">Random feature</a></li>
                  <li><a class="text-muted" href="#">Team feature</a></li>
                  <li><a class="text-muted" href="#">Stuff for developers</a></li>
                  <li><a class="text-muted" href="#">Another one</a></li>
                  <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Resource</a></li>
                  <li><a class="text-muted" href="#">Resource name</a></li>
                  <li><a class="text-muted" href="#">Another resource</a></li>
                  <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
              </div>
              <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="#">Team</a></li>
                  <li><a class="text-muted" href="#">Locations</a></li>
                  <li><a class="text-muted" href="#">Privacy</a></li>
                  <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
              </div>
            </div>
      </footer>
      <script type="text/javascript">
    function validate() {
 var name = document.forms["myform"]["name"].value;
 if(name==""){
 alert("Please enter the name");
 return false;
 }
 var email = document.forms["myform"]["email"].value;
 if(email==""){
 alert("Please enter the email");
 return false;
 }else{
 var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
 var x=re.test(email);
 if(x){
 }else{
 alert("Email id not in correct format");
 return false;
 } 
 } 
 var mobile = document.forms["myform"]["phone"].value;
 if(mobile==""){
 alert("Please enter the mobile");
 return false;
 }else{
var rep= /^[1-9]\d{9}$/;
var y=rep.test(mobile);
if (y){
}else{
alert("phone not in correct format");
 return false;
} 
}
 
 
}
      </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>