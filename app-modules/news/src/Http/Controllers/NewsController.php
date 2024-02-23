<?php

namespace Modules\News\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\News\Models\News;

class NewsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $news = News::query()->paginate(5);
        return view('news::index', compact('news'));
    }

    public function show()
    {
        // TODO: Implement show() method.
    }
}