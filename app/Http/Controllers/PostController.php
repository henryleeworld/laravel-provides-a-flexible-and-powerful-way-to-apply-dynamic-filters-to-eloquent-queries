<?php

namespace App\Http\Controllers;

use App\Filters\PostFilter;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        $userId = 1;
        $categoryId = 1;
        $filter = new PostFilter(new Request(['user' => $userId, 'category' => $categoryId]));
        echo __('Filter posts with a user ID of :user_id and a category ID of :category_id.', ['user_id' => $userId, 'category_id' => $categoryId]) . PHP_EOL;
        echo __('Total number of filtered posts: :total.', ['total' => Post::filter($filter)->count()]) . PHP_EOL;
    }
}
