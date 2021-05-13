<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\V_LPN_ACTIVEEMP_KWUNJAI;

class LpnController extends Controller
{
    function lpnEmployees()
    {
        return $employee = DB::table('V_LPN_ACTIVEEMP_KWUNJAI')->get();
    }
    function find_lpnEmployees($id = null)
    {
        $employee = DB::table('V_LPN_ACTIVEEMP_KWUNJAI')->where('EM_CODE', $id)->get();
        if ($id != 'EM_CODE') {
            echo 'The number is not valid';
        }
        return $employee;
    }
}
