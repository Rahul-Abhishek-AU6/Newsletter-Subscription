<?php

namespace App\Http\Controllers;

use App\Models\Website;
use App\Models\Post;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function createPost(Request $request, Website $website)
    {
        $post = $website->posts()->create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        // Dispatch job to send emails to subscribers
        dispatch(new \App\Jobs\SendPostEmail($post));
        
        return response()->json(['message' => 'Post created successfully']);
    }

    public function subscribe(Request $request, Website $website)
    {
        $subscriber = $website->subscribers()->create([
            'email' => $request->input('email'),
        ]);

        return response()->json(['message' => 'Subscribed successfully']);
    }
}
