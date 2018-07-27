<?php
// global path constants.
define('PATH_ABSOLUTE', dirname(__FILE__) . '/../');
define('PATH_INCLUDES', PATH_ABSOLUTE . 'includes/');


require_once(PATH_INCLUDES . 'social.existence.class.php');

$website['version']  = '1.2';
$website['url']      = social_existence::website_url();
$website['current']  = social_existence::current_url();
$website['statuses'] = social_existence::$statuses;
$website['count']    = count(social_existence::$websites);
$website['count2']   = floor($website['count'] / 5) * 5;
?>
