<?php
	unset($_COOKIE['id']);
	unset($_COOKIE['email']);
	setcookie('id', '', -1, '/');
	setcookie('email', '', -1, '/');
	$home_url = 'http://'.$_SERVER['HTTP_HOST'];
	header('Location: '.$home_url);
?>