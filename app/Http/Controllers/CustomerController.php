<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function first()
    {
        return DB::connection('mysql2')->table('IMS.users')->get();
    }
}
