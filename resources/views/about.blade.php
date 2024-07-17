
<!DOCTYPE html>
<html>
<head>
	<title>About-us</title>
    <style>
        body{
	margin: 0;
	padding: 0;
}
.container{
	width:100%;
	height:auto;
	display: flex;
	align-items: flex-start;
	flex-wrap: wrap;
}
.about{
	width:100%;
	height: 600px;
	background-image: url(https://streamlinehealth.org/wp-content/uploads/2022/12/team.jpg); /*Couldn't link the image so i used linear-gradient background LOL!*/
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
}
.text{
	font-size: 30px;
	color:#fff;
	font-family: sans-serif;
	text-shadow: 0px 15px 12px #000;
}
.line{
	width:200px;
	height: 8px;
	background-color: #2eb82e;
	display: block;
	position: relative;
	border-radius: 5px;
	left:10%;
	box-shadow: 0px 15px 12px 0px #000;
}
.content{
	width:100%;
	height:auto;
	background-color: #2eb82e;
	font-size: 23px;
	font-family: audiowide;
	color:#333;
	line-height: 30px;
	text-align: center;
}
b{
	font-size: 50px;
	color:#000;
	font-weight: 500px;
}
footer{
	width:100%;
	height: auto;
	background-color: #333;
	color: #17ff8d;
	font-size: 23px;
	text-align: center;
	line-height: 50px;
}
    </style>
</head>
<body>
	<div class="container">
		<div class="about">
			<div class="text">
				<h1>About Us</h1>
				<div class="line"></div>
			</div>
		</div>
		<div class="content">
			<p><b>E</b>mpowering you to take control of your well-being is at the 
            heart of everything we do. Our health tech app is designed to be your 
            partner in health, providing you with the tools and resources you need 
            to live a healthier, happier life. With our app, you can track your 
            fitness goals, monitor your health conditions, connect with healthcare 
            professionals, and access educationalresources – all in one 
            place. We believe that information is power, and we're committed to giving you the knowledge you need to make informed decisions about your health.</p>
		</div>
		</div>
		<footer>Copyright &copy; Not you 2024 <a href="{{route('home')}}">Home</a>|<a href="{{route('contact')}}">Contact Us</a></footer>
</body>
</html>
