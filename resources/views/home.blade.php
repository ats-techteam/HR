@extends('layouts.app')

   

@section('content')


<html>
<head>
<title>JOB PORTAL-Webpage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,maximum-scale=1">
<link href="{{url('public/css/design.css')}}"rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}" type="text/css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<style>@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

/* --------------------CSS----------------- */

body {
	
	font: 16px 'Open Sans', sans-serif;
}

.box {
	background: linear-gradient(#526494, #604484);
	margin: 15px auto 0;
	border-radius: 5px;
	width: 1000px;
}

.box__header {
	padding: 15px 25px;
	position: relative;
}

.box__header-title {
	color: white;
	font-size: 18px;
}

.box__body {
	padding: 0 25px;
}




@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);



.section1 {
  width: 100%;
  display: inline-block;
  background: #333;
  height: 50vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}

.footer-distributed{
	background: #666;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Open Sans', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
  font-weight:400;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #222;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
  font-weight:400;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  lightseagreen!important;
	text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}



@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}

#wrap{
	width: 90%;
	max-width: 1100px;
	margin: 50px auto;
}


.columns_2 figure{
   width:49%;
   margin-right:1%;
}
.columns_2 figure:nth-child(2){
	margin-right: 0;
}
.columns_3 figure{
   width:32%;
   margin-right:1%;
}
.columns_3 figure:nth-child(3){
	margin-right: 0;
}
.columns_4 figure{
   width:24%;
   margin-right:1%;
}
.columns_4 figure:nth-child(4){
	margin-right: 0;
}
.columns_5 figure{
   width:19%;
   margin-right:1%;
}
.columns_5 figure:nth-child(5){
	margin-right: 0;
}
#columns figure:hover{
	-webkit-transform: scale(1.1);
	-moz-transform:scale(1.1);
	transform: scale(1.1);

}
#columns:hover figure:not(:hover) {
	opacity: 0.4;
}
div#columns figure {
	display: inline-block;
	background: #FEFEFE;
	border: 2px solid #FAFAFA;
	box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
	margin: 0 0px 15px;
	-webkit-column-break-inside: avoid;
	-moz-column-break-inside: avoid;
	column-break-inside: avoid;
	padding: 15px;
	padding-bottom: 5px;
	background: -webkit-linear-gradient(45deg, #FFF, #F9F9F9);
	opacity: 1;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	-o-transition: all .3s ease;
	transition: all .3s ease;
}

div#columns figure img {
	width: 100%;
	border-bottom: 1px solid #ccc;
	padding-bottom: 15px;
	margin-bottom: 5px;
}

div#columns figure figcaption {
  font-size: .9rem;
  color: #444;
  line-height: 1.5;
  height:60px;
  font-weight:600;
  text-overflow:ellipsis;
}

a.button{
  padding:10px;
  background:green;
  margin:10px;
  display:block;
  text-align:center;
  color:#fff;
  transition:all 1s linear;
  text-decoration:none;
  text-shadow:1px 1px 3px rgba(0,0,0,0.3);
  border-radius:3px;
  border-bottom:3px solid green;
  box-shadow:1px 1px 3px rgba(0,0,0,0.3);
}
a.button:hover{
  background:green;
  border-bottom:3px solid green;
  color:#f1f2f3;
}
@media screen and (max-width: 960px) { 
  #columns figure { width: 24%; }
}
@media screen and (max-width: 767px) {
  #columns figure { width:32%;}
}
@media screen and (max-width: 600px) {
  #columns figure { width: 49%;}
}
@media screen and (max-width: 500px) {
  #columns figure { width: 100%;}
}

@import url(https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,700);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css);



.stats {
  text-align: center;
  font-size: 35px;
  font-weight: 700;
  font-family: 'Montserrat', sans-serif;

}

.stats .fa {
  color: grey!important;
  font-size: 60px;
}


</style>

</head>

<body style="background-color:;">
<div class="container">
 <section>   
<div class="banner text-center" style="background-image:url('{{asset('assets/images/jobportal.jpg')}}');width:100%;height:500px;">
        <h1 style="padding-top:180px;font-size:50px;letter-spacing:5px;font-weight:200;color:white!important;">HUNT YOUR JOB</h1>
        <p style="color:white;">Dream job is here!</p>
    </div>
</section>
<br>
<br>
<ul class="nav nav-tabs" role="tablist" >
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#"><b>FIND A JOB</b></a>
    </li>
