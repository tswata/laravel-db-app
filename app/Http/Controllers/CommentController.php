<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect()->route('customers.index');
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $comment->comment = $request->input('comment');
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect()->route('customers.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('customers.index');
    }
}
