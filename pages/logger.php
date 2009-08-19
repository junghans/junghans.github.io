<?php

//ASSIGN VARIABLES TO USER INFO
$time = date("y-m-d G:i:s"); 
$ip = getenv('REMOTE_ADDR');
$uri = getenv('REQUEST_URI');
$userAgent = getenv('HTTP_USER_AGENT');
$referrer = getenv('HTTP_REFERER');
$query = getenv('QUERY_STRING');

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
