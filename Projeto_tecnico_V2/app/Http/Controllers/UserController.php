<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\QueryException;
use App\Models\Verificator;
use App\Models\Federation;
use App\Models\Enterprise;
class UserController extends Controller
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

    public function configPage(){
        $verificator = Verificator::all()->first();

        if($verificator == null){
            $erro = "";
            return view('login', compact('erro'));
        }
        else{
            $user = $verificator->user;
            $erro = "";
            return view('configuration', compact('user', 'erro'));    
        }
    }


    public function loginPage(){
        $erro = "";
        return view('login', compact('erro'));
    }

    public function userPage(){
        $verificator = Verificator::all()->first();
        
        if($verificator == null){
            return $this->loginPage();
        }
        else{
            $federations = Federation::all();
            $enterprises = Enterprise::all();
            return view('user', compact('federations', 'enterprises'));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $erro = "";
        return view('register-user', compact('erro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->password == $request->confirm_password){
            if(strlen($request->password)>=8){
                $user = new User;
                $user->email = $request->email;
                $user->password= $request->password;

                try{
                    $user->save();
                }
                catch(QueryException $exception){
                    $erro = "Email já cadastrado";
                    return view('register-user', compact('erro'));
                }
                $verificator = new Verificator();
                $verificator->conected = "true";
                $verificator->user_id =  $user->id;
                $verificator->save();
                $federations = Federation::all();
                $enterprises = Enterprise::all();
                return view('user', compact('federations', 'enterprises'));
            }
            else{
                $erro = "Senhas precisa ter 8 digitos ou mais!";
                return view('register-user', compact('erro'));
            }
        }
        else{
            $erro = "Senhas não batem!";
            return view('register-user', compact('erro'));
        }

    }

    public function validateLogin(Request $request){
        $user = User::where('email', $request->email)->first();
        if($user == null){
            $erro = "*Usuário não Cadastrado";
            return view('login', compact('erro'));
        }
        else{
            if($user->password == $request->password){
                $federations = Federation::all();
                $enterprises = Enterprise::all();
                $verificator = new Verificator();
                $verificator->conected = "true";
                $verificator->user_id =  $user->id;
                $verificator->save();
                return view('user', compact('enterprises','federations' ));
            }
            else{
                $erro = "*Senha inválida";
                return view('login', compact('erro'));
            }
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


    public function updateEmail(Request $request)
    {
        $user = Verificator::all()->first()->user;
        $user->email = $request->email;
        $user->save();
        return $this->configPage();
    }

    public function updatePassword(Request $request)
    {
        if($request->password == $request->confirm_password){
            if(strlen($request->password)>=8){
                $user = Verificator::all()->first()->user;
                $user->password = $request->password;
                $user->save();
                $erro = "Senha alterada";
            }
            else
                $erro = "Senha deve conter 8 ou mais digitos";
        }
        else
            $erro = "Senhas não batem";
        $verificator = Verificator::all()->first();
        $user = $verificator->user;
        return view('configuration', compact('user', 'erro'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $verificator = Verificator::all()->first();
        $user = $verificator->user;
        $verificator->delete();
        $verificator = null;
        $user->delete();
        return view('welcome', compact('verificator') );
    }
}
