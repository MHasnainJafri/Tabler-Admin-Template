<?php

namespace App\Http\Controllers\admin\modules\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileController extends Controller
{
    function settings(){
        return view('admin.profile.settings');
    }
}
