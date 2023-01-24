<?php

namespace App\Http\Controllers\Admin\Project\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\Admin\Project\Category\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(Category $category, UpdateRequest $request)
    {
        $data = $request->validated();
        $category->update($data);
        return view('admin.project.category.show', compact('category'));
    }
}
