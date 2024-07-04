<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{


    public function index(){


        
        $posts = Post::all();
        return view ('blog',['posts'=>$posts]);
    }

    public function create(){
        return view('post.create');
    }

    public function store(Request $request){

        $title= request()->title;
        $description= request()->description;
        $us=Auth::user()->id;

        
        $newname = uniqid();
        $picture=$request->file('picture');
        $newname.=".".$picture->getClientOriginalExtension();
        $destinationPath = 'uploads';
        $picture->move($destinationPath,$newname);


        $post = new Post();
        $post->title = $title;
        $post->description = $description;
        $post->picture = $newname;
        $post->user_id = $us;
        




        if ($post->save()){
            return redirect()->back();
        }
        else{
            echo "error";
        }

        // Post::create([
        //     'title'=>$title,
        //     'description'=>$description,
        //     'picture'=>$newname,
            
        // ]);


    }

    public function destroy($postId){
        $post = Post::find($postId);
        $post->delete();

        //Post::where('id',$postId);

        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('post.edit',['post'=>$post]);
    }

    public function update($postId)
    {

       
        $title = request()->title;
        $description = request()->description;
        $post_creator = request()->post_creator;

        $newname = uniqid();
        $picture=request()->file('picture');
        $newname.=".".$picture->getClientOriginalExtension();
        $destinationPath = 'uploads';
        $picture->move($destinationPath,$newname);

//        dd($title,$description,$post_creator);
        $singlePostFromDb = Post::find($postId);
        $singlePostFromDb->update([
            'title'=>$title,
            'description'=>$description,
            'picture'=>$newname,
        ]);


        return to_route('posts.index');
    }
}
