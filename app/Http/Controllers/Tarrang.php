<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Hash;

class Tarrang extends Controller
{
    public function getData(){

    	
        return printHello();
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
         $user = new User();
         $user->name = 'abhishek';
         $user->email='test'.mt_rand(0,888).'@tarun.com';
         $user->password= Hash::make('name');
         $user->save();


         $employee = new Employee();
     	$employee->create(
     	    [
     	        'user_id'=>$user->id,
                'name'=>'abhishek'
            ]
        );
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
	
	public function view(Request $request){

         $user = User::find($request->id);
         return $user->employee->groupBy('id');
        // $employees = $user->employee;
         /*foreach ($employees as $employee){
             echo 'User ID '.$user->id. ' Employee Name '.$employee->name.'<br>';
         }*/



		return view('structure.indexPage');
	}
}
