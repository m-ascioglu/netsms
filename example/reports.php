<?php
require "../src/Classes/Reports.php";

use Kubpro\Reports;

$api_key = 'Buraya APIKEY inizi Yazın';
$bulk_id = 'Rapor almak için size dönen BulkId değerini girin';

$reports_array = array(
    'api_key' => $api_key,
    'BulkId' => $bulk_id

);

$report = new Reports($reports_array);

$result = $report->request();

print_r($result);