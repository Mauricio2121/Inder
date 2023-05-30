/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	 config.language = 'es';
	// config.uiColor = '#AADC6E';
	/*config.toolbar_Basic = [
		['Bold','Italic'],['Format'],['Cut','Copy','Paste'],['SpellChecker', 'Scayt'],
		['Undo','Redo'],['Image','Table'],['NumberedList','BulletedList'],
		['Link','Unlink'],['Find','Replace','-','SelectAll','RemoveFormat'],['Maximize'],['SwitchBar']
		];*/
	config.toolbar_Full = [
		['Bold','Italic','Underline','Strike','-',],
		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		['Image','Table','-','Link','TextColor','BGColor'],
		['Link','Unlink','Maximize','Source']
		];
	config.enterMode = CKEDITOR.ENTER_BR;	
};