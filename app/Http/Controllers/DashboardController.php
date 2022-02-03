<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller {

    /**
     * Resources
     * 001. Dashboard
     * 002. Profile
     * 003. Activities
     * 004. Notifications
     * 005. Role Permission
     * 006. Maintenance
     * 007. Admins
     * 008. Settings
     */
    /* 001. Dashboard */

    public function index() {
        $data = array();
        $data['title'] = 'Dashboard';
        
        $data['permissions'] = 'superadmin';
        $data['unseen_notifications'] = '0';

 
        $data['configurations'] = $this->data['configurations'];
        $data['home'] = view('dashboard.home', $data);
        return view('dashboard.master', $data);
    }
    
    
        /* 002. Settings */

    public function settings() {
        $data = array();
        $data['title'] = 'Settings';
        $data['settings'] = $this->data['configurations'];
        $data['home'] = view('dashboard.settings', $data);
        return view('dashboard.master', $data);
    }

    public function update_settings() {
        foreach ($_POST as $key => $value) :
            DB::table('configurations')
                    ->where('config_name', $key)
                    ->update(array('config_setting' => $value));
        endforeach;

        echo 'success';
        exit();
    }
}