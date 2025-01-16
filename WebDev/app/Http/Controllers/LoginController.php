<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('four');
    }

    public function loginSubmit(Request $request){
        Log::info("Pumasok Ako Dito");
        try {
            $userName = $request->input('email');
            $password = $request->input('password');
            Log::info('UserName: ' . $userName);
            Log::debug("Trying Login Pass: " . $password);

        } catch (\Exception $e) {
            Log::error('Error: ' . $e->getMessage());
        }
        Log::info('Lumabas Ako Dito');
    }
}
