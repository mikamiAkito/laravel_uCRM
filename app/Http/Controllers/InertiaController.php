<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class InertiaController extends Controller
{
    public function index()
    {
        return Inertia::render('Inertia/index');
    }

    public function show($id)
    {
        return Inertia::render('Inertia/show', [
            'id' => $id
        ]);
    }
}
