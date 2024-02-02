<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaController extends Controller
{
    public function index()
    {
        return Inertia::render('Inertia/index', [
            'blogs' => InertiaTest::all()
        ]);
    }

    public function show($id)
    {
        return Inertia::render('Inertia/show', [
            'id' => $id,
            'blog' => InertiaTest::findOrFail($id)
        ]);
    }

    public function create()
    {
        return Inertia::render(('Inertia/create'));
    }

    public function store(Request $request)
    {
        $request->validate(([
            'title' => ['required', 'max:255'],
            'content' => ['required']
        ]));
        $inertiatest = new InertiaTest();
        $inertiatest->title = $request->title;
        $inertiatest->content = $request->content;
        $inertiatest->save();

        return to_route('inertia.index')
        ->with([
            'message' => '登録が完了しました。'
        ]);
    }

    public function delete($id)
    {
        $blog = InertiaTest::findOrFail($id);
        $blog->delete();

        return to_route('inertia.index')
        ->with(['message' => '削除しました。']);
    }
}
