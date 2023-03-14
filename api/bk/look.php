<?php

$user = json_decode( file_get_contents('php://input') );
echo $name = $user->name;

echo file_put_contents("db.txt","Hello-->".$name);
