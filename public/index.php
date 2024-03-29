
<?php

require_once(dirname(__FILE__, 2).'/src/config/config.php');
require_once(dirname(__FILE__, 2).'/src/models/User.php');


$user = new User(['name'=>'Marcio', 'email'=>'marcio@hotmail.com']);
//print_r($user);
$user->email = 'alterado@gmail.com';

//echo "<br><br><br>";
//print_r($user->email);
//echo "<br><br><br>";


//echo User::getSelect(['id' => 1],'email, name');
//echo User::getSelect(['name' => 'Chaves'],'email, id');

var_dump(User::get(['name'=>'Chaves']));

foreach(User::get([], 'name') as $user){
    echo $user->name;
    echo '<br>';
}