<?php

namespace App\Http\Controllers\Widget;

use App\Facades\Base\WidgetPackFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\WidgetStoreRequest;
use App\Models\Pack;
use App\Models\Widget;
use App\Traits\PackageTrait;
use Illuminate\Http\Request;
use Exception;

class WidgetController extends Controller
{
    use PackageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $packs = Pack::query()->where('widget_id', $request->widget_id)->get();
        return view('widgets')->with(['packs' => $packs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WidgetStoreRequest $request)
    {
        try {
            $amount = $request->amount;
            $widget = Widget::find($request->widget_id);
            $packs = $widget->packs()->get();
            $pack_sizeses = $packs->pluck('size');
            $packages = WidgetPackFacade::calculate($pack_sizeses, $amount);

            return view('widgets')->with(['packages' => $packages['data'], 'amount' => $amount, 'packs' => $packs]);
        }
        catch (Exception $exception){
            return view('errors.500')->with(['message' => $exception->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
