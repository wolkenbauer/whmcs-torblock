<?php


if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

use WHMCS\Database\Capsule;


function torblock_client($vars) {

  if (istorExitpoint() == true) 
   {
	
    header("Location: " . torblock_getsetting("throwurl"));
    exit;
   }

}
	
function torblock_admin($vars) {

  if (istorExitpoint() == true)
   {
    header("Location: " . torblock_getsetting("throwurl"));
    exit;
   }

}

// Define the hooks
add_hook("ClientAreaHeaderOutput",1,"torblock_client");
add_hook("AdminAreaHeaderOutput",1,"torblock_admin");



//little helper

function torblock_getsetting($setting)
	{	
  $r=Capsule::table('tbladdonmodules')->where('module','torblock')->where('setting','throwurl')->pluck('value');
   return $r[0];      
  }

 function IsTorExitPoint(){
    if (gethostbyname(ReverseIPOctets($_SERVER['REMOTE_ADDR']).".".$_SERVER['SERVER_PORT'].".".ReverseIPOctets($_SERVER['SERVER_ADDR']).".ip-port.exitlist.torproject.org")=="127.0.0.2") {
        return true;
    } else {
       return false;
    } 
}

function ReverseIPOctets($inputip){
    $ipoc = explode(".",$inputip);
    return $ipoc[3].".".$ipoc[2].".".$ipoc[1].".".$ipoc[0];
}