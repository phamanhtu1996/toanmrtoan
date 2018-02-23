<?php
/**
 * Created by IntelliJ IDEA.
 * User: phama
 * Date: 02/20/2018
 * Time: 15:12
 */

function public_url($str = '') {
	return base_url('public/'.$str);
}

function _print($o) {
	echo '<pre>';
	print_r($o);
	echo '</pre>';
}
