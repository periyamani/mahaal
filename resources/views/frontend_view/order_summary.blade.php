
@extends('layouts.frontNew')
@section('pagestyles')

<link rel="stylesheet" type="text/css" href="admin/vendor/style.css">
<link rel="stylesheet" href="https://cdn.korzh.com/metroui/v4.5.1/css/metro-all.min.css">
    <style>
    .fusion-columns {
    margin: 15px -15px !important;
    }
    .cat{
  margin: 4px;
  background-color: #d1af62;
  border-radius: 4px;
  border: 1px solid #fff;
  overflow: hidden;
  float: left;
  margin: 15px 10px 4px 13px;
}
.time1-2-p{
    background-color: #9a9a9a !important;
}
.time2-3-p{
    background-color: #9a9a9a !important;
}
.time3-4-p{
    background-color: #9a9a9a !important;
    
}

.cat label {
  float: left; 
  line-height: 3.0em;
  width: 8.0em; 
  height: 3.0em;
  cursor: pointer;
}

.cat label span {
  text-align: center;
  display: block;
}

.cat label input {
  position: absolute;
  display: none;
  color: #fff !important;
}
.cat label input + span{color: #fff;}

.cat input:checked + span {
    color: #ffffff;
    text-shadow: 0 0  6px rgba(0, 0, 0, 0.8);
}



.time9-10-a input:checked + span{background-color: #9a9a9a;}
.time10-11-a input:checked + span{background-color: #9a9a9a;}
.time11-12-a input:checked + span{background-color: #9a9a9a;}
.time12-1-p input:checked + span{background-color: #9a9a9a;}
.time1-2-p input:checked + span{background-color: #9a9a9a;}
.time2-3-p input:checked + span{background-color: #9a9a9a;}
.time3-4-p input:checked + span{background-color: #9a9a9a;}
.time4-5-p input:checked + span{background-color: #9a9a9a;}
.time5-6-p input:checked + span{background-color: #9a9a9a;}
.time6-7-p input:checked + span{background-color: #9a9a9a;}
.time7-8-p input:checked + span{background-color: #9a9a9a;}
.time8-9-p input:checked + span{background-color: #9a9a9a;}
.time9-10-p input:checked + span{background-color: #9a9a9a;}

a:not([class]) {
    position: relative;
    color: #747474 !important;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.fusion-footer-widget-area .widget a:hover {
    color: #a19060 !important;
    text-decoration-line: unset !important;
}
table {
    font-family: 'SFUIDisplay';
  border-collapse: collapse;
  width: 100%;
}

td, th {
  
  text-align: left;
  padding: 8px;
  
}
.logo-top{
    text-align: center;
}
.logo-txt {
    margin-top: 0 !important;
    margin-bottom: 3px !important;
    font-size: 92% !important;
}
.X{
  margin: auto;
  padding: 1% 2%;
  max-width: 1440px;
  border-radius: 5px;

}

.book-li{
  color: #2c3e50;
  font-size: 18px;
  line-height: 30px;
  text-align: justify;
  letter-spacing: 1px;
  font-family: 'Raleway', serif;
}
/*SG = style grid*/
.SG{
  margin: 0;
  padding: 0;
  text-align: center;
}
.SG .sgLi{
  min-width: 44%;
  margin: 2% .35%;
  display: inline-flex;
  box-shadow: 0 2px 20px rgb(0 0 0 / 20%);
}
.SG .sgLi:hover{
  box-shadow:0 5px 10px rgba(0,0,0,.15);}
.SG .box{
  width: 100%;
  height: 100vh;
  padding: 6% 18% 10px 1px;
  background: #fff;
  min-height: 80px;
    max-height: 80px;
  box-sizing: border-box;
}

.s18 li:before{
  content: '';
  width: 20px;
  height: 20px;
  margin-right: 15px;
  display: inline-block;
  background: url(//goo.gl/lcPSVD);
  background-position: 50%;
}
.s19{list-style: none;}
.s19 li:before{
  content: '\f0a9';
  margin-right: 15px;
  font-family: FontAwesome;
}
.text-book {
    margin-left: 18% !important;
    font-size: 16px !important;
    line-height: 24px !important;
}
/* responsive grid*/
@media (max-width: 970px){
  .SG .sgLi{width: 180px;}}
@media (max-width: 425px){
  .SG .sgLi{width: 100%;}
}
@media (min-width: 576px) {
  .modal-dialog {
    max-width: 400px;
  }
  .modal-dialog .modal-content {
    padding: 1rem;
  }
}
 
    
    </style>

@stop
@section('content')
<!--FACEBOOK Whatsapp-->
<meta property="og:title" content="Aisshwarya Banquet Hall, Pune">
<meta property="og:description" content="A one stop destination for all your special occasions of life, spread across 15000sq ft and 35ft high ceiling, Aisshwarya Banquet hall can accommodate 1200 guests, we also offer outdoor venues for more elaborate, themed events besides world-class banqueting and catering solutions.">
<meta property="og:image" itemprop="image" content="https://aisshwaryabanquethall.com/wp-content/uploads/2020/03/Aisshwarya-Banquet-logo-svg-150x150ppf.svg">
<meta property="og:url" content="https://aisshwaryabanquethall.com/"></head>
<body class="page-template page-template-100-width page-template-100-width-php page page-id-913 fusion-image-hovers fusion-pagination-sizing fusion-button_size-large fusion-button_type-flat fusion-button_span-no avada-image-rollover-circle-yes avada-image-rollover-yes avada-image-rollover-direction-center_vertical fusion-body ltr fusion-sticky-header fusion-disable-outline fusion-sub-menu-fade mobile-logo-pos-left layout-wide-mode avada-has-boxed-modal-shadow-none layout-scroll-offset-full avada-has-zero-margin-offset-top fusion-top-header menu-text-align-center mobile-menu-design-modern fusion-show-pagination-text fusion-header-layout-v1 avada-responsive avada-footer-fx-none avada-menu-highlight-style-arrow fusion-search-form-classic fusion-main-menu-search-overlay fusion-avatar-square avada-sticky-shrinkage avada-dropdown-styles avada-blog-layout-large avada-blog-archive-layout-grid avada-header-shadow-no avada-menu-icon-position-left avada-has-megamenu-shadow avada-has-mainmenu-dropdown-divider avada-has-header-100-width avada-has-pagetitle-bg-full avada-has-100-footer avada-has-breadcrumb-mobile-hidden avada-has-titlebar-hide avada-social-full-transparent avada-has-pagination-padding avada-flyout-menu-direction-fade avada-ec-views-v1">
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
<div id="boxed-wrapper">
<div class="fusion-sides-frame"></div>
<div id="wrapper" class="fusion-wrapper">
<div id="home" style="position:relative;top:-1px;"></div>


<div id="sliders-container">
<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.4.8 fullwidth mode -->
<div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
<ul>	<!-- SLIDE  -->
<li data-index="rs-9" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://aisshwaryabanquethall.com/wp-content/uploads/2018/11/main-2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
<!-- MAIN IMAGE -->
<img src="../wp-content/uploads/2018/11/main-2.jpg" alt="" title="main-2" width="1240" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina="">
<!-- LAYERS -->
</li>
<!-- SLIDE  -->
<li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://aisshwaryabanquethall.com/wp-content/uploads/2018/11/main-3-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
<!-- MAIN IMAGE -->
<img src="../wp-content/uploads/2018/11/main-3.jpg" alt="" title="main-3" width="1240" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina="">
<!-- LAYERS -->
</li>
<!-- SLIDE  -->
<li data-index="rs-12" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="https://aisshwaryabanquethall.com/wp-content/uploads/2018/11/main-6-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
<!-- MAIN IMAGE -->
<img src="../wp-content/uploads/2018/11/main-6.jpg" alt="" title="main-6" width="1240" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina="">
<!-- LAYERS -->
</li>
</ul>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
if(htmlDiv) {
htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
}else{
var htmlDiv = document.createElement("div");
htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
}
</script>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
if(htmlDiv) {
htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
}else{
var htmlDiv = document.createElement("div");
htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
}
</script>
<script type="text/javascript">
if (setREVStartSize!==undefined) setREVStartSize(
{c: '#rev_slider_2_1', gridwidth: [1240], gridheight: [300], sliderLayout: 'fullwidth'});
var revapi2,
tpj;	
(function() {			
if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();	
function onLoad() {				
if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
if(tpj("#rev_slider_2_1").revolution == undefined){
revslider_showDoubleJqueryError("#rev_slider_2_1");
}else{
revapi2 = tpj("#rev_slider_2_1").show().revolution({
sliderType:"standard",
jsFileLocation:"//aisshwaryabanquethall.com/wp-content/plugins/revslider/public/assets/js/",
sliderLayout:"fullwidth",
dottedOverlay:"none",
delay:9000,
navigation: {
keyboardNavigation:"off",
keyboard_direction: "horizontal",
mouseScrollNavigation:"off",
mouseScrollReverse:"default",
onHoverStop:"off",
bullets: {
enable:true,
hide_onmobile:false,
style:"hesperiden",
hide_onleave:false,
direction:"horizontal",
h_align:"center",
v_align:"bottom",
h_offset:0,
v_offset:20,
space:5,
tmp:''
}
},
visibilityLevels:[1240,1024,778,480],
gridwidth:1240,
gridheight:300,
lazyType:"none",
scrolleffect: {
blur:"on",
},
parallax: {
type:"mouse",
origo:"enterpoint",
speed:400,
speedbg:0,
speedls:0,
levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
},
shadow:0,
spinner:"spinner0",
stopLoop:"off",
stopAfterLoops:-1,
stopAtSlide:-1,
shuffle:"off",
autoHeight:"off",
disableProgressBar:"on",
hideThumbsOnMobile:"off",
hideSliderAtLimit:0,
hideCaptionAtLimit:0,
hideAllCaptionAtLilmit:0,
debugMode:false,
fallbacks: {
simplifyAll:"off",
nextSlideOnWindowFocus:"off",
disableFocusListener:false,
}
});
}; /* END OF revapi call */
}; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
</script>
<script>
var htmlDivCss = unescape(".hesperiden.tp-bullets%20%7B%0A%7D%0A.hesperiden.tp-bullets%3Abefore%20%7B%0A%09content%3A%22%20%22%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%20%20%20border-radius%3A8px%3B%0A%20%20%0A%7D%0A.hesperiden%20.tp-bullet%20%7B%0A%09width%3A12px%3B%0A%09height%3A12px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%20rgb%28153%2C%20153%2C%20153%29%3B%20%2F%2A%20old%20browsers%20%2A%2F%0A%20%20%20%20background%3A%20-moz-linear-gradient%28top%2C%20%20rgb%28153%2C%20153%2C%20153%29%200%25%2C%20rgb%28225%2C%20225%2C%20225%29%20100%25%29%3B%20%2F%2A%20ff3.6%2B%20%2A%2F%0A%20%20%20%20background%3A%20-webkit-linear-gradient%28top%2C%20%20rgb%28153%2C%20153%2C%20153%29%200%25%2Crgb%28225%2C%20225%2C%20225%29%20100%25%29%3B%20%2F%2A%20chrome10%2B%2Csafari5.1%2B%20%2A%2F%0A%20%20%20%20background%3A%20-o-linear-gradient%28top%2C%20%20rgb%28153%2C%20153%2C%20153%29%200%25%2Crgb%28225%2C%20225%2C%20225%29%20100%25%29%3B%20%2F%2A%20opera%2011.10%2B%20%2A%2F%0A%20%20%20%20background%3A%20-ms-linear-gradient%28top%2C%20%20rgb%28153%2C%20153%2C%20153%29%200%25%2Crgb%28225%2C%20225%2C%20225%29%20100%25%29%3B%20%2F%2A%20ie10%2B%20%2A%2F%0A%20%20%20%20background%3A%20linear-gradient%28to%20bottom%2C%20%20rgb%28153%2C%20153%2C%20153%29%200%25%2Crgb%28225%2C%20225%2C%20225%29%20100%25%29%3B%20%2F%2A%20w3c%20%2A%2F%0A%20%20%20%20filter%3A%20progid%3Adximagetransform.microsoft.gradient%28%20%0A%20%20%20%20startcolorstr%3D%22rgb%28153%2C%20153%2C%20153%29%22%2C%20endcolorstr%3D%22rgb%28225%2C%20225%2C%20225%29%22%2Cgradienttype%3D0%20%29%3B%20%2F%2A%20ie6-9%20%2A%2F%0A%09border%3A3px%20solid%20rgb%28229%2C%20229%2C%20229%29%3B%0A%09border-radius%3A50%25%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.hesperiden%20.tp-bullet%3Ahover%2C%0A.hesperiden%20.tp-bullet.selected%20%7B%0A%09background%3Argb%28102%2C%20102%2C%20102%29%3B%0A%7D%0A.hesperiden%20.tp-bullet-image%20%7B%0A%7D%0A.hesperiden%20.tp-bullet-title%20%7B%0A%7D%0A%0A");
var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
if(htmlDiv) {
htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
}
else{
var htmlDiv = document.createElement('div');
htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
}
</script>
</div><!-- END REVOLUTION SLIDER -->		</div>
<main id="main" class="clearfix width-100">
<div class="fusion-row" style="max-width:100%;">
<section id="content" class="full-width">
<div id="post-913" class="post-913 page type-page status-publish hentry">
<span class="entry-title rich-snippet-hidden">Order</span><span class="vcard rich-snippet-hidden"><span class="fn"><a href="../author/admin/index.htm" title="Posts by admin" rel="author">admin</a></span></span><span class="updated rich-snippet-hidden">2020-08-06T18:48:27+05:30</span>						<div class="post-content">
<div class="fusion-fullwidth fullwidth-box fusion-builder-row-1 mass-responsive-section nonhundred-percent-fullwidth non-hundred-percent-height-scrolling" style="background-color: rgba(255,255,255,0);background-position: left top;background-repeat: no-repeat;padding-top:3%;padding-right:30px;padding-bottom:0px;padding-left:30px;margin-bottom: 0px;margin-top: 0px;border-width: 0px 0px 0px 0px;border-color:#eae9e9;border-style:solid;" id="section1"><div class="fusion-builder-row fusion-row"><div class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_1 1_1 fusion-one-full fusion-column-first fusion-column-last mass-intro" style="margin-top:42px;margin-bottom:20px;"><div class="fusion-column-wrapper fusion-flex-column-wrapper-legacy" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;padding: 0px 15% 0px 15%;"><div class="imageframe-align-center"><span class=" fusion-imageframe imageframe-none imageframe-1 hover-type-none"><img width="57" image_height="76" image_id="1565" title="D" src="../wp-content/uploads/2020/06/D-1.png" class="img-responsive wp-image-1565"></span></div><div class="fusion-sep-clear"></div><div class="fusion-separator fusion-full-width-sep" style="margin-left: auto;margin-right: auto;margin-top:5px;margin-bottom:5px;width:100%;"></div><div class="fusion-sep-clear"></div><div class="fusion-text fusion-text-1"><h2 style="text-align: center;">Order Summery</h2>
</div><div class="fusion-sep-clear"></div><div class="fusion-separator" style="margin-left: auto;margin-right: auto;margin-top:0px;margin-bottom:30px;width:100%;max-width:206px;"><div class="fusion-separator-border sep-single sep-solid" style="border-color:#a19060;border-top-width:2px;"></div></div><div class="fusion-sep-clear"></div><div class="fusion-text fusion-text-2" id="getImage">

<div
    class="fusion-column-wrapper fusion-flex-column-wrapper-legacy"
    style="background-position: left top; background-repeat: no-repeat; background-size: cover; background-color: rgb(245, 245, 245); padding-top: 2%;  min-height: 413px; height: auto;">
    <div class="fusion-column-content-centered" style="min-height: 413px; height: auto;  ">
        <div class="fusion-column-content">
            <div class="fusion-text fusion-text-3 logo-top" >
                   <img src="{{URL::asset('assets/AISSHWARYA-logo.png')}}" alt="" srcset="" style="width: 15%;">
            </div>
            <div class="logo-top" style=" font-size: 16px; margin-top: 6px;margin-bottom: -5px;"> 
                <p class="logo-txt">THANKS FOR YOUR ORDER</p>
                <p class="logo-txt"> If you have any questions, Call us +91 75900 75900.</p></div>
            <br>
            <div class="fusion-separator fusion-clearfix" style="float: left; margin-bottom: 30px; width: 100%; ">
                <div class="fusion-separator-border sep-single sep-solid" style="border-color: #a19060; border-top-width: 2px;"></div>
            </div>
<div class="X">
<ul class="SG">
  <li class="sgLi">
    <div class="box">
    
    <ul class="df">
   <div class="fusion-li-item-content " >
                       <b>Booking Date </b> <br />
                        <span id="dateData">10-09-2022</span><br />
                       
                    </div>
    </ul> 
  </div>
 </li> 
  
  
 <li class="sgLi">
    <div class="box">
   <ul class="s1">
   <div class="fusion-li-item-content " >
                            
                    <b>Booking Time </b> <br />
                    <span id="timeData"> 9 AM - 10 AM </span>
                       
                    </div>
   </ul>
  </div>
 </li>
</ul>

</div>
            <!-- <div class="fusion-sep-clear"></div> -->
            
            <div class="fusion-sep-clear"></div>
            
            <ul class="fusion-checklist fusion-checklist-2" style="font-size: 16px; line-height: 23.8px;margin-left: 11%;" id="vendorList">
              <h3>VENDORS</h3>
            </ul>
            <ul class="fusion-checklist fusion-checklist-2" style="font-size: 16px; line-height: 23.8px;margin-left: 11%;" id="vendorList">
              
              
                
            </ul>
            <div class="fusion-sep-clear"></div>
            <div class="fusion-separator fusion-full-width-sep" style="margin-left: auto; margin-right: auto; margin-top: 20px; width: 100%;"></div>
            <div class="fusion-sep-clear"></div>
            <div class="fusion-sep-clear"></div>
           
        </div>
        <input type="hidden" id="bookinggId">
    </div>
    <input type="button" value="Send to Whatsapp" onclick="whatsappsentmsg()" style="background: #b4a57e; color: white; border-radius: 12px; font-size: 20px;">

   
    <br>
    
    <div class="fusion-separator fusion-clearfix" style="float: left; margin-bottom: 30px; width: 100%; ">
                <div class="fusion-separator-border sep-single sep-solid" style="border-color: #a19060; border-top-width: 2px;"></div>
            </div>
            <div class="fusion-sep-clear"></div>
            <div class="logo-top" style=" font-size: 16px; margin-top: 6px;margin-bottom: -5px;"> 
            <section id="text-2" class="fusion-footer-widget-column widget widget_text" style="border-style: solid;border-color:transparent;border-width:0px;"><h4 class="widget-title fusion-responsive-typography-calculated" data-fontsize="15" data-lineheight="22.5px" style="--fontSize:15; line-height: 1.5; --minFontSize:15;">AISSHWARYA BANQUET HALL</h4><div class="textwidget"><ul class="fusion-checklist fusion-checklist-1" style="font-size:14px;line-height:23.8px;">
            <li class="fusion-li-item">
<div class="fusion-li-item-content" >
                <p class="logo-txt">12, 2A, Dalvi Park, <br>Near Shiv shrushti,<br>
Katraj bypass, Ambegaon bk.<br>
Pune – 411046.</p></div>
            <br>


</ul>

<div style="clear:both;"></div></section>																					</div>
    <div class="fusion-clearfix"></div>
    
</div>


<div class="fusion-alert alert custom alert-custom fusion-alert-center wpcf7-response-output fusion-alert-capitalize alert-dismissable" style="border-width:1px;"></div>


</div>
</div>
</section>
<div class="to-top-container to-top-right">
<a href="#" id="toTop" class="fusion-top-top-link">
<span class="screen-reader-text">Go to Top</span>
</a>
</div>		
</div>  <!-- fusion-row -->
</main>  <!-- #main -->

@endsection

@section('pageScript')

<script src="https://cdn.korzh.com/metroui/v4.5.1/js/metro.min.js"></script>

<script>
  ggg();
  function ggg(){
    var myArray = window.location.pathname.split("/");

    jQuery.ajax({
            type: "POST",
            url: "/api/bookingDetails",
            data: {booking_id : myArray[2]},
            dataType: 'json',
            success: function(data) {
             jQuery('#dateData').html(data['booking']['booking_date']);
             jQuery('#timeData').html(data['booking']['booking_time']);
             jQuery('#bookinggId').val(data['booking']['id']);
             
             if(data['vendor'].length > 0){
              jQuery('#vendorList').empty();
                  jQuery.each(data['vendor'], function( index, value ) {
                    jQuery('#vendorList').append('<li class="fusion-li-item book-li"><span style="height: 31.8px;  font-size: 24px; width: 74.8px; margin: 23px 0px 21px 0px; margin-right: 9.8px;" class="icon-wrapper circle-no"><img src="./../gallery/'+value['photo']+'" alt="user image" ></span>'+
                    '<div class="fusion-li-item-content text-book" style="margin-left: 50%;"><div class="d-inline-block align-middle">'+
                    'NAME  :'+value['title']+'<br />'+
                    'AMOUNT : Rs. '+value['amount']+' <br />'+
                    'CATEGORY : '+value['cname']+' <br />'+
                    'CONTACT :'+value['number']+' </div></li>');
                  });
              }
            },
        });
  }


function whatsappsentmsg(){
  var bookId = jQuery('#bookinggId').val();
  jQuery.ajax({
            type: "POST",
            url: "/api/whatsapp",
            data: {booking_id : bookId},
            dataType: 'json',
            success: function(data) {
             
            },
        });
}

</script>

@stop