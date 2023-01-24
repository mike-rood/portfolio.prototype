<?php

namespace App\Http\Controllers\Admin\Project\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class EditController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('admin.project.tag.edit', compact('tag'));
    }
}
