<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;

class SendPostEmails extends Command
{
    protected $signature = 'send:post-emails';
    protected $description = 'Send emails to subscribers for new posts';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $posts = Post::with('website')->get();

        foreach ($posts as $post) {
            $subscribers = Subscriber::where('website_id', $post->website_id)->get();

            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new \App\Mail\PostNotificationMail($post));
            }
        }

        $this->info('Post emails sent successfully.');
    }
}
