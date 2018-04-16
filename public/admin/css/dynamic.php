<?php
    header("Content-type: text/css; charset: UTF-8");
    $header_bg = "#990000";
    $logo_color= "#fff";

    /*buttons*/
    $btn_bg = "#555555";
    $btn_color = "#333";
    $sec_btn_bg = "#d2d2d2";
    $sec_btn_color = "#bf1d1d";

    /*branding Image and colors*/
    $brand_image = "";
    $brand_color = "#ce3b3b";
    $brand_text_color = "#4f3cb1";
    $sec_bg_color = "#bf1d1d";
    $sec_text_color = "#d2d2d2";

    /*footer*/
    $footer_color = "#329413";
    $footer_text_color = "#000000";

    $link_color = "#fff";
?>
.layout_one_header{
   	background: <?= $header_bg; ?>
}
.navbar-brand{
	color: <?= $logo_color; ?>
}
.layout_one_header .btn-support, .layout_one_header .btn-logout, .btn-submit{
   background: <?= $btn_bg;?> !important;
   color: <?= $btn_color;?> !important;
}
.layout_one_header .btn-support:hover, 
.layout_one_header .btn-logout:hover,
.layout_one_header .btn-support:active, 
.layout_one_header .btn-logout:active{
   background: <?= $btn_color;?> !important;
   color: <?= $btn_bg;?> !important;
}
.common_section, .common_section:before{
	background-color: <?= $brand_color;?> !important;
	color: <?= $brand_text_color;?> !important;
}
.common_section p,.common_section h2,.common_section span  {
	color: <?= $brand_text_color;?> !important;
}
.enroll_bgc_one{
	background:  <?= $brand_color;?> !important;
}
.footer{
	background-color: <?= $footer_color;?> !important;
	color: <?= $footer_text_color;?> !important;
}
.footer p{
	color: <?= $footer_text_color;?> !important;
}
.purchase_button, .common-btn, .btn-more{
	 background: <?= $sec_btn_bg;?> !important;
   color: <?= $sec_btn_color;?> !important;
}
.purchase_button:hover, .common-btn:hover, .btn-more:hover{
	 background: <?= $sec_btn_color;?> !important;
   color: <?= $sec_btn_bg;?> !important;
}
.features-2, .features-3{
	background: <?= $sec_bg_color;?> !important;
	color: <?= $sec_text_color;?> !important;
}
.features-2 *, .features-3 *{
	color: <?= $sec_text_color;?> !important;
}
a{
	color: <?= $link_color;?> ;
}