<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index() {
        $pokedexs = Pokedex::all();
        return view('pokedexs.index', compact('pokedexs'));
    }

    public function create() {
        return view('pokedexs.create');
    }

  public function store(Request $request) 
{
    
    $request->validate([
        'name'      => 'required|max:255',
        'type'      => 'required',
        'hp'        => 'nullable|numeric',
        'attack'    => 'nullable|numeric',
        'defense'   => 'nullable|numeric',
        'image_url' => 'nullable', 
    ]);

    
    Pokedex::create($request->all());

    return redirect()->route('pokedexs.index')->with('success', 'บันทึกข้อมูล Pokemon สำเร็จ!');
}

    public function edit($id) {
        $pokedex = Pokedex::findOrFail($id);
        return view('pokedexs.edit', compact('pokedex'));
    }

    public function update(Request $request, $id) {
        $pokedex = Pokedex::findOrFail($id);
        $pokedex->update($request->all());
        return redirect()->route('pokedexs.index')->with('success', 'แก้ไขเรียบร้อย');
    }

    public function destroy($id) {
        Pokedex::findOrFail($id)->delete();
        return redirect()->route('pokedexs.index')->with('success', 'ลบข้อมูลสำเร็จ');
    }
}