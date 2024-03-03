<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Herbal;
use App\Models\Worker;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Request as RequestModel;


class FrontController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::latest()->get();
        return view('user.index', compact('categories'));
    }

    public function herbal(Request $request)
    {
        $datas =  Herbal::where('lang', app()->getLocale())->get();
        return view('user.herbal', compact('datas'));
    }

    public function herbal_show(Request $request, Herbal $herbal)
    {
        return view('user.herbal_show', compact('herbal'));
    }

    public function search(Request $request)
    {
        if (app()->getLocale() === 'ru'){
            return view('html.search.indexru');
        }elseif (app()->getLocale() === 'en'){
            return view('html.search.indexen');
        }else{
            return view('html.search.index');
        }
    }

    public function diseases(Request $request)
    {
        if (app()->getLocale() === 'ru'){
            return view('html.diseases.indexru');
        }elseif (app()->getLocale() === 'en'){
            return view('html.diseases.indexen');
        }else{
            return view('user.diseases');
        }
    }

    public function symptoms(Request $request)
    {
        if (app()->getLocale() === 'ru'){
            return view('html.symptoms.indexru');
        }elseif (app()->getLocale() === 'en'){
            return view('html.symptoms.indexen');
        }else{
            return view('user.symptoms');
        }
    }

    public function diagnosis(Request $request)
    {
        return view('user.diagnosis');
    }


    public function worker_show(Request $request, Worker $worker)
    {
        $events = [];

        $appointments = Appointment::where('worker_id', $worker->id)->with(['worker', 'user'])->get();

        foreach ($appointments as $appointment) {
            if (!$appointment->start_time) {
                continue;
            }

            $events[] = [
                'title' => __("Booked"),
                'start' => $appointment->start_time,
            ];
        }

        return view('user.worker', compact('worker','events'));
    }

    public function request_post(Request $request)
    {
        try {
            RequestModel::create([
                'start_time'            => Carbon::make($request->start_time),
                'finish_time'           => Carbon::make($request->finish_time),
                'worker_id'             => $request->worker_id,
                'user_id'               => auth()->user()->id,
            ]);

            return redirect()->route('index')->with('success', __('Sent'));
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['message' => 'Error']);
        }
    }
}
