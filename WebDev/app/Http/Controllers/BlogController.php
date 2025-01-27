<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use Illuminate\Support\Facades\Schema;

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

    public function sampleModel(){
        // $blogs = DB::table('blogs')->get();
        $blogs = Blog::all();
        $categories = DB::table('categories')->get();
        return view('activity_9.dashboard', compact('blogs','categories'));
    }


        
    
    //     $blogs = DB::table('blogs')->insert([
    //         'title' => 'JusSASAtinedsadsadsaeee',
    //         'description' => 'BIEEEEEBEEEERRRR',
    //         'status_id' => '2',
    //         'category_id' => '3'
    //     ]);
    //     return $blogs;
    
    // }
    //     $blogs = DB::table('blogs')
    //         ->where('id', 1)
    //         ->update([
    //         'title' => 'Brian Supot',
    //         'description' => 'BIEEEEEBEEEERRRR',
    //         'status_id' => '2',
    //         'category_id' => '3'
    //     ]);
    //     return $blogs;
    // }

    // $blogs = DB::table('blogs')
    // ->where('id', 1)
    // ->delete();
    // return $blogs;
    // }
}
