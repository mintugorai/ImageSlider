<?php
namespace Widgets\imageslider;
class ImagesSliderHelper
{

	public function getImages($dir)
	{
		$images=scandir($dir);
		unset($images[0],$images[1]);
		return $images;
	}

}