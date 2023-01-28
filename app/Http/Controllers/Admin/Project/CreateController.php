<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.project.create');
    }
}
