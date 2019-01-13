<?php
 $ipaddress = $_SERVER['REMOTE_ADDR'];
 if (!empty($_SERVER['HTTPS'])) 
{
  echo 'https is enabled'." client ip address: ".$ipaddress;
}
else
{
echo 'http is enabled'."<br>"." client ip address: ".$ipaddress;
}

?>