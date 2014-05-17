 
<?php 


if (elgg_is_logged_in()) {
$user = elgg_get_logged_in_user_entity();
    $img_icon = $user->getIconURL('large');
    echo "<left><img src=\"".$img_icon."\" width=\"140px\" alt=\"".$user->name."\" title=\"".$user->name."\"/></left>";
}
	?>	

	
 


