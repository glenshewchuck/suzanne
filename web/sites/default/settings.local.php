<?php

$settings['trusted_host_patterns'] = [
'^suzanne\.build$',
];

$settings['file_private_path'] = 'sites/default/files/private';

$settings['skip_permissions_hardening'] = TRUE;

//$settings['config_sync_directory'] = 'sites/sync';

//this sets the color for the environmental_indicator module
$config['environment_indicator.indicator']['bg_color'] = 'green';
$config['environment_indicator.indicator']['fg_color'] = 'black';
$config['environment_indicator.indicator']['name'] = 'Local';
