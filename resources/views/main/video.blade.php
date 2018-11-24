@extends('main.master')
@section('content')
  
<body class="page-template page-template-templates page-template-contact page-template-templatescontact-php page page-id-155">




<!-- /#rh_progress -->

	<section class="rh_banner rh_banner__image" style="background-repeat: no-repeat;background-position: center top;background-image: url('../wp-content/uploads/2017/10/banner.jpg'); background-size: cover; ">

		<div class="rh_banner__cover"></div>
		<!-- /.rh_banner__cover -->

		<div class="rh_banner__wrap">

							<h2 class="rh_banner__title"> فيديو     </h2>
				<!-- /.rh_banner__title -->
			
			
		</div>
		<!-- /.rh_banner__wrap -->

	</section>

<section class="rh_section rh_wrap rh_wrap--padding rh_wrap-- ">

	<div class="rh_page">

		
		<div class="rh_page__contact">
 
 
  <!-- /.rh_banner -->
      <section class="rh_section rh_wrap--padding rh_wrap--topPadding">
         <div class="rh_page">
            <div class="rh_gallery">
               <div class="rh_gallery__wrap isotope">
			   
			      @foreach($video as $Products_val)

                  <div class="rh_gallery__item isotope-item rh_gallery--4-columns for-sale  post-45 property type-property status-publish has-post-thumbnail hentry property-feature-2-stories property-feature-home-theater property-feature-lawn property-feature-marble-floors property-type-single-family property-city-miami property-status-for-sale" >
			   <h3 style="    padding: 15px;"> 				  {!!  $Products_val->title   !!}				  </h3>

				  {!!  $Products_val->link   !!}				  
                      
                  </div> 
 

				      @endforeach

				  
				  </div>
               <!-- /.rh_gallery__wrap isotope -->
            </div>
            <!-- /.rh_gallery -->
         </div>
         <!-- /.rh_page rh_page__main -->
      </section>
   

	</div>
		<!-- /.rh_page__contact -->

	</div>
	<!-- /.rh_page -->


</section>	<!-- /.rh_section rh_wrap rh_wrap--padding -->

 
   @endsection
    