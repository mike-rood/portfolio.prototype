<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke() {

        return view('admin.index');
    }
}
