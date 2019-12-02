<?php
//get data from RabbitMQ queue and calculcation function. 


require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Connection\AMQPStreamConnection;


$connection = new AMQPConnection('srv.qeba.my', 5672, 'test', 'test');
$channel = $connection->channel(); 

$avail = ($channel->basic_get('diskavail', true, null)->body);
$total = ($channel->basic_get('disktotal', true, null)->body);
$used = ($channel->basic_get('diskused', true, null)->body);


$roudAvail = (round($avail, 2));
$roudTotal = (round($total, 2));
$roudUsed = (round($used, 2));

$pecentAvail = $roudAvail / $roudTotal * 100; 
$pecentTotal = $roudTotal / $roudTotal * 100; 
$pecentUsed = $roudUsed / $roudTotal * 100; 



$channel->close();
$connection->close();
?>