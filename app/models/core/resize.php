<?php

namespace Models\Core;
use PHPImageWorkshop\ImageWorkshop;

class Resize {

	public static function test() {

	        return "Hi";

		}


	public static function resize($x1, $y1, $x2, $y2, $width, $height, $new_filename) {

            $layer = ImageWorkshop::initFromPath(ROOT.'/public/images/'.$new_filename);
            $x1p = ($x1*100)/$width;
            $y1p = ($y1*100)/$height;
            $w = $x2 - $x1;
            $h = $y2 - $y1;
            $wp = ($w*100)/$width;
            $hp = ($h*100)/$height;
            $layer->cropInPercent($wp, $hp, $x1p, $y1p, 'LT');
            $dirPath = ROOT."/public/images";
            $filename = 'trumb_' . $new_filename;
            $createFolders = false;
            $backgroundColor = null; 
            $imageQuality = 95;
            $layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);

		}


}