<?php 
use Widgets\imageslider\ImagesSliderHelper;
$imageslider=new ImagesSliderHelper();
$imagesDir=APPDIR.'/Widgets/imageslider/img/';

$images=$imageslider->getImages($imagesDir);
//p($images);
addCSS($widgetBaseURL.'/css/example.css');
addCSS($widgetBaseURL.'/css/font-awesome.min.css');
addCSS($widgetBaseURL.'/css/custom.css');

addJS($widgetBaseURL.'/js/jquery.slides.min.js');
addJS($widgetBaseURL.'/js/custom.js');
?>




  <!-- SlidesJS Required: Start Slides -->
  <div class="container">
    <div id="">
    	This is my new slider
          </div>

  <!-- The container is used to define the width of the slideshow -->
  <div class="container">
    <div id="slides">
    	<?php foreach ($images as $key => $value) { ?>
      <img src="<?php echo $widgetBaseURL; ?>/img/<?php  echo $value;  ?>" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
      	<?php  } ?>
      
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right"></i></a>
    </div>

   <!--  <div id="slides2">
      <img src="img/example-slide-1.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
      <img src="img/example-slide-2.jpg" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/">
      <img src="img/example-slide-3.jpg" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/">
      <img src="img/example-slide-4.jpg" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/">
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right"></i></a>
    </div>

    <div id="slides3">
      <img src="img/example-slide-1.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/">
      <img src="img/example-slide-2.jpg" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/">
      <img src="img/example-slide-3.jpg" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/">
      <img src="img/example-slide-4.jpg" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/">
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right"></i></a>
    </div> -->
  </div>




