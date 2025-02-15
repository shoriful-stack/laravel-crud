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
}
