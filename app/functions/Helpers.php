<?php

function dd($data){
    print_r($data);
}

function hello(){
    echo "hello";
}
function json($data){
    header('Content-Type: application/json');
    echo json_encode($data);
}

