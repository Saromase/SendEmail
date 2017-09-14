<?php
include 'function.php';

$tomorrow = time() + (24 * 60 * 60);
$tomorrowClear = date('Y-m-d', $tomorrow);
$bdd = connectBDD();
$request = $bdd->prepare("SELECT id FROM rendez_vous WHERE date = :date");
$request->execute(array(
    'date' => $tomorrowClear
));
$result = $request->fetchAll();
$array = [];
for($i =0; $i < count($result); $i++){
    $temp = selectRDV($result[$i]['id']);
    array_push($array, $temp);
}
