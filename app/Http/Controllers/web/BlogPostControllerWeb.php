<?php

namespace App\Http\Controllers\web;

use Helper;
use Illuminate\Http\Request;
use App\Models\BlogPost_Provider_web;
use App\Http\Controllers\Controller;
use App\Models\BlogCategory_Provider;
use Illuminate\Support\Facades\Validator;

class BlogPostControllerWeb extends Controller
{

    public function blogPostListData(Request $request)
    {
        $data = $request->all();
        $data['blogPosts'] = BlogPost_Provider_web::join('blog_categories', 'blog_categories.id', '=', 'blog_posts.category_id')
            ->select('blog_posts.*', 'blog_categories.category_name')
            ->get();
        return response()->json($data);
    }

    public function blogSinglePost(Request $request, $id)
    {
        $data = $request->all();
        $data['blogSinglePost'] = BlogPost_Provider_web::join('blog_categories', 'blog_categories.id', '=', 'blog_posts.category_id')
            ->select('blog_posts.*', 'blog_categories.category_name')
            ->where('blog_posts.id', $id)
            ->first();
        return response()->json($data);
    }
}
