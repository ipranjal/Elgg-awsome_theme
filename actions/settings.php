<?php

$plugin = elgg_get_plugin_from_id('awsome_theme');

$params = get_input('params');
foreach ($params as $k => $v) {
	if (!$plugin->setSetting($k, $v)) {
		register_error(elgg_echo('plugins:settings:save:fail', array('awsome_theme')));
		forward(REFERER);
	}
}

foreach ($params as $name => $value) {
	$plugin->setSetting($name, $value);
}

system_message(elgg_echo('plugins:settings:save:ok', array('awsome_theme')));
forward(REFERER);
