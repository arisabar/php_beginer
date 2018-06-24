<?php
    $array = array(123,"kdfd",4545,"joko",3.3,"bla");
    $kata = array(
            "a" => "andika",
            "b" => "budi",
            "c" => "candra"
    );
    $array[4]=3.5;
    $array[99]=100;

    $array[]="array baru";

    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo $kata["b"];
    
    echo "<pre>";
    print_r($kata);
    echo "</pre>";

    echo "$kata[a]";
?>