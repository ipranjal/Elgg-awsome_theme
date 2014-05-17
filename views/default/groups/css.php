<?php
/**
 * Elgg Groups css
 * 
 * @package groups
 */

?>
.groups-profile > .elgg-image {
	margin-right: 10px;
}
.groups-stats {
	padding: 5px 0;
	margin-top: 10px;
}
.groups-stats p{
	margin: 0;
}
.groups-profile-fields .odd,
.groups-profile-fields .even {
	padding: 0 0 4px 0;
	margin-bottom: 7px;
}
.groups-profile-fields {
	padding-left: 10px;
}
.groups-profile-fields .elgg-output {
	margin: 0;
}
#groups-tools > li {
	width: 48%;
	min-height: 100px;
	margin-bottom: 20px;
}
#groups-tools > li:nth-child(odd) {
	margin-right: 4%;
}
.elgg-head .groups-widget-viewall {
	float: right;
    padding-top: 0;
	line-height: 1.3em;
}
.groups-latest-reply {
	float: right;
}

/* Modules */
.elgg-module-group > .elgg-head {
    display: block;
    padding: 8px 10px 7px;
    margin-bottom: 0;
    
	background-color: #EBEFF1; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#EBEFF1));
	background-image: -webkit-linear-gradient(top, #FFFFFF, #EBEFF1); 
	background-image:    -moz-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:     -ms-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:      -o-linear-gradient(top, #FFFFFF, #EBEFF1);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#EBEFF1', GradientType=0);
    
    border: 1px solid #D1D7DB;
    
	-webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0;
    
    -webkit-box-shadow: inset 0 1px 0 #ffffff;
    -moz-box-shadow: inset 0 1px 0 #ffffff;
    box-shadow: inset 0 1px 0 #ffffff;    
}
.elgg-module-group > .elgg-body {
	padding: 15px;

    border-right: 1px solid #D1D7DB;
    border-bottom: 1px solid #D1D7DB;
    border-left: 1px solid #D1D7DB;
    
	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;
}
.elgg-module-group {
    margin-bottom: 0;
}
.elgg-menu-groups-my-status li a {
	display: block;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 0;
}
.elgg-menu-groups-my-status li a:hover {
	text-decoration: none;
}
