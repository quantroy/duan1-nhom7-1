<?php

use Carbon\Carbon;
use Carbon\CarbonInterval;

// printf("Now: %s", Carbon::now('Asia/Ho-Chi-Minh'));
header('Content-Type: application/json');
$subdays = Carbon::now('Asia/Ho-Chi-Minh')->subdays(365)->toDateToString();
$now = Carbon::now('Asia/Ho-Chi-Minh')->toDateToString();

$sql = "SELECT * from statistical where order_date between '$subdays' and '$now' order by order_date";
$revenueStatistics = executeQuery($sql, true);

$data = array();
foreach ($revenueStatistics as $item) {
    $data[] = $item;
}
echo json_encode($data);
