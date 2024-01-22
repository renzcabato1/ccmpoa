<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Event;
use App\Marketplace;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // dd();
        $posts = Post::with('user', 'likes.user', 'comments.user','attachments','histories','comments.histories','user.userAvatarFinal')->orderBy('created_at', 'desc')->get();
        // dd($posts);
        $events = Event::with('participant.user')
        ->where('status', 'active')
        ->orderBy('date', 'desc')
        ->take(5)
        ->get();
        //  dd($events->all());
        $marketplaces = Marketplace::with('user')->orderBy('created_at', 'desc')
        ->take(5)
        ->get();
        return view(
            'main.main-feed',
            array(
                'header' => 'main',
                'posts' => $posts,
                'events' => $events,
                'marketplaces' => $marketplaces,
            )
        );
       
    }
}
