<?php
function __autoload($classe) {
	include_once "{$classe}.class.php";
}
?>