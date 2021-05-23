<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Federation;
use App\Models\Enterprise;
use Illuminate\Database\QueryException;
use App\Models\Verificator;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function home(){
        //return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $verificator = Verificator::all()->first();

        if($verificator == null){
            $erro = "";
            return view('login', compact('erro'));
        }
        else{
            $federations = Federation::all();
            return view('register-enterprise',compact('federations'));
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enterprise = new Enterprise;
        $enterprise->name = $request->name;
        $enterprise->federation_id = $request->federation;
        try{
            $enterprise->save();
        }
        catch(QueryException $exception){
            dd("Uma empresa com esse nome já foi cadastrada");
        }
        $enterprises = Enterprise::all();
        $federations = Federation::all();

        return view('user',compact('enterprises', 'federations'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showByFederation(Request $request)
    {
        $verificator = Verificator::all()->first();

        if($verificator == null){
            $erro = "";
            return view('login', compact('erro'));
        }
        else{
            if($request->federation == 0){
                $enterprises = Enterprise::all();
                $federations = Federation::all();

                return view('user',compact('enterprises', 'federations'));
            }
            else{
                $enterprises = Enterprise::where('federation_id', $request->federation)->get();
                $federations = Federation::all();

                return view('user',compact('enterprises', 'federations'));
            }
        }
    }

    public function showByName(Request $request){
        $verificator = Verificator::all()->first();
        if($verificator == null){
            $erro = "";
            return view('login', compact('erro'));
        }
        else{
            if($request->enterprise == ""){
                $enterprises = Enterprise::all();
                $federations = Federation::all();

                return view('user',compact('enterprises', 'federations'));
            }
            else{
                $enterprises = Enterprise::where('name', $request->enterprise)->get();
                $federations = Federation::all();

                return view('user',compact('enterprises', 'federations'));
            }
        }
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
    public function updateName(Request $request)
    {
        $enterprise = Enterprise::where('id', $request->enterprise_id)->get()->first();
        $enterprise->name = $request->name;
        $enterprise->save();
        $enterprises = Enterprise::all();
        $federations = Federation::all();
        return view('user', compact('enterprises', 'federations'));
    }

    public function updateFederation(Request $request){
        $enterprise = Enterprise::where('id', $request->enterprise_id)->get()->first();
        $enterprise->federation_id = $request->federation;
        $enterprise->save();
        $enterprises = Enterprise::all();
        $federations = Federation::all();
        return view('user', compact('enterprises', 'federations'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $enterprise = Enterprise::where('id', $request->enterprise_id)->get()->first();

        $enterprise->delete();
        $enterprises = Enterprise::all();
        $federations = Federation::all();

        return view('user',compact('enterprises', 'federations'));

    }

    public function pageEdit(Request $request){
        $enterprise = Enterprise::where('id', $request->enterprise_id)->get()->first();
        $federations = Federation::all();
        return view('enterprise', compact('enterprise', 'federations'));
    }
}
