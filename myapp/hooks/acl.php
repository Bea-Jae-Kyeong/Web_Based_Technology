<?php
$allowAll = array();
$allowOnly = array();
$allowAll['pages']['view'] = True;
$allowAll['user']['login'] = True;
$allowAll['user']['profile'] = True;
$allowAll['user']['logout'] = True;
$allowAll['post']['add'] = True;
$allowAll['post']['skeyword'] = True;
$allowAll['post']['index'] = True;

$allowAll['signup']['register'] = True;
//$allowOnly[group][controller][action]
// 1 -> admin; 2 -> registered users
$allowOnly[2]['user']['home'] = True;
$allowOnly[1]['admin']['index'] = True;
?>