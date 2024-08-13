<?php
 $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
 $ua = $_SERVER['HTTP_USER_AGENT'];
?>
<html>
 <head>
  <title>Mini App</title>
  <script src="https://telegram.org/js/telegram-web-app.js"></script>
  <link rel="stylesheet" href="ma.css">
 </head>
 <body>
  <h1 style="color: green;">
   <?php
    echo "hello! Your IP is: ".$ip."\n";
   ?>
  </h1>
  <h1 style="color: #ff00aa;">
   <?php
    echo "and Your User-Agent is: ".$ua."\n";
   ?>
 </body>
</html>
