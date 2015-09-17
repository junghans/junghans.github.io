<?php
//ASSIGN VARIABLES TO USER INFO
$time = date("y-m-d G:i:s"); 
$ip = $_SERVER['REMOTE_ADDR'];
#$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$ip = $ip." (".@GetHostByAddr($ip).")";
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (empty($page))
{
  $page="UNDEF";
}

//COMBINE VARS INTO OUR LOG ENTRY
$msg = "IP: ".$ip." TIME: ".$time." USERAGENT: ".$userAgent;

//CALL OUR LOG FUNCTION
writeToLogFile($msg);
echo "Your IP is $ip\n";

function writeToLogFile($msg)
{
     $logfile = "ip.txt"; 
     $dir = '.';
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
     fwrite($handle,"$msg\n");
}

?>
