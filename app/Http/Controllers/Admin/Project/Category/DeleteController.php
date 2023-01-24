<?php

namespace App\Http\Controllers\Admin\Project\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class DeleteController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.project.category.index');
    }
}
