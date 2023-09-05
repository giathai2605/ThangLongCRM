<?php

function uploadFile($nameFolder,$file) {
    $fileName = time().'_'.$file->getClientOriginalName();
    return $file->storeAs($nameFolder,$fileName,'public');
}

function formatDate($item){
    $date=date('d-m-Y',strtotime($item));
    return $date;
}

function formatDateWithoutTime($item){
    $date=date('Y-m-d',strtotime($item));
    return $date;
}