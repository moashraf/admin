@extends('main.master')
@section('content')
 

<div class="typography main">
   <div class="hero center">
      <div class="content-wrap">
         <div class="container">
            <div class="table">
               <div class="table-cell">
                  <h1>Services </h1>
                    
               </div>
            </div>
         </div>
      </div>
      <span class="bg">
         <picture>
            <img src="{{ URL::to('/')}}/images/D-MARQUEES-home.jpg" />
         </picture>
      </span>
      <div class="social-links ">
         <a href="{{  site_settings('facebook')  }}" target="_blank" title="Visit our Facebook page"><i class="fa fa-facebook"></i></a>
         <a href="{{  site_settings('twitter')  }}" target="_blank" title="Visit our Twitter page"><i class="fa fa-twitter"></i></a>
         <a href="{{  site_settings('instagram')  }}" target="_blank" title="Visit our Instagram page"><i class="fa fa-instagram"></i></a>
      </div>
   </div> 
 
 
 
  
  
  
 
 
   <div class="choose-device">
      <div class="container">
	  
	  
	  
         <h2>   service  </h2>
         <h3>Click your device to choose your model.</h3>
		 		 	  
	  
 <div  id ="show_form" class="row  " style=" display: none;    background: white; ">
        
        <div class=" col-sm-4">
		  </div >

        <div class=" col-sm-4">
 
  <form class="form-horizontal" action=" " style="    width: 100%;">
  
  <h2> Contact Us </h2>

  
	  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Issue:</label>
      <div class="col-sm-10">
 <select class="form-control" id="sel1">
                 <option value="  Other   "   > select Issue   </option>
                 <option value=" Broken Screen "   > Broken Screen </option>
                 <option value=" Battery   "   >    Battery </option>
                 <option value=" Charging   "   >    Charging </option>
                 <option value=" Microphone   "   >    Microphone </option>
                 <option value=" HP port   "   >    HP port </option>
                 <option value=" camera   "   >    camera </option>
                 <option value=" speaker   "   >    speaker </option>
                 <option value="   Power button   "   >    Power button </option>
                 <option value=" Water Damage   "   >   Water Damage  </option>
                 <option value=" Won't Turn On   "   >  Won't Turn On   </option>
                 <option value=" Other   "   >   Other  </option>

      </select>      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">color:</label>
      <div class="col-sm-10">
 <select class="form-control" id="sel1" required >
                  <option value="  Other   "   > select color   </option>

        <option value="Silver"   >Silver</option>
        <option value="Gold"   >Gold</option>
        <option value="Space Gray"   >Space Gray</option>
        <option value="Rose Gold"   >Rose Gold</option>
        <option value="Gray"   >Gray</option>
		                 <option value=" Other   "   >   Other  </option>

     
      </select>      </div>
    </div>
	
	
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">name:</label>
      <div class="col-sm-10">
        <input required  type="text" class="form-control inputfigo " id="email" placeholder="Enter name" name="email">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input required  type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="email">phone:</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" id="email" placeholder="Enter phone" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">message:</label>
      <div class="col-sm-10">          
        <input required type="text" class="form-control" id="pwd" placeholder="Enter message" name="pwd">
      </div>
    </div>
     
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">send</button>
		 <br><br>
      </div>
    </div>
  </form>
    </div>
	       <div class=" col-sm-4">
		  </div > 
		  
   <br><br>
</div>	  
	  
	  
	  
	
	
	
	
         <div  id="chos_phone2" class="devices">
		 
		 
		 

		  
					 		  @foreach($Categories_Products_parent as $Categories_Products_val)

		     <div class="device ipod first v-align">
               <span class="helper"></span>                    
               <a href="index.html#" data-id="{!!  $Categories_Products_val->id   !!}" data-device-name="iPhone">
                  <p class="small-logo">
				  <img src="themes/icracked/images/apple-logo-small.png" alt="apple logo" />
				  </p>
                  <img src="{{ URL::to('/').'/images/'.$Categories_Products_val->single_photo}}" alt="iphone" />
                   <span class="hover">Choose this device</span>
                  <p>  {!!  $Categories_Products_val->title   !!}	 </p>
               </a>
            </div>
			  @endforeach
			
           
         </div>
      </div>
	  
	  					 		
  <div id="chos_phone">
  @foreach($Categories_Products_children as $Categories_Products_val)

	  
      <div id="model-selection-{!!  $Categories_Products_val->id   !!}" style="display: none;">
         <ul  id="chos_phone" class="model-selection-grid">
		 
		 	  					 		  @foreach($Categories_Products_val->children as $Categories_Products_val_ca)

            <li>
               <a onclick="myFunction()" href="#show_form">{!!  $Categories_Products_val_ca->title   !!}	 </a>
            </li>
			
			   @endforeach
         </ul>
         <div class="fancy-select-wrap">
            <select name="SelectModel" class="dropdown fancy device-selector nolabel" id="SelectModel">
               <option value="" selected="selected">Select your iPhone</option>
			   
			     @foreach($Categories_Products_val->children as $Categories_Products_val_ca)
               <option value="" selected="selected">Select  </option>
               <option value="{!!  $Categories_Products_val_ca->title   !!}" selected="selected">{!!  $Categories_Products_val_ca->title   !!}  </option>

            
			   @endforeach
            </select>
         </div>
         <div   class="picture">
            <img  id="chos_phone_img"  src=" {{ URL::to('/').'/images/'.$Categories_Products_val->single_photo}} " alt="iphone device" />
         </div>
      </div>
   
	    @endforeach
  
	  
	     </div>
	  
   </div>
</div>

<script>
function myFunction() {
    document.getElementById("chos_phone").style.display = "none";
   // document.getElementById("chos_phone2").style.display = "none";
    document.getElementById("chos_phone_img").style.display = "none";
     document.getElementById("show_form").style.display = "block";
}
</script>
@endsection