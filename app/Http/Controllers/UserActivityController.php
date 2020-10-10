<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserLogModel;
use Shetabit\Visitor\Traits\Visitor;

class UserActivityController extends Controller
{
    //

    public function index(Request $request)
    {
        //manual logging
        //visitor()->visit();
        $users = User::online()->get();
        //dd($users);
        $data = [
            'users' => $users
        ];
        return view('user.onlineUsersViewNormal', $data);
    }

    public function userLogs(Request $request){
        $logs = UserLogModel::orderBy('created_at','DESC')->get();
        //dd($logs);

        $data = [
            'logs' => $logs
        ];

        return view('log.logs',$data);
    }
}
