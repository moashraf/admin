@extends('main.master')
@section('content')
 
<body class="home page-template page-template-templates page-template-home page-template-templateshome-php page page-id-105">
   <div class="rh_wrap">
      <div id="rh_progress"></div>
      <section class="rh_banner rh_banner__image" style="background-repeat: no-repeat;background-position: center top;background-image: url('../wp-content/uploads/2017/10/banner.jpg'); background-size: cover; ">
         <div class="rh_banner__cover"></div>
         <!-- /.rh_banner__cover -->
         <div class="rh_banner__wrap">
            <h2 class="rh_banner__title"> المشاريع </h2>
            <!-- /.rh_banner__title -->
         </div>
         <!-- /.rh_banner__wrap -->
      </section>
      <!-- /.rh_banner -->
      <section class="rh_section rh_wrap--padding rh_wrap--topPadding ">
         <div class="rh_page">
            <div class="rh_gallery">
               <div class="rh_gallery__wrap isotope">
			   
			   
			   
			   
			   			       @foreach($Products as $Products_val)

                  <div class="rh_gallery__item isotope-item rh_gallery--4-columns for-sale  post-45 property type-property status-publish has-post-thumbnail hentry property-feature-2-stories property-feature-home-theater property-feature-lawn property-feature-marble-floors property-type-single-family property-city-miami property-status-for-sale" >
                     <figure>
                        <div class="media_container">
                                                      <a class="link" href="{{    URL::to('/') . '/all_property/' . $Products_val->id  }}">
                           <img src="{{ asset('/wp-content/themes/realhomes/assets/modern/images/icons/icon-link.svg')}}">
                           </a>
                        </div>
                        <img class="img-border" src="{{ URL::to('/').'/images/'.$Products_val->single_photo}} "  >							
                     </figure>
                     <h5 class="item-title entry-title">
                        <a href="{{    URL::to('/') . '/all_property/' . $Products_val->id  }}"> {{$Products_val->name}}  </a>
                     </h5>
                  </div>
				
   @endforeach

			
			
               </div>
			   
			<center>   {!! $Products->links()  !!}	</center>  

			   
               <!-- /.rh_gallery__wrap isotope -->
            </div>
            <!-- /.rh_gallery -->
         </div>
         <!-- /.rh_page rh_page__main -->
      </section>
   </div>
   <!-- /.rh_wrap -->
   <!-- Start of LiveChat (www.livechatinc.com) code -->
   @endsection