<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Polls/Index', [
            'polls' => Poll::latest()
                ->with(['author', 'category'])
                ->withCount(['comments', 'votes', 'hearts'])
                ->simplePaginate()
                ->through(fn ($poll) => [
                    'id' => $poll->id,
                    'slug' => $poll->slug,
                    'title' => $poll->title,
                    'time' => $poll->created_at->toDayDateTimeString(),
                    'timeForHumans' => $poll->created_at->diffForHumans(),
                    'author' => $poll->author->name,
                    'category' => $poll->category->name,
                    'categoryColor' => $poll->category->color,
                    'votesCount' => $poll->votes_count,
                    'commentsCount' => $poll->comments_count,
                    'heartsCount' => $poll->hearts_count,
                ]),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Polls/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function show(Poll $poll)
    {
        return Inertia::render('Polls/Show', [
            'slug' => $poll->slug,
            'title' => $poll->title,
            'time' => $poll->created_at->toDayDateTimeString(),
            'timeForHumans' => $poll->created_at->diffForHumans(),
            'author' => $poll->author->name,
            'category' => $poll->category->name,
            'categoryColor' => $poll->category->color,
            'votes' => $poll->votes,
            'comments' => $poll->comments()
                ->with(['author', 'hearts'])
                ->withCount(['replies'])
                ->get()
                ->map(fn ($comment) => [
                    'id' => $comment->id,
                    'body' => $comment->body,
                    'author' => $comment->author->name,
                    'time' => $comment->created_at->toDayDateTimeString(),
                    'timeForHumans' => $comment->created_at->diffForHumans(),
                    'repliesCount' => $comment->replies_count,
                        'hearts' => $comment->hearts()
                            ->with(['hearter'])
                            ->get()
                            ->map(fn ($heart) => [
                                'hearter' => $heart->hearter->name,
                                'time' => $heart->created_at->toDayDateTimeString(),
                                'timeForHumans' => $heart->created_at->diffForHumans(),
                            ]),
                ]),
            'hearts' => $poll->hearts()
                ->with(['hearter'])
                ->get()
                ->map(fn ($heart) => [
                    'hearter' => $heart->hearter->name,
                    'time' => $heart->created_at->toDayDateTimeString(),
                    'timeForHumans' => $heart->created_at->diffForHumans(),
                ]),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function edit(Poll $poll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poll $poll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poll  $poll
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poll $poll)
    {
        //
    }
}