</ul>
<div class="search-job text-center" style="padding:50px,0;">
<input type="text" class="form-control" placeholder="Search keyword"style="max-width:300px;display:inline-flex;margin:10px,5px;border-radius:0;box-shadow:none;border:none;border:1px solid green;">
<input type="text" class="form-control" placeholder="Company"style="max-width:300px;display:inline-flex;margin:10px,5px;border-radius:0;box-shadow:none;border:none;border:1px solid green;">
<input type="text" class="form-control" placeholder="Location"style="max-width:300px;display:inline-flex;margin:10px,5px;border-radius:0;box-shadow:none;border:none;border:1px solid green;">

<input type="button" class="btn btn-success" value="Search">
</div>
</div>
<br>
<div class="container text-center">
  <h1>Job Categories</h1>
  <br>
<button style="width:200px;height:200px;border:2px solid green;">Software Developer</button>
<button style="width:200px;height:200px;border:2px solid green;">Java professional</button>
<button style="width:200px;height:200px;border:2px solid green;">.Net</button>
<button style="width:200px;height:200px;border:2px solid green;">Big Data</button>
<button style="width:200px;height:200px;border:2px solid green;">Big Data</button>
</div>
<br>
<section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
<h1 style="text-align:center;">JobPortal Site Stats</h1>
<br><br>
	<div class="container" style="border:2px solid green;">
    
		<div class="row">

			<div class="col-lg-3 stats">
				<i class="fa fa-code" aria-hidden="true"></i>
				<div class="counting">50</div>
				<h5>Jobs Posted </h5>
			</div>

			<div class="col-lg-3 stats">
				<i class="fa fa-check" aria-hidden="true"></i>
				<div class="counting">70</div>
				<h5>Jobs Filled</h5>
			</div>

			<div class="col-lg-3 stats">
				<i class="fa fa-user" aria-hidden="true"></i>
				<div class="counting">80</div>
				<h5>Companies</h5>
			</div>

			<div class="col-lg-3 stats">
				<i class="fa fa-coffee" aria-hidden="true"></i>
				<div class="counting">92</div>
				<h5>Members</h5>
			</div>
  </div>
</div>
</section>

<section>
 
  <div id="wrap">
    <h1 style="text-align:center;">Recent Jobs</h1><br>
	<div id="columns" class="columns_4">
  
  <figure>
    <figcaption>Web Designer/Developer</figcaption>
  <a class="button" href="#">Apply Now</a>
	</figure>
	
	<figure>
    <figcaption>C Developer(senior)C.Net</figcaption>
   <a class="button" href="#">Apply Now</a>
	</figure>
	
  <figure>
    <figcaption>Application Developer For Android</figcaption>
  <a class="button" href="#">Apply Now</a>
	</figure>
  
	<figure>
    <figcaption>Front-End Developer</figcaption>
<a class="button" href="#">Apply Now</a>
  </figure>
  
  <figure>
    <figcaption>ReactJS Developer</figcaption>
<a class="button" href="#">Apply Now</a>
  </figure>
  </div>
  </div>

<div id="wrap" class="container text-center">
    <h1>Featured Jobs</h1><br>
	<div id="columns" class="columns_4">
  
  <figure>

  <figcaption><b>Web Designer/Developer</b></figcaption>
  <p>[Posted on jan 20,2020.]</p>
  <p>Job Details You as a Web Developer will be responsible for 1) Develop new-facing features 2)build reusable and your own design.</p>
  <a href="#">Read More..</a>
  </figure>
	
	<figure>
    <figcaption><b>C Developer(senior)C.Net</b></figcaption>
    <p>[Posted on feb 10,2020.]</p>
  <p>Job Details You as a C Developer will be responsible for 1) Develop new features 2)Identify bottlenecks and bugs.</p>
  <a href="#">Read More..</a>
   </figure>
	
  <figure>
    <figcaption>JAVA/J2EE Developers</figcaption>
    <p>[Posted on mar 15,2020.]</p>
    <p>1)Core,Java, Collection framework,Oops concept 2)j2ee,XML,JSON,JAVA script,JQuery,JSTL,Spring,<br>Servlet,REST and SOAP.</p>
  <a href="#">Read More..</a>
  </figure>
  
  <figure>
    <figcaption>JAVA/J2EE Developers</figcaption>
    <p>[Posted on mar 15,2020.]</p>
    <p>1)Core,Java, Collection framework,Oops concept 2)j2ee,XML,JSON,JAVA script,JQuery,JSTL,Spring,<br>Servlet,REST and SOAP.</p>
  <a href="#">Read More..</a>
	</figure>
  
</div>
</div>
	
</section>

<br>
<div class="section1">
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Pricing</a>
				
					<a href="#">About</a>
					
					<a href="#">Faq</a>
					
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name © 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1.555.555.5555</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

    </footer>
</div>
  </body>
</html>
@endsection