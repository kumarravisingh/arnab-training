<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

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
     public function saveData(){

     	//$employee = new Employee();
     	//$employee->create(['name'=>'abhishek','paid'=>12]);
     	//$employee->name = 'kumar';
     	//$employee->paid = 20;
     	//$employee->save();
     	//$employee = Employee::find(1);
     	//$employee->delete();


    	//return 'will save data here';
        return printHello();
    }
}
