<?php
namespace Craft;

class PThumbVariable {
  public function thumbnail($asset, $width = 400, $height = 400, $force_canvas_size = false, $filetype = "png") {
    return craft()->pThumb_asset->thumbnail($asset, $width, $height, $force_canvas_size, $filetype);
  }
}
