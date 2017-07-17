<?php



?>
<style type="text/css">
	.w3-center{text-align:center!important}
	.w3-content{max-width: 100%;
    	height: 500px;
    	overflow: hidden;
    	margin: auto;}

	.w3-display-container{position:relative}
	.mySlides{
		position: relative;
		height: 500px;
	}
	.hero-image{
		position: absolute;
		top:0;
		bottom:0;
		left:0;
		right: 0;
		background-color: rgba(51, 51, 51, 0.11);
	}
	.hero-text{
		width: 500px;
    	height: auto;
    	text-align: center;
    	margin: 15% auto;
    	position: relative;
	}
	.hero-button{
		height: auto;
    	width: 30%;
    	border: 1px solid #fff;
    	border-radius: 5px;
    	font-size: 25px;
    	font-weight: 300;
    	color: #fff;
    	background: transparent;
    	margin: 5px;
	}
	.slideShowHeading{
		display: block;
		font-size: 50px;
		color: #fff;
		font-weight: 700;
		width: 100%;
	}
	.slideShowCaption{
		display: block;
		font-size: 30px;
		color: #fff;
		font-weight: 300;
		width: 100%;

	}
	.w3-display-left{position:absolute;top:50%;left:0%;transform:translate(0%,-50%);-ms-transform:translate(-0%,-50%)}
	.w3-display-right{position:absolute;top:50%;right:0%;transform:translate(0%,-50%);-ms-transform:translate(0%,-50%)}

</style>

<div class="w3-content w3-display-container">
	<div class="mySlides">
		

		<img  src=	"https://static.pexels.com/photos/479199/pexels-photo-479199.jpeg" style="width:100%">

		<div class="hero-image">
  			<div class="hero-text">
    		<span class="slideShowHeading">Slide Show Header 1</span>
    		<span class="slideShowCaption">Slide Show Captions</span>
    		<button class="hero-button">Read More</button>
  			</div>
		</div>
	</div>
	<div class="mySlides">
		<img  src=	"https://static.pexels.com/photos/207684/pexels-photo-207684.jpeg" style="width:100%">
		<div class="hero-image">
  			<div class="hero-text">
    		<span class="slideShowHeading">Slide Show Header 2</span>
    		<span class="slideShowCaption">Slide Show Captions</span>
    		<button class="hero-button">Read More</button>
  			</div>
		</div>
	</div>
	<div class="mySlides">
		<img  src=	"https://static.pexels.com/photos/159775/library-la-trobe-study-students-159775.jpeg" style="width:100%">
		<div class="hero-image">
  			<div class="hero-text">
    		<span class="slideShowHeading">Slide Show Header 3</span>
    		<span class="slideShowCaption">Slide Show Captions</span>
    		<button class="hero-button">Read More</button>
  			</div>
		</div>
	</div>
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
