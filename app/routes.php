<?php
/**
 * User: mathieu.savy
 * Date: 25/05/13
 * Time: 12:26
 */

$router = new \MicroMuffin\Router\Router();

/*
$router::filter("login", function () {
	if (2 < 4)
		return "/articles";
});
*/

$router::add(array("url" => "/", "controller" => "index", "action" => "index"));
