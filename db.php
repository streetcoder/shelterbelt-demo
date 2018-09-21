<?php

$string = file_get_contents("ring_growth.json");

$arr=json_decode($string,true);

// this part for database system

//    $dbconn = pg_connect("host=sksoildb.usask.ca port=5432 dbname=shelterbelt user=postgres password=SkSoilDB")
//    or die('Could not connect: ' . pg_last_error());
//
//    $query = 'SELECT * FROM "public"."ring_growth" LIMIT 200';
//    $result = pg_query($query) or die('Query failed: ' . pg_last_error());
//
//    $arr = pg_fetch_all($result);

    $r_site = $_GET['site'];
    $r_climate = $_GET['climate'];
    $r_species = $_GET['species'];

if($r_site =='' and $r_climate =='' and $r_species ==''){
    echo json_encode(array());
}else{

    function search_item($site, $scenario, $species, $array) {
        foreach ($array as $key => $val) {
            if ($val['site'] === $site && $val['Scenario'] === $scenario && $val['species'] === $species ) {
                return $key;
            }
        }
        return null;
    }

    $arr_key = search_item($r_site,$r_climate,$r_species, $arr);

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
    }
    echo  json_encode($arr_for_js);
}
