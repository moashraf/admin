@extends('main.master')
@section('content')

   <div class="typogra phy main">
        
            <div class="hero center">
  
  <div class="content-wrap">
    <div class="container">
      <div class="table">
        <div class="table-cell">
          
            <h1>  steps  </h1>
           
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
 

<div class="container text-center">    
   <br>
  <div class="row">
  <br><br>
  
    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>


    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>


    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>


    <div class="col-sm-4">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Current Project</p>
    </div>


	
     
  </div>
  <hr>
</div>
  
</div>

        

        
   @endsection
