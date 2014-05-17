<?php

elgg_register_event_handler('init','system','awsome_init');
 
function awsome_init() {

		
	 $plugin = elgg_get_plugin_from_id('awsome_theme');
	
	
	 elgg_register_action("awsome_theme/add", "$action_path/add.php");		
	 elgg_extend_view('js/elgg', 'js/awsome_theme/update');
	
	
	 elgg_register_event_handler('pagesetup', 'system', 'basic_pagesetup_handler', 1000);
     elgg_extend_view('page/elements/','page/elements/nav',500);
	 elgg_extend_view('page/elements/sidebar_alt','page/elements/add',500);
	if ((elgg_is_logged_in()) && (elgg_get_context() == 'activity')){ 
	 elgg_extend_view('page/elements/sidebar', 'page/elements/friends');
	 }
	 elgg_extend_view('css/elgg', 'awsome_theme/css');
	
	 elgg_unregister_js('elgg.friendspicker');

	
	


}



function basic_pagesetup_handler() {

	elgg_unextend_view('page/elements/header', 'search/header');
    
	elgg_unregister_menu_item('topbar', 'dashboard');
	$site = elgg_get_site_entity();
		elgg_unregister_menu_item('topbar', 'elgg_logo');
		elgg_register_menu_item('topbar', array(
			'href' => '/activity',
			'name' => 'logo',
			'priority' => 1,
			'text' => "<h1 id=\"facebook-topbar-logo\">$site->name</h1>",
		));
	
	
	
	if (elgg_is_logged_in()) {	
		$user = elgg_get_logged_in_user_entity();
		
		if (elgg_is_active_plugin('dashboard')) {
			elgg_register_menu_item('topbar', array(
				'name' => 'dashboard',
				'href' => 'dashboard',
				'text' => elgg_view_icon('home') ,
				'priority' => 3,
				
			));
		}
		if (elgg_is_active_plugin('reportedcontent')) {
			elgg_unregister_menu_item('footer', 'report_this');
		
			$href = "javascript:elgg.forward('reportedcontent/add'";
			$href .= "+'?address='+encodeURIComponent(location.href)";
			$href .= "+'&title='+encodeURIComponent(document.title));";
				
			elgg_register_menu_item('extras', array(
				'name' => 'report_this',
				'href' => $href,
				'text' => elgg_view_icon('report-this') . elgg_echo(''),
				'title' => elgg_echo('reportedcontent:this:tooltip'),
				'priority' => 100,
			));
		}
	}
}
