# PThumb

PThumb is a Craft plugin that generates thumbnail preview images for PDF documents.
It's easy to drop into your templates, requires only the commmand-line version of
ImageMagick (not the PHP bindings), and caches the generated thumbnails.

It's still very much a work in progress, so use it in production environments at
your own risk.

## Installation

1. Download the ZIP file
2. Unzip it and move the `pthumb` folder to `craft/plugins`
3. Install the plugin from the __Plugins__ page of your control panel
4. Click on the __PThumb__ link on the plugins page to configure the plugin

## Configuration

Setting | Description
--------|--------
Storage Path | Absolute or relative path to the storage directory for PDFs on the server, ex `~/craft/public/uploads/pdfs` |
Base URL | URL to the storage path, ex `/uploads/pdfs` |

## Usage

The `craft.PThumb.thumbnail()` template tag returns a URL to the generated thumbnail.

```
<img src="{{ craft.PThumb.thumbnail(myAsset) }}">
<img src="{{ craft.PThumb.thumbnail(myAsset, 100, 100) }}">
<img src="{{ craft.PThumb.thumbnail(myAsset, 100, 150, true, 'jpg') }}">
```
The arguments, in order, are:

Argument | Description
-------- | --------
__Asset__ | Required
__Width__ | In pixels, *default: 250*
__Height__ | In pixels, *default: 250*
__Exact size__ | Force the canvas to exactly match the `height`/`width` specified by extending transparent (PNG) or white (JPG) space to the dimensions, useful for producing square images of rectangular documents, *default: false*
__File format__ | Options are 'png' or 'jpg', *default: png*


## Known issues

* Files must be limited to a single directory
* Files must be stored locally

## TODO

* Less configuration/more magic
* Better error handling
* Use IOHelper for file operations
* Use storage directory for thumbnails instead of public directory
* Support for S3, Rackspace Cloud Files, and Google Cloud Storage
