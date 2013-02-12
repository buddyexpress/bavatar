<?php
require_once('bavatar.lib.php');
//user
$user = 'admin@buddyexpress.net';
//sizes, sizes are available 'small', 'medium', 'small', 'medium'
$size = 'full';

$bavatar = buddyexpress_bavatar($user, $size);

echo "<img src='{$bavatar}'/>";