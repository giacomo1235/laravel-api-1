<?php

namespace App\Http\Controllers\Api;

use App\Tag;
use App\User;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MetadataController extends Controller
{
    public function index(Request $request) {
        return response()->json([
            // 'categories'    => Category::all()->pluck('name'),
            // 'tags'          => Tag::all()->pluck('name'),
            // 'users'         => User::all()->pluck('name'),

            'categories'    => Category::all(['id', 'name']),
            'tags'          => Tag::all(['id', 'name']),
            'users'         => User::all(['id', 'name']),
        ]);
    }
}
