<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function create() {
        return view( "create" );
    }

    public function store( Request $request ) {
        $validated = $request->validate( [
            'name'        => 'required',
            'description' => 'required',
            'image'       => 'required|mimes:jpg,jpeg,png',
        ] );

        $imageName = null;

        if ( isset( $request->image ) ) {
            // store image to public folder
            $imageName = time() . "." . $request->image->extension();
            $request->image->move( public_path( "image" ), $imageName );
        }

        $post = new Post;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->image = $imageName;

        $post->save();

        return redirect()->route( "home" )->with( "success", "post created successfully!!" );
    }

    public function editData($id){
        $post = Post::findOrFail($id);
        return view("edit", ["ourPost" => $post]);
    }

    public function updateData($id, Request $request){
        $post = Post::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,webp'
        ]);



        $post->name = $request->name;
        $post->description = $request->description;

        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path("image"), $imageName);
            $post->image = $imageName;
        }

        $post->save();

        return redirect()->route("home")->with("success", "Post updated successfully!!");
    }

    public function deleteData($id){
        $post = Post::findOrFail($id);

        $post->delete();
        return redirect()->route("home")->with("success", "post deleted successfully!!");
    }
}
