<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Worker;
use App\Traits\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WorkerController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        $datas = Worker::latest()->get();
        return view('admin.worker.index', compact('datas','categories'));
    }

    public function create(){}
    public function show($id){}

    public function store(Request $request)
    {
        $image = 'null';
        if ($request->image){
            $image = Support::storeFile($request->image, $request->name_tm, 'images');
        }
        try {
            Worker::create([
                'first_name'            => $request->first_name,
                'last_name'             => $request->last_name,
                'category_id'           => $request->category_id,
//                'profession_tm'         => $request->profession_tm,
//                'profession_ru'         => $request->profession_ru,
//                'profession_en'         => $request->profession_en,
                'working_hours_start'   => $request->working_hours_start,
                'working_hours_end'     => $request->working_hours_end,
                'image'      => $image
            ]);

            return redirect()->route('worker.index')->with('success', __('Added'));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['message' => 'Error']);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = Worker::find($id);
            $image = $data->image;
            if ($request->image){
                File::delete($data->image);
                $image = Support::storeFile($request->image, $request->name_tm, 'images');
            }
            $data->update([
                'first_name'            => $request->first_name,
                'last_name'             => $request->last_name,
                'category_id'           => $request->category_id,
//                'profession_tm'         => $request->profession_tm,
//                'profession_ru'         => $request->profession_ru,
//                'profession_en'         => $request->profession_en,
                'working_hours_start'   => $request->working_hours_start,
                'working_hours_end'     => $request->working_hours_end,
                'image'      => $image
            ]);
            return redirect()->route('worker.index')->with('success', __('Edited'));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['message' => 'Error']);
        }
    }

    public function edit($id)
    {
        $categories = Category::latest()->get();
        $data = Worker::find($id);
        return view('admin.worker.edit', compact('data','categories'));
    }

    public function destroy($id)
    {
        try{
            $data = Worker::find($id);
            File::delete($data->image);
            $data->delete();
            return redirect()->route('worker.index')->with('success', __('Deleted'));
        }
        catch(\Exception $e){
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}
