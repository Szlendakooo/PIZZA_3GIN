<?php
    $pizza=array(   
        0=>array(   
            "img"=>"zupa2.png",
            "name"=>"rosol",
            "date"=>"2022-04-25"),
        1=>array(   
            "img"=>"zupa.png",
            "name"=>"owsianka",
            "date"=>"2022-03-28"),
        2=>array(   
            "img"=>"zupa2.png",
            "name"=>"pomidorowa",
            "date"=>"2022-03-12"),
        3=>array(   
            "img"=>"zupa3.png",
            "name"=>"burakowa",
            "date"=>"2022-03-18"),
        4=>array(   
            "img"=>"zupa4.png",
            "name"=>"miodowa",
            "date"=>"2022-06-01")
               
        );
    foreach($pizza as $i){
        echo $i["name"] ." ". "<br>";
        echo '<img src="'.$i['img'].'"/>'."<br>";
        echo $i["date"] . " "."<br>";
    }
?>