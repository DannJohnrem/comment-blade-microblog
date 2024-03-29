<?php

namespace App\Http\Controllers;

use App\Http\Requests\Pages\StoreCommentRequest;
use App\Http\Requests\Pages\UpdateCommentRequest;
use App\Models\Comment;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // dd(Chirp::with('user')->latest()->get());

        return view('pages.comment.index',[
            "comments" => Comment::with('user')
                            ->latest()
                            ->paginate(3),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request): RedirectResponse
    {
        $request->user()->comments()->create($request->validated());

        return redirect(route('comment.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment): View
    {
        Gate::authorize('update', $comment);


        return view('pages.comment.edit', [
            'comment' => $comment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment): RedirectResponse
    {
        Gate::authorize('update', $comment);

        $comment->update($request->validated());

        return redirect()->route('comment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment): RedirectResponse
    {
        Gate::authorize('delete', $comment);

        $comment->delete();

        return redirect(route('comment.index'));
    }
}
