<?php
setcookie('username', 'Frank', time()+ 86400*30);
// sets cookie for a day with a new username

// Delete cookie
// setcookie('username', 'Frank', time() - 3600);

if(count($_COOKIE) > 0) {
    echo 'There are '.count($_COOKIE). ' cookies saved';
} else {
    echo 'There are no cookies saved';
}

if (isset($_COOKIE['username'])) {
    echo 'User ' . $_COOKIE['username'] . ' is set<br>';
} else {
    echo 'User is not set';
}
