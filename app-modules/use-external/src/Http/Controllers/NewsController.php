<?php

namespace Modules\UseExternal\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\News\Actions\CreateNewsAction;
use Modules\News\Models\News;

class NewsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $news = News::query()->paginate(5);
        return view('news::index', compact('news'));
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('news::create');
    }

    public function store(Request $request, CreateNewsAction $action): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:100',],
            'content' => ['required', 'string', 'max:1000',],
        ]);

        $news = $action->handle(
            title: $request->get('title'),
            content: $request->get('content')
        );

        return redirect()->route('news.show', compact('news'));
    }

    public function show(string $news): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        // FIXME: Route binding is not working
        $news = News::query()->findOrFail($news);
        return view('news::show', compact('news'));
    }
}
