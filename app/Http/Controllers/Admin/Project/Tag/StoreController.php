<?php

namespace App\Http\Controllers\Admin\Project\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Http\Requests\Admin\Project\Tag\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::firstOrCreate($data);
        return redirect()->route('admin.project.tag.index');
    }
}
