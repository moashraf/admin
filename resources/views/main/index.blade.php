@extends('main.master')
@section('content')
<div class="typography main">
   <div class="hero center">
      <div class="content-wrap">
         <div class="container">
            <div class="table">
               <div class="table-cell">
                  <h1>We'll repair your iPhone, iPad or Galaxy wherever and whenever you want. Seriously.</h1>
                  <p>You can relax. We've got this!</p>
                  <div class="button-wrap">
                     <a class="secondary-button repair-button" href="{{ URL::to('/').'/all_property/' }}">repair my device <img src="themes/icracked/images/repair-icon.png" alt="repair icon" /></a>
                  </div>
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
   <div class="home-steps container">
      <div class="content">
         <ol>
            <li class="step step-content first">
               <strong>Step 1</strong><br/>
               <p>We specialize in iPhone screen repairs and so much more. All of our iPhone repairs and other fixes come fully guaranteed for life</p>
            </li>
            <li class="step step-content ">
               <strong>Step 2</strong><br/>
               <p>We&#039;ll come to meet you and fix your cell phone, tablet device our provide an expert iPhone screen repair. We&#039;ll be there. Any place, any time!</p>
            </li>
            <li class="step step-content last">
               <strong>Step 3</strong><br/>
               <p>In under 60 minutes, you&#039;ll get your iPhone screen repaired perfectly. You&#039;ll be back online, like it&#039;s a brand new device Too easy! </p>
            </li>
         </ol>
      </div>
      <div class="icons">
         <div class="step step-icon first">
            <img src="../s3.amazonaws.com/icracked-silverstripe/icons/phone-icon.jpg" alt="phone icon" />
         </div>
         <div class="step step-icon ">
            <img src="../s3.amazonaws.com/icracked-silverstripe/icons/car-icon.jpg" alt="car icon" />
         </div>
         <div class="step step-icon last">
            <img src="../s3.amazonaws.com/icracked-silverstripe/icons/repair-icon.png" alt="repair icon" />
         </div>
      </div>
   </div>
   <div class="perks panel has-bg" style="     padding: 0;      padding-bottom: 0; ">
      <div class="container group">
         <div class="media-contact panel" style="    background-color: #ffffff00;">
            <div class="container">
               <div class="inner group">
                  <div class="col-1">
                     <h4 style="font-size: 24px; line-height: 32px; height: 54px;">It only takes 2 minutes to get started.</h4>
                  </div>
                  <div class="col-2">
                     <a class="button" href="#">   Contact Us  </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="quote group bg">
      <div class="container">
         <div class="group">
            <h2>  about Us </h2>
         </div>
         <img src="{{ URL::to('/')}}/themes/icracked/images/icracked-logo.png"   />
         <div class="content">
            <h6>fhhhhhhhhhhhhh
               Visit Support Center
               Visit our Support Center for general help, FAQ's, troubleshooting, and more.
               Visit Support Center
               Visit our Support Center for general help, FAQ's, troubleshooting, and more.
               Visit Support Center
               Visit our Support Center for general help, FAQ's, troubleshooting, and more.
               Visit Support Center
               Visit our Support Center for general help, FAQ's, troubleshooting, and more.
            </h6>
            <br><br> 
         </div>
      </div>
   </div>
   <div class="icracked-explode-module">
      <div class="module-inner">
         <div class="header">
            <div class="header-icon"></div>
            <h2>ff Learn about the issues we fix.</h2>
            <h3>Click your issue to learn more.</h3>
         </div>
         <div class="main-content">
            <div class="buttons-holder">
               <div class="buttons">
                  <div class="button cracked_screen" data-id="0">
                     <div class="icon"></div>
                     <div class="label">Cracked<br/>screen</div>
                  </div>
                  <div class="button charging_port" data-id="1">
                     <div class="icon"> </div>
                     <div class="label">Charging<br/>port</div>
                  </div>
                  <div class="button microphone" data-id="2">
                     <div class="icon"></div>
                     <div class="label">Microphone</div>
                  </div>
                  <div class="button hp_port" data-id="3">
                     <div class="icon"> </div>
                     <div class="label">HP port</div>
                  </div>
                  <!--                    <div class="button water_damage" data-id="4">
                     <div class="icon"> </div>
                     <div class="label">Water<br/>damage</div>
                     </div>-->
                  <div class="button home_button" data-id="5">
                     <div class="icon"></div>
                     <div class="label">Home<br/>button</div>
                  </div>
                  <div class="button ear_speaker" data-id="6">
                     <div class="icon"> </div>
                     <div class="label">Ear<br/>speaker</div>
                  </div>
                  <div class="button side_button" data-id="7">
                     <div class="icon"> </div>
                     <div class="label">Side<br/>button</div>
                  </div>
                  <div class="button camera" data-id="8">
                     <div class="icon"> </div>
                     <div class="label">Front/rear<br/>camera</div>
                  </div>
                  <div class="button power_button" data-id="9">
                     <div class="icon"> </div>
                     <div class="label">Power<br/>button</div>
                  </div>
                  <div class="button loud_speaker" data-id="10">
                     <div class="icon"></div>
                     <div class="label">Loud<br/>speaker</div>
                  </div>
                  <div class="button battery" data-id="11">
                     <div class="icon"></div>
                     <div class="label">Battery</div>
                  </div>
               </div>
            </div>
            <div class="phone-holder">
               <div class="layers-holder">
                  <div class="layers">
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                     <div class="layer"></div>
                  </div>
               </div>
               <div class="infobox-holder">
                  <div class="infobox">
                     <div class="border"></div>
                     <div class="infotext">
                        <div class="feature">Ear Speaker</div>
                        <div class="description">If you hear fuzzy/cracking sound, if sound fades in and out, or if there is no sound at all.</div>
                     </div>
                  </div>
                  <div class="icon">
                     <div class="icon-inner"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="back-button"><img src="themes/icracked/images/explode-module/4up_icon.png"/><span>View fixes</span></div>
      </div>
   </div>
   <div class="choose-device">
      <div class="container">
         <h2>   service  </h2>
         <h3>Click your device to choose your model.</h3>
         <div class="devices">
            <div class="device ipod first v-align">
               <span class="helper"></span>                    
               <a href="index.html#" data-id="17" data-device-name="iPhone">
                  <p class="small-logo"><img src="themes/icracked/images/apple-logo-small.png" alt="apple logo" /></p>
                  <img src="themes/icracked/images/iphone.png" alt="iphone" />
                  <span class="logo"><img src="themes/icracked/images/iphone-text-logo.png" alt=""/></span>
                  <span class="hover">Choose this device</span>
                  <p>iPhone</p>
               </a>
            </div>
            <div class="device ipad v-align">
               <span class="helper"></span>                    
               <a href="index.html#" data-id="21" data-device-name="iPad">
                  <p class="small-logo"><img class="" src="themes/icracked/images/apple-logo-small.png" alt="apple logo" /></p>
                  <img src="themes/icracked/images/ipad.png" alt="ipad" />
                  <span class="logo"><img src="themes/icracked/images/ipad-text-logo.png" alt=""/></span>
                  <span class="hover">Choose this device</span>
                  <p>iPad</p>
               </a>
            </div>
            <div class="device samsung last v-align">
               <span class="helper"></span>                    
               <a href="index.html#" data-id="23" data-device-name="Samsung">
                  <p class="small-logo"><img class="" src="themes/icracked/images/samsung-logo-small.png" alt="samsung logo" /></p>
                  <img src="images/545-2.png" alt="samsung galaxy" />
                  <span class="logo"><img src="themes/icracked/images/samsung-text-logo.png" alt=""/></span>
                  <span class="hover">Choose this device</span>
                  <p>Samsung</p>
               </a>
            </div>
         </div>
      </div>
      <div id="model-selection-17" style="display: none;">
         <ul class="model-selection-grid">
            <li>
               <a href="device-repair/apple-iphone/7-plus.html">7 Pluseeeee</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/7.html">7</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/se.html">SE</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/6s-plus.html">6s Plus</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/6s.html">6s</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/6-plus.html">6 Plus</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/6.html">6</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/5s.html">5s</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/5c.html">5c</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/5.html">5</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/4s.html">4s</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/8.html">8</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/8-plus.html">8 Plus</a>
            </li>
            <li>
               <a href="device-repair/apple-iphone/x.html">X</a>
            </li>
         </ul>
         <div class="fancy-select-wrap">
            <select name="SelectModel" class="dropdown fancy device-selector nolabel" id="SelectModel">
               <option value="" selected="selected">Select your iPhone</option>
               <option value="/device-repair/apple-iphone/7-plus">7 Plus</option>
               <option value="/device-repair/apple-iphone/7">7</option>
               <option value="/device-repair/apple-iphone/se">SE</option>
               <option value="/device-repair/apple-iphone/6s-plus">6s Plus</option>
               <option value="/device-repair/apple-iphone/6s">6s</option>
               <option value="/device-repair/apple-iphone/6-plus">6 Plus</option>
               <option value="/device-repair/apple-iphone/6">6</option>
               <option value="/device-repair/apple-iphone/5s">5s</option>
               <option value="/device-repair/apple-iphone/5c">5c</option>
               <option value="/device-repair/apple-iphone/5">5</option>
               <option value="/device-repair/apple-iphone/4s">4s</option>
               <option value="/device-repair/apple-iphone/8">8</option>
               <option value="/device-repair/apple-iphone/8-plus">8 Plus</option>
               <option value="/device-repair/apple-iphone/x">X</option>
            </select>
         </div>
         <div class="picture">
            <img src="../s3.amazonaws.com/icracked-silverstripe/model-selection-image/_resampled/ScaleWidthWyIzMjAiXQ/iphone-device.jpg" alt="iphone device" />
         </div>
      </div>
      <div id="model-selection-21" style="display: none;">
         <ul class="model-selection-grid">
            <li>
               <a href="device-repair/apple-ipad/2.html">2</a>
            </li>
            <li>
               <a href="device-repair/apple-ipad/3.html">3</a>
            </li>
            <li>
               <a href="device-repair/apple-ipad/4.html">4</a>
            </li>
            <li>
               <a href="device-repair/apple-ipad/air.html">Air</a>
            </li>
            <li>
               <a href="device-repair/apple-ipad/mini.html">Mini</a>
            </li>
            <li>
               <a href="device-repair/apple-ipad/mini-2.html">Mini 2</a>
            </li>
            <li>
               <a href="device-repair/apple-ipad/mini-3.html">Mini 3</a>
            </li>
            <li>
               <a href="device-repair/apple-ipad/air-2.html">Air 2</a>
            </li>
            <li>
               <a href="device-repair/apple-ipad/mini-4.html">Mini 4</a>
            </li>
            <li>
               <a href="device-repair/apple-ipad/2017-edition.html">2017</a>
            </li>
            <li>
               <a href="device-repair/apple-ipad/pro-9-7.html">Pro 9.7&quot;</a>
            </li>
            <li>
               <a href="device-repair/apple-ipad/pro-12-9.html">Pro 12.9&quot;</a>
            </li>
         </ul>
         <div class="fancy-select-wrap">
            <select name="SelectModel" class="dropdown fancy device-selector nolabel" id="SelectModel">
               <option value="" selected="selected">Select your iPad</option>
               <option value="/device-repair/apple-ipad/2">2</option>
               <option value="/device-repair/apple-ipad/3">3</option>
               <option value="/device-repair/apple-ipad/4">4</option>
               <option value="/device-repair/apple-ipad/air">Air</option>
               <option value="/device-repair/apple-ipad/mini">Mini</option>
               <option value="/device-repair/apple-ipad/mini-2">Mini 2</option>
               <option value="/device-repair/apple-ipad/mini-3">Mini 3</option>
               <option value="/device-repair/apple-ipad/air-2">Air 2</option>
               <option value="/device-repair/apple-ipad/mini-4">Mini 4</option>
               <option value="/device-repair/apple-ipad/2017-edition">2017</option>
               <option value="/device-repair/apple-ipad/pro-9-7">Pro 9.7&quot;</option>
               <option value="/device-repair/apple-ipad/pro-12-9">Pro 12.9&quot;</option>
            </select>
         </div>
         <div class="picture">
            <img src="../s3.amazonaws.com/icracked-silverstripe/model-selection-image/ipad-device.jpg" alt="ipad device" />
         </div>
      </div>
      <div id="model-selection-23" style="display: none;">
         <ul class="model-selection-grid">
            <li>
               <a href="device-repair/samsung-galaxy/note-4.html">Note 4</a>
            </li>
            <li>
               <a href="device-repair/samsung-galaxy/note-5.html">Note 5</a>
            </li>
            <li>
               <a href="device-repair/samsung-galaxy/s5.html">S5</a>
            </li>
            <li>
               <a href="device-repair/samsung-galaxy/s6.html">S6</a>
            </li>
            <li>
               <a href="device-repair/samsung-galaxy/s6-edge.html">S6 Edge</a>
            </li>
            <li>
               <a href="device-repair/samsung-galaxy/note-8.html">Note 8</a>
            </li>
            <li>
               <a href="device-repair/samsung-galaxy/s7.html">S7</a>
            </li>
            <li>
               <a href="device-repair/samsung-galaxy/s7-edge.html">S7 Edge</a>
            </li>
            <li>
               <a href="device-repair/samsung-galaxy/s8.html">S8</a>
            </li>
            <li>
               <a href="device-repair/samsung-galaxy/s8-plus.html">S8+</a>
            </li>
            <li>
               <a href="device-repair/samsung-galaxy/s6-edge-plus.html">S6 Edge+</a>
            </li>
         </ul>
         <div class="fancy-select-wrap">
            <select name="SelectModel" class="dropdown fancy device-selector nolabel" id="SelectModel">
               <option value="" selected="selected">Select your Galaxy</option>
               <option value="/device-repair/samsung-galaxy/note-4">Note 4</option>
               <option value="/device-repair/samsung-galaxy/note-5">Note 5</option>
               <option value="/device-repair/samsung-galaxy/s5">S5</option>
               <option value="/device-repair/samsung-galaxy/s6">S6</option>
               <option value="/device-repair/samsung-galaxy/s6-edge">S6 Edge</option>
               <option value="/device-repair/samsung-galaxy/note-8">Note 8</option>
               <option value="/device-repair/samsung-galaxy/s7">S7</option>
               <option value="/device-repair/samsung-galaxy/s7-edge">S7 Edge</option>
               <option value="/device-repair/samsung-galaxy/s8">S8</option>
               <option value="/device-repair/samsung-galaxy/s8-plus">S8+</option>
               <option value="/device-repair/samsung-galaxy/s6-edge-plus">S6 Edge+</option>
            </select>
         </div>
         <div class="picture">
            <img src="../s3.amazonaws.com/icracked-silverstripe/model-selection-image/galaxy-device.jpg" alt="galaxy device" />
         </div>
      </div>
   </div>
</div>
@endsection