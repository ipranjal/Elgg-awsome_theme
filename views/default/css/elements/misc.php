/* ***************************************
	MISC
*************************************** */
#login-dropdown {
	position: relative;
    float: right;
	top: 10px;
	right: 0;
	z-index: 100;
    margin-left: 20px;
}

/* ***************************************
	AVATAR UPLOADING & CROPPING
*************************************** */

#current-user-avatar {
	border-right:1px solid #D1D7DB;
}
#avatar-croppingtool {
	border-top: 1px solid #D1D7DB;
}
#user-avatar-cropper {
	float: left;
}
#user-avatar-preview {
	float: left;
	position: relative;
	overflow: hidden;
	width: 100px;
	height: 100px;
}

/* ***************************************
	FRIENDS COLLECTIONS
*************************************** */

#friends_collections_accordian li {
	color: #666;
}
#friends_collections_accordian li h2 {
	display: block;
	width: auto;
    cursor: pointer;
	font-size: 1.2em;
	margin: 10px 0;
    padding: 7px 16px 8px;

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
#friends_collections_accordian li h2:hover {
	background-color: #333;
}
#friends_collections_accordian .friends_collections_controls {
	float: right;
	font-size: 70%;
}
#friends_collections_accordian .friends-picker-main-wrapper {
	display: none;
	padding: 0;
}
