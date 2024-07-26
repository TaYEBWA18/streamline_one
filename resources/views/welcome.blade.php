<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css");
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
}
body {
    width:100%;
    height:100vh;
}

.header {
    border:1px solid black;
    width:100%;
    height:750px;
  bockground-position:center;
  background-size:cover;
    /* background-image: url("https://thumbs.dreamstime.com/b/rocky-heart-dark-background-volcanic-rocks-heart-shaped-white-stone-dark-volcanic-rocks-background-copy-space-seen-192279685.jpg"); */
    background-image: url("https://i.pinimg.com/564x/5c/14/09/5c1409006d8d0bfff360b09ed082391e.jpg");

    color: rgba(255,255,255,1);
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.nav-menu {
    width:95%;
    height: 50px;
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
    justify-content: space-between;
    align-items:center;
    margin-top:6%;
    margin-left: 50px;
}
.nav-menu .logo {
    color: blue;
    font-size: 45px;
    font-weight:600;
    padding-left: 20px;
}

.nav-menu .menu ul {
    list-style:none;
    display:flex;
    height:100%;
   
}
.nav-menu .menu ul li a {
    text-decoration:none;
    color: rgba(255,255,255,1);
    padding: 1em 1.5em;
    line-height: 1px;
    font-size:15px;
    text-transform: uppercase;
    
}
.nav-menu .menu li a:hover,
.nav-menu .menu li a.active {
    border:2px solid white;
    border-radius: 5px;
}
.banner {
    height: 400px;
    width: 60%;
    text-align: center;
    margin: 13% auto;
    font-family: 'Didact Gothic', sans-serif;
}
.banner h1 {
    font-size: 60px;
    font-weight:bold;

}
.banner p {
    padding-top:20px;
    font-size: 30px;
    color: rgba(255,255,255,0.60);
    font-weight:200;
    word-spacing: 1px;
}
.banner a {
    text-decoration: none;
    font-size:18px;
    color: rgba(255,255,255,1);
    margin: 90px auto;
    display: block;
    font-weight: bold;
    border: 2px solid rgba(255,255,255,1);
    width: 27%;
    height: 70px;
    line-height: 70px;
    text-align: center;
    border-radius: 7px;
}
.container {
    width:100%;
    height:600px;
    text-align:center;
    font-family: 'Didact Gothic', sans-serif;
}
.text {
    padding-top: 50px;
    margin-top:40px;
    
}
.text h1 {
    font-size: 30px;
    font-weight: 700;
    color: rgba(0,0,0,0.8);
}
.text p {
    font-size: 18px;
    color: rgba(0,0,0,.5);
    padding-top: 4px;

}
.main {
    width:90%;
    height: 400px;
    margin:50px 5%;
    display:flex;
    flex-direction: row;
    flex-wrap:wrap;
}
.single {
    width:33%;
    height:100%;
    text-align:center;
    padding: 40px 20px;
}
.single i {
    font-size: 45px;
}
.single p {
    padding-top:40px;
    color: rgba(0,0,0,0.6);
    display:block;
    line-height:180%;
    font-size: 14px;
}
.single a {
    text-decoration: none;
    color: rgba(0,0,0,0.8);
    font-size:18px;
    font-weight:700;
    width:45%;
    height:55px;
    line-height: 55px;
    border: 2px solid rgba(0,0,0,0.8);
    display:block;
    border-radius: 5px;
    margin: 40px auto;
}
footer {
    width:100%;
    height:600px;
    background-color: #2eb82e;
    color: rgba(255,255,255,0.60);
    text-align:center;
}
footer h1 {
    font-size: 40px;
    font-weight: bold;
    color: rgba(255,255,255,0.9);
    padding-top: 30px;

}
footer p {
    font-size: 19px;
    padding-top: 4px;
    word-spacing: 2px;
}
footer .txt {
    display: inline-block;
    width:78%;
    height:86px;
    margin-top: 70px;
    font-weight: normal;
    font-size:16px;
    line-height: 180%;
    color: rgba(255,255,255,0.8);
}

footer a {
    text-decoration: none;
    font-size:18px;
    color: rgba(255,255,255,1);
    margin: 90px auto;
    display: block;
    font-weight: bold;
    border: 2px solid rgba(255,255,255,1);
    width: 18%;
    height: 75px;
    line-height: 75px;
    text-align: center;
    border-radius: 7px;
}
    </style>
        <title>Home</title>
        
    </head>
    <body class="antialiased">
    <div class="header">
        <div class="nav-menu">
            <div class="logo" style="color:#005580;">Stream</div>
            <div class="menu">
                <ul>
                    <li><a href="#" class="active" style="color:#005580;">Homepage</a></li>
                    <li><a href="{{route('about')}}" style="color:#005580;">About us</a></li>
                    <li><a href="{{route('login')}}" style="color:#005580;">EMR</a></li>
                    <li><a href="#" style="color:#005580;">Careers</a></li>
                    <li><a href="{{route('contact')}}" style="color:#005580;">Contact us</a></li>
                </ul>
            </div>
        </div>
        <div class="banner"> 
            <h1 style="color:#005580;"> Data saves lives </h1>
            <p style="color:#005580;">We are transforming healthcare service delivery for millions of underserved people in Africa!</p>
            <a href="#" style="color:#005580;">Read more</a>
        </div>
</div>
  <div class="container">
        <div class="text">
            <h1>OUR PRODUDUCTS</h1>
            <p>Our bulldozer team has put together these amaizing products to ease your health care access</p>
        </div>
        <div class="main">
            <div class="single">
                <i class="fas fa-cloud-download-alt"></i>
                <p>Stream EMR</p>
                <a href="https://streamlinehealth.org/stremline-emr/">More info</a>
            </div>
            <div class="single">
                <i class="fas fa-cogs"></i>
                <p>Stream UBUNTU</p>
                <a href="https://streamlinehealth.org/streamline-ubuntu/">More info</a>
            </div>
            <div class="single">
                <i class="fas fa-wrench"></i>
                <p>Stream Snap</p>
                <a href="https://streamlinehealth.org/stremline-snap/">More info</a>
            </div>
        </div>
        <footer>
            <h1>STREAM</h1>
            <p>Today's healthcare challenges require 
                teams that are committed to doing whatever it takes. All our team members have experienced first hand the challenges in accessing healthcare in rural settings and are dedicating 
                their skills to solving these difficult challenges.  </p>

            <p class="txt"> At Stre@m, we are dedicated to providing with your custom products that meet your specific context.  Contact us! Partner with us. Join us on this mission. </P>
           
                <li><a href="{{route('contact')}}" style="color:#005580;">Contact us</a></li>
          <span> &copy;  design by <b>Not you</b>  | 2024</span>
        </footer>
</div>
              
    </body>
</html>
