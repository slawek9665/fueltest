<?php
return array(
	'_root_'  => 'comment/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
        'add' => array(array('POST', new Route('comment/create'))),
);
