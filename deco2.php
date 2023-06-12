<?php 

$data=file_get_contents('https://cdn-api.co-vin.in/api/v2/admin/location/states');
$coronadata=json_decode($data,true);
echo "<pre>";
print_r($coronadata);
echo "</pre>";
 ?>