<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Comment;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BlogController extends Controller
{
    public function index(Request $request){
        $blogs = Blog::orderBy('id', 'desc')
        ->limit(4)->get(['id', 'title', 'excerpt', 'category_id', 'featuredImage', 'created_at']);
        return view('home')->with(['blogs' => $blogs]);
    }

    public function getCat(){
        return Category::orderBy('id', 'asc')->get();
    }

    public function blogs(Request $request){
        $blogs = Blog::orderBy('id', 'desc')
        ->select(['id', 'title', 'excerpt', 'category_id', 'featuredImage', 'created_at'])->paginate(4);
        return view('blogs')->with(['blogs' => $blogs]);
    }

    public function singleBlog (Request $request, $id){
        $blog = Blog::where('id', $id)
        ->first(['id', 'title', 'body', 'featuredImage', 'category_id', 'created_at']);
        return view('singleBlog')->with(['blog' =>$blog]);
    }
    public function getBlogComments(Request $request, $id){
        return Comment::orderBy('id', 'asc')->where('blog_id', $id)->get();
    }

    public function saveComment(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'blog_id' => 'required'
        ]);
        return Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'blog_id' => $request->blog_id,
        ]);
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

    public function sendEmail(Request $request){
        $mail = $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        Mail::to('test@test.com')->send(new ContactMail($mail));
        return redirect('/contact')->with('message', 'Your email has been sent successfuly !');
    }

    public function singleCat(Request $request, $categoryName){
        $blogs = Blog::orderBy('id', 'desc')->where('category_id', $categoryName)
        ->select(['id', 'title', 'excerpt', 'category_id', 'featuredImage', 'created_at'])->paginate(4);
        return view('category')->with(['blogs' =>$blogs, 'categoryName' => $categoryName]);
    }

    public function categories(Request $request){
        $categories = Category::orderBy('id', 'asc')->select(['id', 'name'])->paginate(2);
        return view('categories')->with(['categories' => $categories]);
    }

    public function categoryBlogIndex(Request $request, $categoryName){
        $blogs = Blog::orderBy('id', 'desc')->where('category_id', $categoryName)->limit(3)
        ->get(['id', 'title', 'excerpt', 'category_id', 'featuredImage', 'created_at']);
        return $blogs;
    }

    public function search(Request $request){
        $str = $request->str;
        $blogs = Blog::orderBy('id', 'desc')
        ->select(['id', 'title', 'excerpt', 'body', 'category_id', 'featuredImage', 'created_at']);
        $blogs->when($str != '', function($q) use($str){
            $q->where('title', 'LIKE', "%{$str}%")
            ->orWhere('category_id', 'LIKE', "%{$str}%");
        });
        $blogs = $blogs->paginate(3);
        $blogs= $blogs->appends($request->all());
        return view('blogs')->with(['blogs' => $blogs]);
    }
}
