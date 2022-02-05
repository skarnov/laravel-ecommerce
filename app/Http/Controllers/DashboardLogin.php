<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardLogin extends Controller {

    public function index() {
        $data = array();
        $data['title'] = 'Dashboard Login';
        $data['config'] = $this->data['config'];
        return view('dashboard.login', $data);
    }
    
    public function check(Request $request) {
        
               $email = $request->input('email');
        $password = $request->input('password');
        
        
        
        d($email);
        
        
    }
    
}