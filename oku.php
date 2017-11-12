<?php

header('Content-Type: text/html; charset=utf-8');
 require_once('config.php');
 # Mert Köseoğlu
        # www.mkoseoglu.com
 $sef = mysql_escape_string($_GET['gel']);
 $yazi = mysql_query("SELECT * FROM halfcode WHERE sef='$sef'");
 $cek = mysql_fetch_assoc($yazi);
 switch($cek){
 case null;
 echo "<center><h1 style='font-size:500px'>404</h1></center>";
 break;
 default:
 echo $cek['icerik'];
 }
 
?>