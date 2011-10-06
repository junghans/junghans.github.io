<?php

//ASSIGN VARIABLES TO USER INFO
$time = date("y-m-d G:i:s"); 
$ip = $_SERVER['REMOTE_ADDR'];
#$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$ip = $ip." (".@GetHostByAddr($ip).")";
$uri = $_SERVER['REQUEST_URI'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$query = $_SERVER['QUERY_STRING'];

if (empty($page))
{
  $page="UNDEF";
}

//COMBINE VARS INTO OUR LOG ENTRY
$msg = "IP: ".$ip." URI: ".$uri." TIME: ".$time."  PAGE: ".$page." SEARCHSTRING: ".$query." USERAGENT: ".$userAgent;

//CALL OUR LOG FUNCTION
writeToLogFile($msg);

function writeToLogFile($msg)
{
     $logfile = "log.txt"; 
     $dir = 'SITEPATH/logs';
     $saveLocation=$dir . '/' . $logfile;
     if (!$handle = @fopen($saveLocation, "a"))
     {
          exit;
     }
     else
     {
          if(@fwrite($handle,"$msg\n")===FALSE) 
          {
               exit;
          }
          @fclose($handle);
     }
     //echo $msg;
}

?>
