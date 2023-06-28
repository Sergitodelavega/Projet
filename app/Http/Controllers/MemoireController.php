<?php

namespace App\Http\Controllers;

use App\Models\Memoire;
use Illuminate\Http\Request;

class MemoireController extends Controller
{
    public function index(){
        $memoires = Memoire::all();
        return view('memoire.index', compact('memoires'));
    }

    public function show($id){
        $memoire = Memoire::findOrFail($id);
        return view('memoire.show', compact('memoire'));
    }
}
