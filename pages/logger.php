<?php

//ASSIGN VARIABLES TO USER INFO
$time = date("y-m-d G:i:s"); 
$ip = $_SERVER['REMOTE_ADDR'];
$ip = $ip." (".@GetHostByAddr($REMOTE_ADDR).")";
$uri = $_SERVER['REQUEST_URI'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$referrer = $_SERVER['HTTP_REFERER'];
$query = $_SERVER['QUERY_STRING'];

if (empty($page))
{
  $page="UNDEF";
}

//COMBINE VARS INTO OUR LOG ENTRY
$msg = "IP: ".$ip." URI: ".$uri." TIME: ".$time." REFERRER: ".$referrer." PAGE: ".$page." SEARCHSTRING: ".$query." USERAGENT: ".$userAgent;

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
