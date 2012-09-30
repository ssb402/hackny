<?php

try 
{
    $m = new Mongo(); // connect
    $db = $m->selectDB("partydb");
}
catch ( MongoConnectionException $e ) 
{
    echo '<p>Cannot connect to MongoDB! :(</p>';
    exit();
}


?>

