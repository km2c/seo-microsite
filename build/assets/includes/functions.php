<?php
$page_param = explode('/',$_SERVER['REQUEST_URI']);
$page = ($page_param[1] == '') ? 'index' : $page_param[1];

$data = json_decode( file_get_contents( 'data/content.json') );

// echo '<pre>';
// print_r($data);
// echo '</pre>';
