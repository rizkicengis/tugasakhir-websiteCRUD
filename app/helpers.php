<?php

use App\Models\setting;

function get_setting_value($key){

    $data = setting::where('key', $key)->first();
    if (isset($data->value)){
        return $data->value;
    } else {
        return 'empty';
    }
}