/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	// ...
   config.filebrowserBrowseUrl = '../public/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = '../public/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = '../public/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = '../public/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = '../public/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = '../public/kcfinder/upload.php?opener=ckeditor&type=flash';
// ...

	/* Filebrowser routes */
// The location of an external file browser, that should be launched when "Browse Server" button is pressed.
// config.filebrowserImageBrowseUrl = '/ckeditor/pictures';
//   config.filebrowserImageUploadUrl = '/ckeditor/pictures';
};
