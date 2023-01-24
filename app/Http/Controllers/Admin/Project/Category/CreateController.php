<?php

namespace App\Http\Controllers\Admin\Project\Category;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.project.category.create');
    }
}
