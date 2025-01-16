<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = [
            [
                'title' => 'NewJeans1',
                'body' => 'NewJeans1',
                'status' => '1'
            ],
            [
                'title' => 'NewJeans2',
                'body' => 'NewJeans2',
                'status' => '0'
            ],
            [
                'title' => 'Title three',
                'body' => 'NewJeans3',
                'status' => '1'
            ]
            ]; 
            return $blogs;
    }




    public function retrieveBlogs(){
        Log::info('Papasok Na AKo');
        try{
            $blogs = [
                [
                    'title' => 'NewJeans1',
                    'body' => 'NewJeans1',
                    'status' => '1'
                ],
                [
                    'title' => 'NewJeans2',
                    'body' => 'NewJeans2',
                    'status' => '0'
                ],
                [
                    'title' => 'Title three',
                    'body' => 'NewJeans3',
                    'status' => '1'
                ]
            ]; 
            Log::notice("Blogs:",$blogs);
   

        }catch(\Exception $e){
            log::error('Error:'.$e->getMessage());
  
        }
        Log::info('Exit Na AKo');
        return view('home1',compact('blogs'));
    }

}