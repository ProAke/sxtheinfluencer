<?php

$user = json_decode( file_get_contents('php://input') );
echo $user;

echo file_put_contents("db.txt","Hello-->".+$user);
