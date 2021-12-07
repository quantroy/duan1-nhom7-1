<?php
<<<<<<< HEAD
// header('Content-Type: application/json');
=======
>>>>>>> parent of c5c9cf0 (Merge branch 'main' into sp3]-task20_minhQuan_thong-ke)

use Carbon\Carbon;
use Carbon\CarbonInterval;

<<<<<<< HEAD
$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
=======
// printf("Now: %s", Carbon::now('Asia/Ho-Chi-Minh'));
header('Content-Type: application/json');
$subdays = Carbon::now('Asia/Ho-Chi-Minh')->subdays(365)->toDateToString();
$now = Carbon::now('Asia/Ho-Chi-Minh')->toDateToString();
>>>>>>> parent of c5c9cf0 (Merge branch 'main' into sp3]-task20_minhQuan_thong-ke)

$sql = "SELECT * from statistical where order_date between '$subdays' and '$now' order by order_date";
$revenueStatistics = executeQuery($sql, true);

$data = array();
foreach ($revenueStatistics as $item) {
    $data[] = $item;
}
echo json_encode($data);
