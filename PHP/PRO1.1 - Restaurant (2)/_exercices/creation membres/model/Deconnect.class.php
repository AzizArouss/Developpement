<?php
class Deconnect{
	function __construct(){
		session_destroy();
	}
}