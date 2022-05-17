<?php
include('include.php');

$ip = $servers[$_POST['server_name']] -> hostname_or_ip;
$packet = $_POST['n'];


exec("ping -n " . $packet . " " . $ip, $outputs);

foreach ($outputs as $output) {
  echo "<pre>" . $output . "</pre>";
}

 ?>
