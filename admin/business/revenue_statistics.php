<?php

use Carbon\Carbon;
use Carbon\CarbonInterval;

function getDataStatistisc()
{
    header('Content-Type: application/json');
    $subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();


    $sql = "SELECT * from statistical where order_date between '$subdays' and '$now' order by order_date";
    $revenueStatistics = executeQuery($sql, true);

    $data = array();
    foreach ($revenueStatistics as $item) {
        $data[] = $item;
    }
    echo json_encode($data);
}
//cập nhật ngày thành công
function updateDoneAt($id)
{
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
    // $now = "20-10-11";
    $sqlQuery = "UPDATE oder set done_at = '$now' where id = $id";
    // var_dump($sqlQuery);
    $updateDoneAt = executeQuery($sqlQuery, false);
    $listStatistical = getStatistiscById($now);

    $recordById =  getRecordById($id);
    dd($recordById);
    if ($listStatistical && isset($listStatistical)) {
        $revenue = $recordById['revenue'] + $listStatistical['revenue'];
        $order = $recordById['order'] + $listStatistical['order'];


        $sql = "UPDATE statistical set revenue = '$revenue', order = '$order' where id = $id";
        executeQuery($sql);
    } else {
        $revenue = $recordById['revenue'];
        $order = $recordById['order'];

        $sql = "INSERT statistcal (order_date, revenue, order) values ('$now', '$revenue')";
        executeQuery($sql);
    }
}
function getRecordById($id)
{
    $sql = "SELECT * from oder where id = $id";

    return executeQuery($sql);
}
function getStatistiscById($now)
{
    $sql = "SELECT * from statistical where order_date = '$now'";
    return executeQuery($sql);
    // // dd(($listStatistical));
    // if (isset($listStatistical) && $listStatistical) {
    //     $listStatistical[''];
    //     // $sql = "UPDATE statistical set"
    // }
}
