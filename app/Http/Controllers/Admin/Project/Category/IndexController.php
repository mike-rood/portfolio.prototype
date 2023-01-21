<?php

namespace App\Http\Controllers\Admin\Project\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.project.category.index', compact('categories'));
    }
}
