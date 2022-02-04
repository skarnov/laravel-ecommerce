<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Configuration;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function __construct() {
        foreach (Configuration::all() as $value) {
            $configurations[$value->config_name] = $value->config_setting;
        }

        $this->data['config'] = $configurations;
        
        
        
        
        
        

        /* Set Time Zone */
        date_default_timezone_set($configurations['time_zone']);
    }
}