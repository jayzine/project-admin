<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use  App\Models\Registrations;
//use View;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$this->data['user'] = Registrations::all();
        return View::make('welcome',$this->data);
    }

    public function about()
	{
		return view('about');
	}
	
	public function contact()
	{
		return view('contact');
	}
    public function store(Request $request)
    {
				/*$val = Validator::make($request->all(),['image'=>'required']);
		if($val->fails())
		{
				return 'good';
		}
		else
		{
				$name = $request->file('image');
				$file = $name->getClientOriginalName();
				$ext = $name->getClientOriginalExtension();
				$path = $name->getRealPath();
				$size = $name->getSize();
				$type = $name->getMimeType();
				
				$destination = 'uploads';
				$name->move($destination,$file);
		
		}*/
				
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
