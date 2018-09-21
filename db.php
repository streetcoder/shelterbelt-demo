<?php
    //$db_connection = pg_connect("host=sksoildb.usask.ca dbname=shelterbelt user=USERNAME password=PASSWORD");

    $dbconn = pg_connect("host=sksoildb.usask.ca port=5432 dbname=shelterbelt user=postgres password=SkSoilDB")
    or die('Could not connect: ' . pg_last_error());

    // u admin or pgadmin3 p SkSoilServer2016  and p SkSoilDB

    // Performing SQL query
    $query = 'SELECT * FROM "public"."ring_growth" LIMIT 200';
    $result = pg_query($query) or die('Query failed: ' . pg_last_error());

    $arr = pg_fetch_all($result);

    print_r($arr);