<?php

/**
 * Options for the oauthkeycloak plugin
 */

$meta['key'] = array('string');
$meta['secret'] = array('password');

$meta['openidurl'] = array('string');
$meta['verify-peer']  = array('onoff','_caution' => 'security');

$meta['label'] = array('string');
$meta['color'] = array('string');
