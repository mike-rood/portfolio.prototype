<?php

namespace App\Http\Controllers\Admin\Project\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke () {
        return view('admin.project.category.create');
    }
}
