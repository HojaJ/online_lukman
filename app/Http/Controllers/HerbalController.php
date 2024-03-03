<?php

namespace App\Http\Controllers;

use App\Models\Herbal;
use Illuminate\Http\Request;

class HerbalController extends Controller
{
    public function index()
    {
        $datas = Herbal::latest()->get();
        return view('admin.herbal.index', compact('datas'));
    }

    public function create()
    {
    }

    public function show($id)
    {
    }

    public function store(Request $request)
    {
        try {
            Herbal::create([
                'title' => $request->title,
                'lang' => $request->lang,
                'description' => $request->description,
            ]);

            return redirect()->route('herbal.index')->with('success', __('Added'));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['message' => 'Error']);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = Herbal::find($id);

            $data->update([
                'title' => $request->title,
                'lang' => $request->lang,
                'description' => $request->description,
            ]);
            return redirect()->route('herbal.index')->with('success', __('Edited'));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['message' => 'Error']);
        }
    }

    public function edit($id)
    {
        $data = Herbal::find($id);
        return view('admin.herbal.edit', compact('data'));
    }

    public function destroy($id)
    {
        try {
            $data = Herbal::find($id);
            $data->delete();
            return redirect()->route('herbal.index')->with('success', __('Deleted'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}
