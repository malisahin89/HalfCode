<?php

require_once('config.php');
 function sef_link($bas)
{ # www.mkoseoglu.com
 $bas = str_replace(array("&quot;","&#39;"), NULL, $bas);
 $bul = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '-');
 $yap = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', ' ');
 $perma = strtolower(str_replace($bul, $yap, $bas));
 # Mert Köseoğlu
 $perma = preg_replace("@[^A-Za-z0-9\-_]@i", ' ', $perma);
 $perma = trim(preg_replace('/\s+/',' ', $perma));
 $perma = str_replace(' ', '-', $perma);
 return $perma;
}
  $isim= $_POST['isim'];
 $bolum= $_POST['bolum'];

 $title= $_POST['baslik'];
 $sayfabaslik = $_POST['sayfabaslik'];
 $icerik= $_POST['icerik'];
 
 $sef = sef_link($isim);
 echo $sef;
 $kaydet=mysql_query("INSERT INTO halfcode (bolum,isim,title,sayfabaslik,icerik,sef) 
     VALUES ('".$bolum."','".$isim."','".$title."','".$sayfabaslik."','".$icerik."','".$sef."')") or die (mysql_Error());

?>