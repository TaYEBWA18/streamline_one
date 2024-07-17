<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  margin: 0;
}

body {
  background: #b7b7b7 none repeat scroll 0 0;
  font-family: 'Open Sans',sans-serif;}

.layout {margin: 0 auto;  max-width: 1170px;  width: 100%;padding: 0 15px;}
/********Grid Widht *******/

.form-group{ float:left;    padding-left: 15px;    padding-right: 15px;       width: 50%;}
.grid-8{width: 66.6667%;}
.grid-12{width: 100%;padding-left: 15px;  padding-right: 15px;  position: relative;    overflow: hidden;} 


/***Section Css******/

section {    background: #2eb82e ;    color: #000;    padding: 30px 0;}
.text-center{text-align:center;}
.section-title {    color: #fff;    font-size: 35px;    font-weight: bold;    text-transform: uppercase;}
.contact p {    color: #929292;    letter-spacing: 1.5px;    padding-top: 50px;}
.form{ margin:0 auto;}
.form form {    margin-top: 50px;}
input {    width: 100%;}
.form-control {    width: 100%;}
.form-control {    background-color: #fff;    border: 1px solid #ccc;  border-radius:5px;  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555;    display: block;    font-size: 14px;     line-height: 1.42857;    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;    width: 100%;
    text-transform: capitalize;}

.costom-btn {    background:#22c489;    border: 1px solid #22c489;  border-radius: 10px;  color: #ffffff;
    font: bold 16px/18px "Open Sans",sans-serif;    letter-spacing: 1.5px;    text-transform: uppercase;
     width: 100%;    padding: 6px 12px;    cursor: pointer;}
     .custom-btn:hover{
        color: blue;
     }
.form-group {    margin-top: 23px;}
.icon-text {    color: #ffffff;    font: 16px/22px "Open Sans",sans-serif;    text-align: center;
    text-transform: uppercase;   margin: 25px 0;}
.icon-holder {    margin: 0 auto;    width: 265px;}
.icon-holder ul li a {    color: #ffff33;    height: 38px;    width: 38px;}
.icon-holder ul li {    display: inline;    padding: 12px;}
@media (max-width:980px) {
  .layout {       width: 80%px; }
  .grid-6 {       width: 50%; }
}
@media (max-width:640px) {
  .layout {   width: 80%; }
  .form-group, .grid-8 {    width: 100%;  }


  }
    </style>
    <title>contact us</title>
</head>
<body>
<section class="contact">
  <div class="layout">   
        <div class="text-center">
          <h1 class="section-title">Contact Stream</h1>
          <p style="color:#005580;">We are transforming healthcare service delivery for millions of underserved people in Africa!</p>
        </div>
        <div class="grid-8 form">
          <form action="php/email.php" method="post" id="contact_form" name="contactForm">
            <div class="form-inline clearfix">
              <div class="form-group grid-6 ">
                <input type="text" placeholder="name" id="exampleInputName" name="name" class="form-control">
              </div>
              <div class="form-group grid-6">
                <input type="email" placeholder="email address" id="exampleInputEmail" name="email" class="form-control">
              </div>
              <div class="form-group grid-6">
                <input type="text" placeholder="subject" id="exampleInputSubject" name="subject" class="form-control">
              </div>
              <div class="form-group grid-6">
                <input type="text" placeholder="company" id="exampleInputCompany" name="company" class="form-control">
              </div>
              <div class="form-group grid-12">
                <textarea placeholder="message" id="exampleInputMessage" rows="3" name="message" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div style="display:none;" class="success" id="mail_success">Your message has been sent successfully.
              </div><!-- success message -->
              <div style="display:none;" class="error" id="mail_fail"> Sorry, error occured this time sending your message.
              </div><!-- error message -->
            </div>
            <div id="submit" class="form-group grid-12">
              <input type="submit" value="send" class="btn  btn-lg costom-btn" id="send_message">
            </div>
          </form>
        </div> <!-- /.col-xs-12 .col-sm-offset-2 .col-sm-8 -->
        <div class="grid-12">       
          <div class="icon-text">
            <span>find us on</span>
          </div><!-- /.icon-text -->
          <div class="icon-holder">
            <ul>
              <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a target="_blank" href="#"><i class="fa fa-behance"></i></a></li>
              <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
              <a>Copyright &copy; Not you 2024 <a href="{{route('home')}}">Home</a>|<a href="{{route('about')}}">About Us</a></a>
            </ul>
          </div><!-- /.icon-holder -->
        </div><!-- /.col-xs-12 -->     
  </div>  
</section>
</body>
</html>

