@extends('main.master')
@section('content')
  
   <div class="typography main">
        
            <div class="hero center">
  
  <div class="content-wrap">
    <div class="container">
      <div class="table">
        <div class="table-cell">
          
            <h1>  Select your model !</h1>
           
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

<div class="model-selection" style="    display: block!important;"  >
    <div class="container">        
        <div class="content group">
            <div class="inner">
                
                    <img src="{{ URL::to('/')}}/s3.amazonaws.com/icracked-silverstripe/company-logos/apple-logo.jpg" alt="apple logo" />
                
                
                    <h2>Select your model  !</h2>
                
                
            </div>
            
    
        <ul class="model-selection-grid">
            
                <li>
    <a href="apple-ipad/2.html">2</a>

</li>
            
                <li>
    <a href="apple-ipad/3.html">3</a>

</li>
            
                <li>
    <a href="apple-ipad/4.html">4</a>

</li>
            
                <li>
    <a href="apple-ipad/air.html">Air</a>

</li>
            
                <li>
    <a href="apple-ipad/mini.html">Mini</a>

</li>
            
                <li>
    <a href="apple-ipad/mini-2.html">Mini 2</a>

</li>
            
                <li>
    <a href="apple-ipad/mini-3.html">Mini 3</a>

</li>
            
                <li>
    <a href="apple-ipad/air-2.html">Air 2</a>

</li>
            
                <li>
    <a href="apple-ipad/mini-4.html">Mini 4</a>

</li>
            
                <li>
    <a href="apple-ipad/2017-edition.html">2017</a>

</li>
            
                <li>
    <a href="apple-ipad/pro-9-7.html">Pro 9.7&quot;</a>

</li>
            
                <li>
    <a href="apple-ipad/pro-12-9.html">Pro 12.9&quot;</a>

</li>
            
        </ul>
    

            
             
        </div>
        
            <div class="picture">                
                <img src="{{ URL::to('/')}}/s3.amazonaws.com/icracked-silverstripe/model-selection-image/_resampled/FitWyIzMjAiLCI0MzAiXQ/ipad-device.jpg" alt="ipad device" />
            </div>
        
    </div>
</div>




 
</div>

        

        
   @endsection
