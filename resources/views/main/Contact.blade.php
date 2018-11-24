@extends('main.master')
@section('content')
  
   <div class="typography main">
        
            <div class="hero center">
  
  <div class="content-wrap">
    <div class="container">
      <div class="table">
        <div class="table-cell">
          
            <h1>  Contact Us
 </h1>
           
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


 <div class="container">
    <div class="main-content">
        
		<hr> <table style="width: 100%;">
<tbody>
<tr>
<td style="width: 33.333%;">
<h5>Phone Number</h5>
<p><a class="phone-number" href="tel:1-877-542-8490">1-877-700-0349</a></p>
<p><a class="phone-number" href="tel:1-877-542-8490">1-877-700-0349</a></p>
</td>
<td>
<h5>Email Address</h5>
<p><span>Support</span><br><a href="mailto:support@icracked.com">Support@iCracked.com</a></p>
<p>Media &amp; Press<br><a href="mailto:press@icracked.com">Press@iCracked.com</a></p>
</td>
<td>
<h5>Mailing Address</h5>
<p> 292 Townsend St. San Franc  Francisc Francisc Francisco, CA 94107</p>
</td>
</tr>
</tbody>
</table>
        

        
    </div>
</div>



<div class="container">
        <div class=" col-sm-6">
  <h2>   Contact Us
 </h2>

  <form class="form-horizontal" action=" " style="    width: 100%;">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter name" name="email">
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="email">phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter phone" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">message:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter message" name="pwd">
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
	        <div class=" col-sm-6">

  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13799.47430317685!2d31.656828899999997!3d30.155173249999997!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1539452724717" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
   <br><br>
</div>

</div>

        

        
   @endsection
