<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* **************************
	BUTTONS
************************** */
.elgg-button {
	display: inline-block;
	outline: none;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
    width: auto;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	cursor: pointer;
    
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

    -webkit-box-shadow: inset 0 1px 0 #ffffff;
    -moz-box-shadow: inset 0 1px 0 #ffffff;
    box-shadow: inset 0 1px 0 #ffffff;
}
.elgg-button:hover {
	text-decoration: none;
}
.elgg-button:active {
	position: relative;
}

/* **************************
	SUBMIT, ACTION
************************** */
.elgg-button-submit,
.elgg-button-action {
	color: #222;
    border: 1px solid #D1D7DB;
    
	background-color: #EBEFF1; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#EBEFF1));
	background-image: -webkit-linear-gradient(top, #FFFFFF, #EBEFF1); 
	background-image:    -moz-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:     -ms-linear-gradient(top, #FFFFFF, #EBEFF1);
	background-image:      -o-linear-gradient(top, #FFFFFF, #EBEFF1);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#EBEFF1', GradientType=0);
}
.elgg-button-submit:hover,
.elgg-button-action:hover,
.elgg-button-submit:active,
.elgg-button-action:active,
.elgg-button-submit.elgg-state-disabled {
    background-color: #FFFFFF; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EEEEEE), to(#FFFFFF));
	background-image: -webkit-linear-gradient(top, #EEEEEE, #FFFFFF); 
	background-image:    -moz-linear-gradient(top, #EEEEEE, #FFFFFF);
	background-image:     -ms-linear-gradient(top, #EEEEEE, #FFFFFF);
	background-image:      -o-linear-gradient(top, #EEEEEE, #FFFFFF);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#EEEEEE', endColorstr='#FFFFFF', GradientType=0);
}
.elgg-button-submit.elgg-state-disabled {
	cursor: default;
	color: #CCC;
}
/* **************************
	CANCEL
************************** */
.elgg-button-cancel {
	color: #FFF;
    border: 1px solid #AD6704;
    
	background-color: #F89406; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FBB450), to(#F89406));
	background-image: -webkit-linear-gradient(top, #FBB450, #F89406); 
	background-image:    -moz-linear-gradient(top, #FBB450, #F89406);
	background-image:     -ms-linear-gradient(top, #FBB450, #F89406);
	background-image:      -o-linear-gradient(top, #FBB450, #F89406);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FBB450', endColorstr='#F89406', GradientType=0);
    
    -webkit-box-shadow: inset 0 1px 0 #FBCC89;
    -moz-box-shadow: inset 0 1px 0 #FBCC89;
    box-shadow: inset 0 1px 0 #FBCC89;
}
.elgg-button-cancel:hover {
	color: #FFF;
    background-color: #FBB450; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#F89406), to(#FBB450));
	background-image: -webkit-linear-gradient(top, #F89406, #FBB450); 
	background-image:    -moz-linear-gradient(top, #F89406, #FBB450);
	background-image:     -ms-linear-gradient(top, #F89406, #FBB450);
	background-image:      -o-linear-gradient(top, #F89406, #FBB450);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F89406', endColorstr='#FBB450', GradientType=0);
}
/* **************************
	DELETE
************************** */
.elgg-button-delete {
	color: #FFF;
    border: 1px solid #802420;
    
	background-color: #BD362F; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#F34545), to(#BD362F));
	background-image: -webkit-linear-gradient(top, #F34545, #BD362F); 
	background-image:    -moz-linear-gradient(top, #F34545, #BD362F);
	background-image:     -ms-linear-gradient(top, #F34545, #BD362F);
	background-image:      -o-linear-gradient(top, #F34545, #BD362F);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F34545', endColorstr='#BD362F', GradientType=0);	
    
    -webkit-box-shadow: inset 0 1px 0 #F38F8B;
    -moz-box-shadow: inset 0 1px 0 #F38F8B;
    box-shadow: inset 0 1px 0 #F38F8B;
}
.elgg-button-delete:hover {
    background-color: #F34545; 
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#BD362F), to(#F34545));
	background-image: -webkit-linear-gradient(top, #BD362F, #F34545); 
	background-image:    -moz-linear-gradient(top, #BD362F, #F34545);
	background-image:     -ms-linear-gradient(top, #BD362F, #F34545);
	background-image:      -o-linear-gradient(top, #BD362F, #F34545);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#BD362F', endColorstr='#F34545', GradientType=0);
}
.elgg-button-dropdown {
	text-decoration:none;
	position:relative;
    padding: 5px 0 8px;
	margin-left:0;
	color: #999;
    	
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	
	-webkit-box-shadow: 0 0 0;
	-moz-box-shadow: 0 0 0;
	box-shadow: 0 0 0;
}
.elgg-button-dropdown:after {
	content: " \25BC ";
	font-size:smaller;
}
.elgg-button-dropdown:hover {
	color: #FFF;
	text-decoration:none;
}
.elgg-button-dropdown.elgg-state-active {
	background: none;
	outline: none;
	color: #FFF;
    	
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
