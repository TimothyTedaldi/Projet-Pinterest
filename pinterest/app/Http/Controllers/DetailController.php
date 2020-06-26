<?php

namespace App\Http\Controllers;

use App\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('details.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => ['caption'],
            'description' => ['description'],
            'url' => ['require', 'url'],
            'image' => ['require', 'image']
        ]);

        $imagePath = request('image')->store('img', 'public');

        Detail::create([
            'caption' => $data['caption'],
            'description' => $data['description'],
            'url' => $data['url'],
            'image' => $imagePath,
        ]);

        return redirect()->route('profile.show', ['user' => auth()->user()]);
    }

}
