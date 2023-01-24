<?php

namespace App\Http\Controllers\Admin\Project\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('admin.project.category.edit', compact('category'));
    }
}
