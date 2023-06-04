<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return response()->json($comments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contributor_name' => 'required|string',
            'email' => 'required|email',
            'text' => 'required|string',
            'article_id' => 'required|exists:articles,id',
        ]);


        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $commentData = $request->only(['contributor_name', 'email', 'text', 'article_id']);
        $commentData['publication_date'] = Carbon::now();

        $comment = Comment::create($commentData);
        return response()->json($comment, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return response()->json($comment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
