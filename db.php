<?php
    //$db_connection = pg_connect("host=sksoildb.usask.ca dbname=shelterbelt user=USERNAME password=PASSWORD");

    $dbconn = pg_connect("host=sksoildb.usask.ca port=5432 dbname=shelterbelt user=postgres password=SkSoilDB")
    or die('Could not connect: ' . pg_last_error());

    $query = 'SELECT * FROM "public"."ring_growth" LIMIT 200';
    $result = pg_query($query) or die('Query failed: ' . pg_last_error());

    $arr = pg_fetch_all($result);

function search_item($site, $scenario, $species, $array) {
    foreach ($array as $key => $val) {
        if ($val['site'] === $site && $val['Scenario'] === $scenario && $val['species'] === $species ) {
            return $key;
        }
    }
    return null;
}

$arr_key = search_item('pm1','A2','White Spruce', $arr);

foreach($arr[$arr_key] as $key=>$value){
    if(!is_int($key)){
        unset($arr[$arr_key][$key]);
    }
}

foreach ($arr[$arr_key] as $key=>$value){
    $arr_for_js[] = array(
        'x' => $key,
        'y' => $value,
    );
//    $arr_for_js['x']=$key;
//    $arr_for_js['y']=$value;
}

echo  json_encode($arr_for_js);

//echo '<pre>',print_r(json_encode($arr_for_js),1),'</pre>';


//echo '<pre>',print_r($arr[$arr_key],1),'</pre>';

//$myJSON = json_encode($arr[$arr_key]);
//
//echo '<pre>',print_r($myJSON,1),'</pre>';

//echo '<pre>',print_r($arr_key,1),'</pre>';
//
//echo '<pre>',print_r($arr,1),'</pre>';
//echo "ajax ok";