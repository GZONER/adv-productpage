
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--link area-->
  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!--font-->
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">

<!--icon-->
<script src="https://kit.fontawesome.com/52491fbefe.js" crossorigin="anonymous"></script>
<!--link area end-->

<title>
GAMEZONE
</title>
<style>
.slides {
overflow-x:auto;
}
::selection{
background:red;
}
.contant {
overflow-x:hidden;
}
::selection{
background:red;
}
body
{

font-family: 'Josefin Sans', sans-serif;}
*{
overflow-x:hidden;
padding:0;
margin:0;
}
section {
font-family: 'Josefin Sans', sans-serif;
font-family: 'Yanone Kaffeesatz', sans-serif;
}
p {
font-size:30px;
}
.icond {
text-decoration:none;
}
footer  {
background:rgba(0,0,0,.8);
}
.navbar-brand {
font-weight:1000;
}
body
{
font-family: 'Josefin Sans', sans-serif;}
*{
padding:0;
margin:0;
}
.card{
box-shadow:0 0 18px #B3B3B3;
}
.product_img{
box-shadow:0 0 18px #B3B3B3;

}
</style>
  </head>
  <body  >
  
<?php include 'header.inc.php'?>
<div class="contant" >
	<div class="ml-3" >
<h5>Product Brand</h5>
<p>Product Name</p>
</div>
<div class="row" >
	<img src="img/icon.jpg" class=" m-auto" >
</div>
	<div class="ml-3" >
<h3 class="text-danger mt-3" >&#8377;<span id="s_p" ></span></h3>
<h5><span class="text-danger" >MRP:</span><del>&#8377;<span id="mrp" ></del></h5>
<h4>Save:<span id="save" class="text-danger" >&#8377;<span id="saving_price" ></span></h4>
<p>FREE Delivery. </p>
<script>
document.getElementById("s_p").innerHTML="99";
document.getElementById("mrp").innerHTML="199";
</script>
<h5 class="text-success" >In Stock</h5>
<br>
</div>
<div class="col-12" >
<a href="#" class=" m-auto btn btn-success w-100"  >Buy Now</a>
</div>
<h5 class="ml-3 mt-5" >Product Feature</h5>
<div class="row" >
<div class="m-auto col-10 " >
		<div class="card m-3">
		<img class="card-img-top mt-2 " src="img/icon.jpg" alt="Card image">
		<div class="card-body">
		<h4 class="card-title">Feature</h4>
		<p class="card-text">Feature detail.</p>
		</div>
		</div>
</div>

<div class="m-auto col-10 " >
		<div class="card m-3">
		<img class="card-img-top mt-2 " src="img/icon.jpg" alt="Card image">
		<div class="card-body">
		<h4 class="card-title">Feature</h4>
		<p class="card-text">Feature detail.</p>
		</div>
		</div>
</div>

<div class="m-auto col-10 " >
		<div class="card m-3">
		<img class="card-img-top mt-2 " src="img/icon.jpg" alt="Card image">
		<div class="card-body">
		<h4 class="card-title">Feature</h4>
		<p class="card-text">Feature detail.</p>
		</div>
		</div>
</div>

<div class="m-auto col-10" >
		<div class="card m-3">
		<img class="card-img-top mt-2 " src="img/icon.jpg" alt="Card image">
		<div class="card-body">
		<h4 class="card-title">Feature</h4>
		<p class="card-text">Feature detail.</p>
		</div>
		</div>
</div>
</div>
<!--slider-->
<div class="slides"  style="display:flex;"  >
<div class="m-auto col-6" >
<div class="card">
<img class="card-img-top p-2 " src="img/icon.jpg" alt="Card image">
<h6 class="card-title ml-2">Feature</h6>
<p class="text-danger ml-2">&#8377;

999</p>
</div>
</div>

<div class="m-auto col-6" >
<div class="card">
<img class="card-img-top p-2 " src="img/icon.jpg" alt="Card image">
<h6 class="card-title ml-2">Feature</h6>
<p class="text-danger ml-2">&#8377;999</p>
</div>
</div>

<div class="m-auto col-6" >
<div class="card">
<img class="card-img-top p-2 " src="img/icon.jpg" alt="Card image">
<h6 class="card-title ml-2">Feature</h6>
<p class="text-danger ml-2">&#8377;999</p>
</div>
</div>

<div class="m-auto col-6" >
<div class="card">
<img class="card-img-top p-2 " src="img/icon.jpg" alt="Card image">
<h6 class="card-title ml-2">Feature</h6>
<p class="text-danger ml-2">&#8377;999</p>
</div>
</div>
</div>
<script>
	var sp= document.getElementById("s_p").innerHTML;
	var mrp = document.getElementById("mrp").innerHTML;
	document.getElementById("saving_price").innerHTML=mrp-sp;
</script>
</div>
	<?php include 'footer.inc.php'?>
</body>