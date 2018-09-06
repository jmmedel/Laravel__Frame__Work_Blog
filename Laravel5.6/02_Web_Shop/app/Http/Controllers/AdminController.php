<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



//  you need to add this manual in visual studio code this is not automatic
use App\Http\Requests\CreatePost;
// you need to add this manual 
use App\Post;
// you need to add this manual 
use App\Comment;
use App\Product;
use App\User;
// you need to add this manual 
use App\Charts\DashboardChart;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Requests\UserUpdate;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('checkRole:admin');
        $this->middleware('auth');
    }

    public function dashboard(){

       
        $chart = new DashboardChart;
        $days = $this->generateDateRange(Carbon::now()->subDays(30),Carbon::now());
        $post  = [];

        foreach ($days as $day){
            $post[] = Post::whereDate('created_at',$day)->count();
        }

        
        $chart->dataset('Post','line',$post);
        $chart->labels($days);
       

        return view('admin.dashboard',compact('chart'));

        

    }

    private function generateDateRange(Carbon $start_date , Carbon $end_date){

        $dates = [];
        for($date = $start_date; $date->lte($end_date); $date->addDay()){
            $dates[] = $date->format('Y-m-d');

        }
        return $dates;
    }

    public function comments(){

        $comments = Comment::all();
        return view('admin.comments',compact('comments'));
    }


    public function posts(){

        $posts = Post::all();
        return view('admin.posts',compact('posts'));
    }



    public function users(){

        $users = User::all();

        return view('admin.users',compact('users'));

    }



    public function postEditPost(CreatePost $request, $id){

        $post = Post::where('id',$id)->first();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->save();

        return back()->with('success','Post updated Successfully');
    }

    public function deletePost($id){

        $post = Post::where('id',$id)->first();
        $post->delete();
        
        return back();
    }


    public function postEdit($id){

        $post = Post::where('id',$id)->first();
        return view('admin.editPost',compact('post'));

    }

    public function deleteComment($id){

        $comment = Comment::where('id',$id)->first();
        $comment->delete();
       
        return back();

    }


    public function editUser($id){

        $user = User::where('id',$id)->first();
        return view('admin.editUser',compact('user'));

    }


    public function editUserPost(UserUpdate $request , $id){

        $user = User::where('id',$id)->first();
        $user->name = $request['name'];
        $user->email = $request['email'];


        if($request['author'] == 1){

            $user->author = true;
            
        } elseif($request['admin'] == 1){
            $user->admin = true;

        }

        $user->save();

        return back()->with('success','User updated successfully');

    }


    public function deleteUser($id){
        $user = User::where('id',$id)->first();
        $user->delete();

        return back();
    }




    public function products()
    {

        $products = Product::all();
        return view('admin.products',compact('products'));

    }

    public function newProduct()
    {

        return view('admin.newProduct');
    }

    public function newProductPost(Request $request)
    {   
        // this is how to make a Request with hardcoded 
        $this->validate($request,[
            'title' => 'required|string',
            'thumbnail' =>'required|file',
            'description' => 'required',
            'price' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/'

        ]);

        $product = new Product;
        $product->title = $request['title'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $thumbnail =  $request->file('thumbnail');

        $fileName = $thumbnail->getClientOriginalName();
        $fileExtension = $thumbnail->getClientOriginalExtension();

        $thumbnail->move('product-image','$fileName');
        $product->thumbnail = 'product-image/' . $fileName;
        $product->save();
        return back();
    }

    public function editProduct()
    {


    }

    public function editProuctPost(Request $request)
    {


    }

}
