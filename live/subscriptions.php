<?php

require_once($LIVE_URL['DIR'].'/livewhale.php'); 
include_once($_LW->INCLUDES_DIR_PATH . '/client/modules/push/includes/class.push.php');
$pubsubhub = new PubSubHub();
$args = array_merge($_LW->_POST, $_LW->_GET);
$pubsubhub->subscriptions($args);

?>