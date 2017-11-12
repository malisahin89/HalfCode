<?php
require_once('config.php');
 
 $baslik = mysql_query("SELECT * FROM halfcode ORDER BY id DESC") or die (mysql_Error());
 while($gel=mysql_fetch_assoc($baslik)){
 echo '<a href="detay/'.$gel['sef'].'.html">',$gel['Baslik'],"<br/>",'</a>';
 }

?>