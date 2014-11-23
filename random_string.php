<?php
$length = 32;
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
for ($p = 0; $p < $length; $p++) {
  $random_string .= $characters[mt_rand(0, strlen($characters))];
}
echo $random_string;
?>