<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    public function home()
    {
        $latest = Accessory::orderByDesc('id')->take(4)->get();

        return view('home', compact('latest'));
    }

    public function index(Request $request)
    {
        $types = Accessory::select('type')->distinct()->orderBy('type')->pluck('type');
        $selectedType = $request->query('type');

        $accessories = Accessory::when($selectedType, function ($query, $type) {
            $query->where('type', $type);
        })->orderBy('id')->get();

        return view('accessories.index', compact('accessories', 'types', 'selectedType'));
    }

    public function show($id)
    {
        $accessory = Accessory::findOrFail($id);

        return view('accessories.show', compact('accessory'));
    }
}
