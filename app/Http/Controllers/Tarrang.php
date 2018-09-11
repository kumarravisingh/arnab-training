<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use Crypt;
use Session;

class Tarrang extends Controller
{
    public function getData(){

    	
        //return printHello();
    }

    /*
	*save data to database
	*
	*@return void
    */
     public function saveData(Request $request){
		//$nameOfUser = $request->input('name','nothing');
		//$encryptedData = Crypt::encrypt($nameOfUser);
		//return Crypt::decrypt($encryptedData);
     	//$employee = new Employee();
     	//$employee->create(['name'=>'abhishek']);
     	//$employee->name = 'kumar';
     	//$employee->paid = 20;
     	//$employee->save();
     	//$employee = Employee::find(1);
     	//$employee->delete();


		//return 'will save data here';
		//Session::put('name','ravi');
		//return Session::get('name');
		//$uesrParen = new User;
		//auth()->user

			 $employees = Employee::all();
		// foreach($employees as $employee){
		// 	echo $employee->name.'<br/>';
		// }
			return view('welcome')->with('trang', $employees);
        return printHello();
	}
	
	public function view(){
		return view('structure.indexPage');
	}
}
