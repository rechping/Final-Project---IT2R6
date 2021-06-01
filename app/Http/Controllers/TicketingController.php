<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\Code;
use App\Models\Route;
use App\Models\Receipt;

class TicketingController extends Controller
{
    //
    public function welcome()
    {
        # code...
        $routes = Route::all();
        return view('welcome', ["routes" => $routes]);
    }

    public function getCode(Request $request)
    {
        # code...
        $code = Str::random(6);

        $newCode = new Code();
        $newCode->code = $code;
        $newCode->name = $request->name;
        $newCode->type = $request->type;
        $newCode->save();

        return view('/code', ["code" => $code]);
    }

    public function newRoute(Request $request)
    {
        # code...
        $newRoute = new Route();
        $newRoute->from = $request->from;
        $newRoute->to = $request->to;
        $newRoute->regular = $request->regular;
        $newRoute->student = $request->student;
        $newRoute->senior = $request->senior;
        $newRoute->save();

        return redirect('/home');
    }

    public function updateRoute(Request $request)
    {
        # code...
        $newRoute = Route::find($request->routeID);

        if($request->from != null){
            $newRoute->from = $request->from;
        }
        if($request->to != null){
            $newRoute->to = $request->to;
        }
        if($request->regular != null){
            $newRoute->regular = $request->regular;
        }
        if($request->student != null){
            $newRoute->student = $request->student;
        }
        if($request->senior != null){
            $newRoute->senior = $request->senior;
        }
        $newRoute->save();

        return redirect('/home');
    }

    public function deleteRoute($id)
    {
        # code...
        $route = Route::where("id", '=', $id)->first();
        $route->delete();

        return redirect('/home');
    }

    public function getReceipt(Request $request)
    {
        # code...
        $code = Code::where("code", '=', $request->code)->first();
        $route = Route::where("id", '=', $request->routeID)->first();

        if($code->status == "active"){
            $receipt = new Receipt();
            $receipt->routeID = $request->routeID;
            $receipt->codeID = $code->id;
            $receipt->save();
    
            $deactCode = Code::find($code->id);
            $deactCode->status = "used";
            $deactCode->save();

            $date = Carbon::now();

            return view('/receipt', ["code" => $code, "route" => $route, "timeStamp" => $date->toDateTimeString()]);
        }else{
            return redirect("/");
        }

    }
}
