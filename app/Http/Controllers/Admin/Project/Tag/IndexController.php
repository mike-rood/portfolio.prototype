<?php

namespace App\Http\Controllers\Admin\Project\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tags = Tag::all();
        return view('admin.project.tag.index', compact('tags'));
    }
}
