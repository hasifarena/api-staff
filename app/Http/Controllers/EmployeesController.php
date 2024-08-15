<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeesController extends Controller
{

    // public function loginEmployee(Request $request)
    // {

    //     if ((!isset($request->username) || $request->username == "") || (!isset($request->password) || $request->password == "")) {
    //         return response()->json(['status' => 'error', 'message' => 'input error.'], 404);
    //     }

    //     // $results = DB::select("SELECT * FROM employees WHERE username = :names", ['names' => $request->username]);
    //     $employee = json_decode(User::where('username', $request->username)->get());

    //     if (empty($employee)) {
    //         return response()->json(['status' => 'error', 'message' => 'username not found.'], 404);
    //     }

    //     $hashPwd = sha1($request->password);
    //     $hashPwd2 = md5($hashPwd);
    //     $hashPwd3 = crypt($hashPwd2, 'ag');

    //     if ($request->username == $employee[0]->username && $hashPwd3 == $employee[0]->password) {

    //         $update_token = $employee[0]->username . substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 1, 32);
    //         USER::where('username', $request->username)->update(['token' => $update_token]);

    //         return response()->json([
    //             'status' => 'success',
    //             'api_token' => $update_token,
    //             'name' => $employee[0]->username,
    //             'position' => $employee[0]->position
    //         ], 200);
    //     } else {
    //         return response()->json(['status' => 'error', 'message' => 'wrong username or password.'], 404);
    //     }
    // }

    public function loginUser(Request $request)
    {
        return response()->json(['status' => 'error', 'message' => $request], 404);
    }

    protected function responseRequestError($message = 'Bad request', $statusCode = 200)
    {
        return response()->json(['status' => 'error', 'error' => $message], $statusCode)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
    }
}
