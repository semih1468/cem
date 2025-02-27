/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {

    config.language = 'tr'; //CKEDITOR arayüz dili
    config.uiColor = '#F8F8F8';// CKEDITOR arayüz rengi
    config.colorButton_colors = '000000,FF0000,00FF00,0000FF';//yazı renk butonunun renkleri
    config.colorButton_enableMore = false; //belirtilenler dışında renk  seçimini  engelleme
    config.contentsLanguage = 'tr';//Editör içeriği oluşturmak için kullanılan yazı dilinin dil kodu.

    //Dosya Yöneticisi
    config.filebrowserBrowseUrl = '/ckeditor/fileman/index.html';// Öntanımlı Dosya Yöneticisi
    config.filebrowserImageBrowseUrl = '/ckeditor/fileman/index.html?type=image'; // Sadece Resim Dosyalarını Gösteren Dosya Yöneticisi
    config.removeDialogTabs = 'link:upload;image:upload'; // Upload işlermlerini dosya Yöneticisi ile yapacağımız için upload butonlarını kaldırıyoruz
    //---------
};

