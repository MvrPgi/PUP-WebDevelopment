<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Laravel\Ui\Presets\React;

class BlogController extends Controller
{
    // public function index(Request $request){
    //     $blogs = Blog::with('category')
    //     ->orderBy('created_at','desc')
    //     ->get();

    //     return $blogs;
    // }
    // public function index(Request $request){
    //     $blogs = Blog::with('status')
    //     ->orderBy('created_at','desc')
    //     ->get();

    //     return $blogs;
    // }

    public function index(Request $request)
    {
        $categories = Category::with('blog')
            ->get();
        return $categories;
    }




    public function retrieveBlogs()
    {
        Log::info('Papasok Na AKo');
        try {
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
            Log::notice("Blogs:", $blogs);
        } catch (\Exception $e) {
            log::error('Error:' . $e->getMessage());
        }
        Log::info('Exit Na AKo');
        return view('home1', compact('blogs'));
    }



    // public function BlogsOneToOne()
    // {
    //     $blogs = Blog::all();
    //     return view('activity_9.dashboard', compact('blogs'));
    // }




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

    public function sampleModel()
    {
        // $blogs = DB::table('blogs')->get();
        $blogs = Blog::with('category', 'stats')
        ->orderBy('created_at', 'desc')
        ->get();

        $categories = DB::table('categories')->get();
        $statuses = DB::table('statuses')->get();
        return view('activity_9.dashboard', compact('blogs', 'categories', 'statuses'));
    }

    public function createBlogData(Request $request)
    
    {
        $result = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
            'category_id' => $request->input('category')
        ];
        
        $response = Blog::create($result);
        $data = "ERROR";
        if ($response) {
            $data = Blog::with('category', 'stats')->find($response->id);    
        }
        return $data;
    }
}
