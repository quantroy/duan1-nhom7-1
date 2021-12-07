<?php
header('Content-Type: application/json');

use Carbon\Carbon;
use Carbon\CarbonInterval;

$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

$sql = "SELECT * from statistical where order_date between '$subdays' and '$now' order by order_date";
$revenueStatistics = executeQuery($sql, true);

$data = array();
foreach ($revenueStatistics as $item) {
    $data[] = $item;
}
echo json_encode($data);
