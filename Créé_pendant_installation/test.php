<?php
$list = array('titi','toto','tata');
function helloName ($list){
  foreach($list as $id => $name){
    echo "hello ".$name.", you're the number ".$id."\n";
  }
}

// var_dump($maliste);
