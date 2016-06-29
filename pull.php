<?php
error_reporting(0);
if(empty($_GET["s"])) return;
$s = (string) htmlentities($_GET["s"], ENT_QUOTES, "UTF-8");
if(strlen($s)>=50 || $s=='') return;

$hashed = hash('sha256',hash('sha256',$s));

if($hashed=='49d09a923d5fc604b77c7a08d9a30d70daa7a558b8a05f8c4e62ec69d44a7db5'){
	passthru("git pull");
} else {
	return;
}