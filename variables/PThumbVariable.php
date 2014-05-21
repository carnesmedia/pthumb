<?php
namespace Craft;

class PThumbVariable {
  public function thumbnail($asset, $width = 250, $height = 250, $force_canvas_size = false, $filetype = "png") {
    return craft()->pThumb_asset->thumbnail($asset, $width, $height, $force_canvas_size, $filetype);
  }
}
