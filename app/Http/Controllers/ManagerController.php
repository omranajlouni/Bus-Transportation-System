<?php

namespace App\Http\Controllers;

use App\Models\Bus_Line;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Buses;

use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Buses::all();
        return view('manager.show_bus',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= Bus_Line::all();
        return view('manager.add_bus',compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'bus_num'=>'required|max:6',
            'driver_name'=>'required|max:30',
            'seats_num'=>'required',
        ]);
        $line=$request->line_name;
            $data= Bus_Line::where("line_name",'like',"%".$line."%")->first();

            $bus_line = $data->id;

        Buses::create([

            "bus_num"=>$request->bus_num,
            "line_name"=> $request->line_name,
            "driver_name"=>$request->driver_name,
            "seats_num"=>$request->seats_num,
            "line_id"=> $bus_line,
            "filled_seats"=>0,

        ]);

        return redirect()->route('bus.index');
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
        $data= Buses::find($id);
        return view('manager.edit_bus',compact('data'));
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
        $data= Buses::find($id);

           $data->bus_num=$request->bus_num;
           $data->line_name=$request->line_name;
           $data->driver_name= $request->driver_name;
           $data->seats_num= $request->seats_num;

           $data->update();
           return redirect()->route('bus.index');


        //return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Buses::find($id);


        $data->destroy($id);

        return redirect()->route('bus.index');


    }
}
