<?php
/**
 * Created by PhpStorm.
 * User: Nikhil
 * Date: 16-01-2017
 * Time: 03:02 AM
 */

namespace App\Http\Controllers\Login;

use App\Http\Controllers\AbstractBaseController;
use Carbon\Carbon;
use Session;

class UserLoginController extends AbstractBaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function loginView()
    {
        if (!empty(Session::has('user_login')))
        {
            return redirect('/');
        }

        return view('pages.login');
    }

    public function login()
    {
        $username = \Request::input('username');
        $password = \Request::input('password');

        $db_check = \DB::table('users')
                        ->where('email', $username)
                        ->where('password', md5($password))
                        ->first();


        if (!empty($db_check))
        {
            $user_array = [
                'name' => $db_check->name,
                'email' => $db_check->email,
                'user_id' => $db_check->id,
                'privilege_level' => $db_check->privilege,
            ];

            Session::put('user_login', $username);
            Session::put('user_details', $user_array);

            \DB::table('debug_info')
                ->insert([
                    'debug_type_id' => 1, //Info,
                    'message' => "User Login with: u: $username: id: " . $db_check->id,
                    'debug_msg_status' => 1
                ]);

            return redirect("");
        }
        else
        {

            \DB::table('debug_info')
                    ->insert([
                        'debug_type_id' => 3, //Un Auth,
                        'message' => "User Tried to Login with: u: $username : p: $password",
                        'debug_msg_status' => 1
                    ]);

            return view("pages.login", [ 'error' => 'Auth Not Valid' ]);
        }

    }


}