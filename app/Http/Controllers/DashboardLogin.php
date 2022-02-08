<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\Admin;
use App\Models\Activity;

class DashboardLogin extends Controller {

    /**
     * Resources
     * 001. Dashboard Login Page
     * 002. Check Dashboard Login
     * 003. Dashboard Logout
     */
    /* 001. Dashboard Login Page */

    public function index() {
        $data = array();
        $data['title'] = 'Dashboard Login';
        $data['config'] = $this->data['config'];
        return view('dashboard.login', $data);
    }

    /* 002. Check Dashboard Login */

    public function check(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');

        $admin_info = Admin::where('admin_email', $email)->first();

        if ($admin_info):
            if (Hash::check($password, $admin_info['admin_password'])) :
                $sdata = [
                    'admin_id' => $admin_info['admin_id'],
                    'user_name' => $admin_info['user_name'],
                ];
                session($sdata);

                $activity = new Activity;
                $activity->fk_admin_id = $sdata['admin_id'];
                $activity->activity_type = 'success';
                $activity->activity_name = 'Admin Login Success';
                $activity->ip_address = getUserIpAddr();
                $activity->visitor_country = ip_info('Visitor', 'Country');
                $activity->visitor_state = ip_info('Visitor', 'State');
                $activity->visitor_city = ip_info('Visitor', 'City');
                $activity->visitor_address = ip_info('Visitor', 'Address');
                $activity->created_time = current_time();
                $activity->created_date = current_date();
                $activity->created_by = $sdata['admin_id'];
                $activity->save();

                
//                
//                d($admin_info);
//                
                
                return redirect('dashboard');
            else:

                $activity = new Activity;
                $activity->activity_type = 'warning';
                $activity->activity_name = 'Failed Login Attempt - Wrong Password';
                $activity->ip_address = getUserIpAddr();
                $activity->visitor_country = ip_info('Visitor', 'Country');
                $activity->visitor_state = ip_info('Visitor', 'State');
                $activity->visitor_city = ip_info('Visitor', 'City');
                $activity->visitor_address = ip_info('Visitor', 'Address');
                $activity->created_time = current_time();
                $activity->created_date = current_date();
                $activity->save();

                echo 'Wrong Password!';
                exit();
            endif;
        else:



            $activity = new Activity;
            $activity->activity_type = 'warning';
            $activity->activity_name = 'Failed Login Attempt - Wrong Email';
            $activity->ip_address = getUserIpAddr();
            $activity->visitor_country = ip_info('Visitor', 'Country');
            $activity->visitor_state = ip_info('Visitor', 'State');
            $activity->visitor_city = ip_info('Visitor', 'City');
            $activity->visitor_address = ip_info('Visitor', 'Address');
            $activity->created_time = current_time();
            $activity->created_date = current_date();
            $activity->save();

            echo 'Wrong Email!';
            exit();
        endif;
    }

    /* 003. Dashboard Logout */

    public function admin_logout() {
        Session::flush();

        return Redirect('dashboard-login');
    }

}
