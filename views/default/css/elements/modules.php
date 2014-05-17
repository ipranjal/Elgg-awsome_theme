/* ***************************************
	Modules
*************************************** */
.elgg-module {
	overflow: hidden;
	margin-bottom: 20px;
}
/* Aside */
.elgg-module-aside .elgg-head {
	border-bottom: 1px solid #D1D7DB;
	margin-bottom: 10px;
	padding: 6px 0;
}
.elgg-sidebar .elgg-module-aside .elgg-list {
	margin-top: 0;
    border-top: none;
}
/* Info */
.elgg-module-info > .elgg-head {
	padding: 5px 0;
	margin-bottom: 5px;
}
.elgg-module-info > .elgg-head * {
    color: #191919;
}
.elgg-sidebar .elgg-module-info > .elgg-head * {
	border-bottom: 1px solid #D1D7DB;
	padding: 6px 0;
}

/* Popup */
.elgg-module-popup {
	background-color: white;
	border: 1px solid #D1D7DB;
	
	z-index: 9999;
	margin-bottom: 0;
	padding: 5px;
    
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
	color: #0054A7;
}

/* Dropdown login box */
.elgg-module-dropdown {
	background-color:white;
	border:5px solid #CCC;
	
	-webkit-border-radius: 3px 0 3px 3px;
	-moz-border-radius: 3px 0 3px 3px;
	border-radius: 3px 0 3px 3px;
	
	display:none;
	
	width: 210px;
	padding: 12px;
	margin-right: 0px;
	z-index:100;
	
	-webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	
	position:absolute;
	right: 0px;
	top: 100%;
}

/* Featured */
.elgg-module-featured {
	border: 1px solid #D1D7DB;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.elgg-module-featured > .elgg-head {
    display: block;
    padding: 7px 10px 8px;
    margin-bottom: 0;

	background-color: #EBEFF1; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#EBEFF1));
	background-image: -webkit-linear-gradient(top, #FFFFFF, #EBEFF1); 
	background-image:    -moz-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:     -ms-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:      -o-linear-gradient(top, #FFFFFF, #EBEFF1);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#EBEFF1', GradientType=0);
    
    border-bottom: 1px solid #D1D7DB;
    
	-webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0;
    
    -webkit-box-shadow: inset 0 1px 0 #ffffff;
    -moz-box-shadow: inset 0 1px 0 #ffffff;
    box-shadow: inset 0 1px 0 #ffffff; 
}
.elgg-module-featured > .elgg-body {
	padding: 15px;
    
	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;
}

/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	float: right;
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 5px 5px 15px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: #dedede;
	border: 1px solid #ccc;
}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 2px 10px;
	width: 194px;
	padding: 4px;
	background-color: #ccc;
	border: 1px solid #4F4F4F;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widgets-add-panel .elgg-state-available {
	color: #333;
	cursor: pointer;
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: #bcbcbc;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #888;
}

.elgg-module-widget {
	padding: 0 2px;
	margin: 0 5px 15px;
	position: relative;
}
.elgg-module-widget > .elgg-head {
    display: block;
    padding: 9px 10px 6px;
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
.elgg-module-widget > .elgg-head h3 {
	text-align: bottom;
	float: left;
	padding: 0 45px 0 20px;
}
.elgg-module-widget > .elgg-body {
    border-right: 1px solid #CFCFCF;
    border-bottom: 1px solid #CFCFCF;    
    border-left: 1px solid #CFCFCF;
    
	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;    

	overflow: hidden;
}
.elgg-module-widget.elgg-state-draggable .elgg-widget-handle {
	cursor: move;
}
a.elgg-widget-collapse-button {
	padding-left: 10px;
	color: #222;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: #666;
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
.elgg-widget-edit {
	display: none;
	width: auto;
	padding: 15px;
	border-bottom: 1px solid #D1D7DB;
	background-color: #f9f9f9;
}
.elgg-widget-content {
	padding: 15px;
}
.elgg-widget-placeholder {
	border: 1px dashed #dedede;
	margin-bottom: 15px;
}