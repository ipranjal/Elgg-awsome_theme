<?php
/**
 * Basic Light settings
 * 
 */

	$plugin = elgg_get_plugin_from_id('awsome_theme');

	if (!isset($plugin->show_icon)) {
		$plugin->show_icon = 'sidebar';
	}
	if (!isset($plugin->show_menu)) {
		$plugin->show_menu = 'sidebar';
	}
	if (!isset($plugin->show_custom)) {
		$plugin->show_custom = 'sidebar_alt';
	}


echo "<div class=\"label\">" . elgg_echo('awsome_theme:info:sidebar') . "</div>";
echo "<div>" . elgg_echo('awsome_theme:info:modules') . "</div>";

echo '<div class="item">';
echo elgg_echo('awsome_theme:label:show_icon');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_icon]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('awsome_theme:option:sidebar:left'),
		'sidebar' => elgg_echo('awsome_theme:option:sidebar:right')
	),
	'value' => $plugin->show_icon,
));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('awsome_theme:label:menu');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_menu]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('awsome_theme:option:sidebar:left'),
		'sidebar' => elgg_echo('awsome_theme:option:sidebar:right')
	),
	'value' => $plugin->show_menu,
));
echo '</div>';

echo '<div class="item">';
echo elgg_echo('awsome_theme:label:custom');
echo ' ';
echo elgg_view('input/dropdown', array(
	'name' => 'params[show_custom]',
	'options_values' => array(
		'no' => elgg_echo('option:no'),
		'sidebar_alt' => elgg_echo('awsome_theme:option:sidebar:left'),
		'sidebar' => elgg_echo('awsome_theme:option:sidebar:right')
	),
	'value' => $plugin->show_custom,
));
echo '</div>';

echo '<div>';
echo elgg_echo('awsome_theme:label:html');
echo ' ';
echo elgg_view('input/longtext', array(
	'name' => "params[html_content]",
	'value' => $plugin->html_content,
));
echo "</div>";

echo elgg_view('input/submit', array('value' => elgg_echo("save")));

