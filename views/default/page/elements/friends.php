<?php 
	


$title = elgg_echo('Your Friends');


$friend = elgg_list_entities_from_relationship(array(
            'type' => 'user',
            'relationship' => 'friend',
            'relationship_guid' => elgg_get_logged_in_user_guid(),
            'inverse_relationship' => false,
            'full_view' => false,
            'pagination' => false,
            'list_type' => 'gallery',
            'gallery_class' => 'elgg-gallery-users',
            'order_by' => 'rand()' 
        ));


	if ($friend) {
		$river_body = $friend;
                $river_body .= '<p style="text-align:right; margin:3px 3px;"><a href="'.elgg_get_site_url().'friends/'.elgg_get_logged_in_user_entity()->username.'"><b>'.elgg_echo('View More').'</b></a></p>';
	}else {
            
            $river_body = elgg_echo ('you don\'t have friends');
            $river_body .= '<p style="text-align:right; margin:3px 3px;"><a href="'.elgg_get_site_url().'members"><b>'.elgg_echo('Add friends').'</b></a></p>';
        }
    echo elgg_view_module($box_view, $title, $river_body);


    
