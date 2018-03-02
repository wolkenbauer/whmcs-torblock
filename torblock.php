<?php
if (!defined("WHMCS"))
   die("This file cannot be accessed directly");



function torblock_Config()
{
	   $configarray = array(
		"name" => "TOR-Block",
		"description" => "Prevents clientarea access for TOR User.",
		"version" => "1.1",
		"author" => "<a href='http://wolkenbauer.com'>Wolkenbauer Internet KG</a>",
		"language" => "german",
		"fields" => array(
			"throwurl" => array( "Type"=>"text","Size"=>"30","Description" => "URL to forward the client to","Default"=>"google.de"),
		
            "  " => array( "Description" => "&nbsp; " ),

			"                " => array( "Description" => "© 2017 by Wolkenbauer Internet KG - All Rights Reserved. (<a href='http://www.wolkenbauer.com/' target='_blank'>http://www.wolkenbauer.com</a>)"))
                        
        );
		
        return $configarray;
}