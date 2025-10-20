<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;


class AdminController extends Controller
{
    



public function index()
{
    
    $post= Post::where('post_staus','=','active')->get();

    if(Auth::id())

        $post = Post::all();

        $usertype = Auth()->user()->usertype;

        if($usertype == 'user')
        {

           return view('home.homepage', compact('post')); 
        }

        else if($usertype == 'admin')
        {

            return view('admin.adminhome');
        }

        else
        {
            return redirect()->back();
        }


}


public function post_page()
{

    return view('admin.post_page');
}


/* ADD POST FUNCTION */

public function add_post(Request $request)
{

    $user = Auth()->user();

    $userid = $user->id;

    $name = $user->name;
    
    $usertype = $user->usertype;

    $post= new Post;

    $post->title = $request-> title;

    $post->description = $request-> description;

    $post->post_staus = 'active';

    $post->user_id = $userid;

    $post->name = $name;

    $post->usertype = $usertype;





/* These three lines of code to keep image in public folder */ 
     // ✅ Check if file exists before using it
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('postimage'), $imagename);
        $post->image = $imagename;
    }

/*And this for show us the images     */    
   

    $post->save();

    return redirect()->back()->with('message', 'Post created successfully!');
}


/* SHOW POST FUNCTION */

public function show_post()
{

    $post=Post::all();


        return view('admin.show_post',compact('post'));

}


public function delete_post($id)
{

         $post = Post::find($id);
         
         $post->delete();

        return redirect()->back()->with('message','Post Deleted');

}


public function edit_page($id)
{

        $post= Post::find($id);

        return view('admin.edit_page', compact('post'));

}


public function update_post(Request $request, $id)
{

    $data = Post::find($id);

    $data->title = $request->title;

    $data->description = $request->description;

    $image=$request->image;
    if($image)
    {

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $data->image= $imagename;

    }


    $data->save();

    return redirect()->back()->with('message','Post Updated');


}


public function accept_post($id)
{
    $data= Post::find($id);

    $data-> post_staus='active';

    $data->save();

    return redirect()->back()->with('message','Post Status chanaged to active');

}


public function reject_post($id)
{
    $data= Post::find($id);

    $data-> post_staus='rejected';

    $data->save();

    return redirect()->back()->with('message','Post Status chanaged to rejected');

}


}