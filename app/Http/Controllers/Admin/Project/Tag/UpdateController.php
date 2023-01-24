<?php

namespace App\Http\Controllers\Admin\Project\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Http\Requests\Admin\Project\Tag\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Tag $tag)
    {
        $data = $request->validated();
        $tag->update($data);
        return redirect()->route('admin.project.tag.index');
    }
}
