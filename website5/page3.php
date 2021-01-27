<?php
// Set multiple values in cookies
$user = ['name' => 'Nick', 'email' => 'test@test.com', 'age' => 35];
$user = serialize($user);
setcookie('user', $user, time() + (86400 * 30));
$user = unserialize($user);
echo $user['name'];
print_r($user);
