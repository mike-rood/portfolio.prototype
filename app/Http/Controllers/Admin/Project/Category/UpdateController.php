<?php

namespace App\Http\Controllers\Admin\Project\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(Category $category) {
        return redirect()->route('admin.project.category.index');
    }
}
