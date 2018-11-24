@extends('main.master')
@section('content')
  
<body class="page-template page-template-templates page-template-contact page-template-templatescontact-php page page-id-155">




<!-- /#rh_progress -->

	<section class="rh_banner rh_banner__image" style="background-repeat: no-repeat;background-position: center top;background-image: url('../wp-content/uploads/2017/10/banner.jpg'); background-size: cover; ">

		<div class="rh_banner__cover"></div>
		<!-- /.rh_banner__cover -->

		<div class="rh_banner__wrap">

							<h2 class="rh_banner__title">  صور    </h2>
				<!-- /.rh_banner__title -->
			
			
		</div>
		<!-- /.rh_banner__wrap -->

	</section>

<section class="rh_section rh_wrap rh_wrap--padding rh_wrap--topPadding">

	<div class="rh_page">

		
		<div class="rh_page__contact">
 
	 
 <style>
 

/* The grid: Four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
}

/* Style the images inside the grid */
.column img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 1;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The expanding image container */
.container {
    position: relative;
    display: none;
}

/* Expanding image text */
#imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
</style>

<br>
 <div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img   src=""  id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

 <div class="row">
 
 
 
 
   @foreach($image as $Products_val)

  <div class="column">
  <a href="#expandedImg" >
    <img src="{{ URL::to('/').'/images/'.$Products_val->single_photo}} " alt="Nature" style="width:100%" onclick="myFunction(this);">

</a>	</div>
 
 
    @endforeach

 
</div>



<script>
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.innerHTML = imgs.alt;
    expandImg.parentElement.style.display = "block";
}
</script>



	</div>
		<!-- /.rh_page__contact -->

	</div>
	<!-- /.rh_page -->


</section>	<!-- /.rh_section rh_wrap rh_wrap--padding -->

 
   @endsection
    