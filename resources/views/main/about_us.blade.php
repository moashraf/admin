@extends('main.master')
@section('content')
  
   <div class="typography main">
        
            <div class="hero center">
  
  <div class="content-wrap">
    <div class="container">
      <div class="table">
        <div class="table-cell">
          
            <h1>  About Us  </h1>
           
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


<div class="full-width-panels">
    
        <div class="full-width-panel image-right first last group container  ">
            
            <span><picture>
	 
	<img style="    padding: 50px;
    border-radius: 50%;"  src="../s3.amazonaws.com/icracked-silverstripe/panel-images/_resampled/FitWzk2MCw5NjBd/about-panel-1.jpg" alt="about panel 1">
</picture>
</span>
            
            <div class="content">
                <div class="table">
                    <div class="table-cell">                       
                        <h2>About Us  </h2>
						<p>In 2010, our two founders identified a problem: getting a smartphone fixed was a giant pain, and th
						e choices consumers had were slim. About a year later, their solutioniCrackedwas founded in the 
						heart of Silicon Valley.</p> 
                    </div>
                </div>
            </div>
        </div>
    
</div>

</div>

        

        
   @endsection
