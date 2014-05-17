<?php
/**
 * Navigation
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 20px 0;
	display: block;
	text-align: center;
}
.elgg-pagination li {
    display: inline-block;
    vertical-align: top;
}
.elgg-pagination li:first-child a,
.elgg-pagination li:first-child span{
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
    
    border-left-width: 1px;
}
.elgg-pagination li:last-child a,
.elgg-pagination li:last-child span {
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
}
.elgg-pagination a, .elgg-pagination span {
    display: block;
    margin: 0 auto;
    padding: 7px 16px 8px;
    text-align: center;
    text-decoration: none;
    width: auto;
    
	background-color: #EBEFF1; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#EBEFF1));
	background-image: -webkit-linear-gradient(top, #FFFFFF, #EBEFF1); 
	background-image:    -moz-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:     -ms-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:      -o-linear-gradient(top, #FFFFFF, #EBEFF1);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#EBEFF1', GradientType=0);
    
    border-color: #D1D7DB;
    border-style: solid;
    border-width: 1px 1px 1px 0; 
  
    -webkit-box-shadow: inset 0 1px 0 #ffffff;
    -moz-box-shadow: inset 0 1px 0 #ffffff;
    box-shadow: inset 0 1px 0 #ffffff;  
}
.elgg-pagination a:hover,
.elgg-pagination .elgg-state-selected span {
    color: #666;
    
    background-color: #FFFFFF; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EEEEEE), to(#FFFFFF));
	background-image: -webkit-linear-gradient(top, #EEEEEE, #FFFFFF); 
	background-image:    -moz-linear-gradient(top, #EEEEEE, #FFFFFF);
	background-image:     -ms-linear-gradient(top, #EEEEEE, #FFFFFF);
	background-image:      -o-linear-gradient(top, #EEEEEE, #FFFFFF);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#EEEEEE', endColorstr='#FFFFFF', GradientType=0);
}
.elgg-pagination .elgg-state-disabled span {
	color: #CCCCCC;
	border-color: #CCCCCC;
}

/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	display: block;
	text-align: center;    
	margin-bottom: 10px;
	width: auto;
    
	background-color: #EBEFF1; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#EBEFF1));
	background-image: -webkit-linear-gradient(top, #FFFFFF, #EBEFF1); 
	background-image:    -moz-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:     -ms-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:      -o-linear-gradient(top, #FFFFFF, #EBEFF1);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#EBEFF1', GradientType=0);
    
    border: 1px solid #D1D7DB;
    
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
    
    -webkit-box-shadow: inset 0 1px 0 #ffffff;
    -moz-box-shadow: inset 0 1px 0 #ffffff;
    box-shadow: inset 0 1px 0 #ffffff;
}
.elgg-tabs li {
    display: inline-block;
    vertical-align: top;
}
.elgg-tabs li:first-child a {
    border-left-width: 1px;
}
.elgg-tabs a { 
    display: block;
    margin: 0;
    padding: 7px 16px 8px;
    text-align: center;
    text-decoration: none;
    width: auto;

    border-color: #D1D7DB;
    border-style: solid;
    border-width: 0 1px 0 0;
}
.elgg-tabs a:hover,
.elgg-tabs .elgg-state-selected {
	background-color: #FFFFFF; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EEEEEE), to(#FFFFFF));
	background-image: -webkit-linear-gradient(top, #EEEEEE, #FFFFFF); 
	background-image:    -moz-linear-gradient(top, #EEEEEE, #FFFFFF);
	background-image:     -ms-linear-gradient(top, #EEEEEE, #FFFFFF);
	background-image:      -o-linear-gradient(top, #EEEEEE, #FFFFFF);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#EEEEEE', endColorstr='#FFFFFF', GradientType=0);
}
.elgg-tabs .elgg-state-selected a {
    color: #666;
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	font-size: 90%;
	font-weight: bold;
	line-height: 1.2em;
	color: #222;
    padding: 5px 0 10px 0;
}
.elgg-breadcrumbs > li {
	display: inline-block;
    color: #999;
}
.elgg-breadcrumbs > li:after {
	content: "\003E";
	padding: 0 4px;
	font-weight: normal;
}
.elgg-breadcrumbs > li > a {
	display: inline-block;
	color: #222;
}
.elgg-breadcrumbs > li > a:hover {
	color: #666;
}
.elgg-main .elgg-breadcrumbs {
	position: relative;
	top: -6px;
	left: 0;
}

/* ***************************************
	TOPBAR MENU
*************************************** */
.elgg-menu-topbar {
	padding-top: 6px;
	float: left;
}
.elgg-menu-topbar > li {
	float: left;
}
.elgg-menu-topbar > li > a {
	color: #999;
	padding-top: 3px;
	margin: 1px 15px 0;
}
.elgg-menu-topbar > li > a:hover {
	color: #FFF;
}
.elgg-menu-topbar-alt {
	float: right;
}
.elgg-menu-topbar-alt > li > a {
	margin: 1px 0 0 25px;
}
.elgg-menu-topbar-default > li > a {
	margin: 1px 25px 0 0;
}
.elgg-menu-topbar .elgg-icon {
	vertical-align: middle;
	margin-top: -1px;
}
.elgg-menu-topbar > li > a.elgg-topbar-logo {
	margin-top: 0;
	padding-left: 5px;
	width: 38px;
	height: 20px;
}
.elgg-menu-topbar > li > a.elgg-topbar-avatar {
	width: 18px;
	height: 18px;
}
/* ***************************************
	SITE MENU
*************************************** */
.elgg-menu-site {
	z-index: 1;
}
.elgg-menu-site > li > a {
    font-size: 130%;
    text-shadow: 1px 1px 1px #FFF;
	padding: 0 0 0 26px;
	height: auto;
}
.elgg-menu-site > li > a:hover {
	text-decoration: none;
}
.elgg-menu-site-default {
	position: absolute;

	top:5px;
	height: 23px;
}
.elgg-menu-site-default > li {
	float: left;
	margin-right: 1px;
}
.elgg-menu-site-default > li > a {
	color: #FFF;
}
.elgg-menu-site > li > ul {
	display: none;
	background-color: white;
}
.elgg-menu-site > li:hover > ul {
	display: block;
}
.elgg-menu-site-default > .elgg-state-selected > a,
.elgg-menu-site-default > li:hover > a {
	color: #666;
}
.elgg-menu-site-more {
	position: absolute;
	border: 1px solid #999;
	width: 100%;
	min-width: 180px;
	padding: 10px;
    right: 0;
        
	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;

	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
}
.elgg-menu-site-more > li > a {
	background-color: white;
    font-size: 100%;
	padding: 6px 10px 6px 10px;
    text-shadow: none;
        
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.elgg-menu-site-more > li > a:hover {
	background: #999;
	color: white;
}
.elgg-menu-site-more > li:last-child > a,
.elgg-menu-site-more > li:last-child > a:hover {
	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;
}
.elgg-more > a:before {
	content: "\25BC";
	font-size: smaller;
	margin-right: 4px;
}

/* ***************************************
	TITLE
*************************************** */
.elgg-menu-title {
	float: right;
}

.elgg-menu-title > li {
	display: inline-block;
	margin-left: 4px;
}

/* ***************************************
	FILTER MENU
*************************************** */
.elgg-menu-filter {
	display: block;
	text-align: center;    
	margin-bottom: 10px;
	width: auto;
    
	background-color: #EBEFF1; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#EBEFF1));
	background-image: -webkit-linear-gradient(top, #FFFFFF, #EBEFF1); 
	background-image:    -moz-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:     -ms-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:      -o-linear-gradient(top, #FFFFFF, #EBEFF1);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#EBEFF1', GradientType=0);
    
    border: 1px solid #D1D7DB;
    
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
    
    -webkit-box-shadow: inset 0 1px 0 #ffffff;
    -moz-box-shadow: inset 0 1px 0 #ffffff;
    box-shadow: inset 0 1px 0 #ffffff;
}
.elgg-menu-filter > li {
    display: inline-block;
    vertical-align: top;
}
.elgg-menu-filter > li:first-child a {
    border-left-width: 1px;
}
.elgg-menu-filter > li:hover {
	background: #dedede;
}
.elgg-menu-filter > li > a {
    display: block;
    margin: 0;
    padding: 7px 16px 8px;
    text-align: center;
    text-decoration: none;
    width: auto;

    border-color: #D1D7DB;
    border-style: solid;
    border-width: 0 1px 0 0;
}
.elgg-menu-filter > li > a:hover,
.elgg-menu-filter > .elgg-state-selected {
	background-color: #FFFFFF; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EEEEEE), to(#FFFFFF));
	background-image: -webkit-linear-gradient(top, #EEEEEE, #FFFFFF); 
	background-image:    -moz-linear-gradient(top, #EEEEEE, #FFFFFF);
	background-image:     -ms-linear-gradient(top, #EEEEEE, #FFFFFF);
	background-image:      -o-linear-gradient(top, #EEEEEE, #FFFFFF);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#EEEEEE', endColorstr='#FFFFFF', GradientType=0);
}
.elgg-menu-filter > .elgg-state-selected > a {
    color: #666;
}

/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page {
	margin-bottom: 15px;
}
.elgg-menu-page a {
	display: block;
	margin: 0 0 3px;
	padding: 2px 4px 2px 0;
}
.elgg-menu-page a:hover {
	text-decoration: none;
}
.elgg-menu-page li.elgg-state-selected > a {
	color: #999;
}
.elgg-menu-page .elgg-child-menu {
	display: none;
	margin-left: 15px;
}
.elgg-menu-page .elgg-menu-closed:before, .elgg-menu-opened:before {
	display: inline-block;
	padding-right: 4px;
}
.elgg-menu-page .elgg-menu-closed:before {
	content: "\002B";
}
.elgg-menu-page .elgg-menu-opened:before {
	content: "\002D";
}

/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;
	padding: 10px;
	overflow: hidden;

	min-width: 165px;
	max-width: 250px;
	border: 1px solid #999;
	background-color: #FFF;
	
	-webkit-border-radius: 0 3px 3px 3px;
	-moz-border-radius: 0 3px 3px 3px;
	border-radius: 0 3px 3px 3px;

	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
}
.elgg-menu-hover > li {
	border-bottom: 1px solid #D1D7DB;
}
.elgg-menu-hover > li a{
	padding: 6px 10px 6px 10px;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	padding: 2px 8px;
	font-size: 92%;
}
.elgg-menu-hover a:hover {
	background: #999;
    color: #FFF;
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: red;
}
.elgg-menu-hover-admin a:hover {
	color: white;
	background-color: red;
}

/* ***************************************
	SITE FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	display: inline-block;
	color: #999;
}

.elgg-menu-footer > li:after {
	content: "\007C";
	padding: 0 4px;
}

.elgg-menu-footer-default {
	float: right;
}

.elgg-menu-footer-alt {
	float: left;
}

/* ***************************************
	GENERAL MENU
*************************************** */
.elgg-menu-general > li,
.elgg-menu-general > li > a {
	display: inline-block;
	color: #999;
}

.elgg-menu-general > li:after {
	content: "\007C";
	padding: 0 4px;
}

/* ***************************************
	ENTITY AND ANNOTATION
*************************************** */
<?php // height depends on line height/font size ?>
.elgg-menu-entity, elgg-menu-annotation {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #aaa;
	line-height: 16px;
	height: auto;
}
.elgg-menu-entity > li, .elgg-menu-annotation > li {
	margin-left: 15px;
}
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	color: #aaa;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	display: block;
}
.elgg-menu-entity > li > span, .elgg-menu-annotation > li > span {
	vertical-align: baseline;
}

/* ***************************************
	OWNER BLOCK
*************************************** */
.elgg-menu-owner-block li a {
	display: block;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 0;
}
.elgg-menu-owner-block li a:before {
	margin-right: 10px;
    content: "\25B6";

}
.elgg-menu-owner-block li a:hover {
	text-decoration: none;
}
.elgg-menu-owner-block li.elgg-state-selected > a {
	color: #999;
}

/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}

/* ***************************************
	RIVER
*************************************** */
.elgg-menu-river {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #aaa;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-river > li {
	display: inline-block;
	margin-left: 5px;
}
.elgg-menu-river > li > a {
	color: #aaa;
	height: 16px;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-river > li > a {
	display: block;
}
.elgg-menu-river > li > span {
	vertical-align: baseline;
}

/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.elgg-menu-extras {
	margin-bottom: 15px;
}
.elgg-menu-extras li{
	margin-right: 10px;
}

/* ***************************************
	WIDGET MENU
*************************************** */
.elgg-menu-widget > li {
	position: absolute;
	top: 7px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 2px 2px 0 0;
}

.elgg-menu-widget > .elgg-menu-item-collapse {
	padding-top: 1px;
	left: 5px;
}
.elgg-menu-widget > .elgg-menu-item-delete {
	right: 15px;
}
.elgg-menu-widget > .elgg-menu-item-settings {
	right: 40px;
}
