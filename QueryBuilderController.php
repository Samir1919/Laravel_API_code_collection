<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use illuminate\support\Facades\DB;

// Query Builer Example

class BuilderController extends Controller
{

   
    public function AllTable() {
        $tables = DB::select('SHOW TABLES');
        // array_map('reset', \DB::select('SHOW TABLES'));
        return $tables;
    }
   
    public function Rows()
    {
        $result = DB::table('details')->where('name', 'Sami')->first();

        return $result->roll;
    }

    public function RowsbyID()
    {
        $result = DB::table('details')->find(1);

        return $result->roll;
    }

    public function GetAllColumn()
    {
        $result = DB::table('details')->pluck('name');

        return $result;
    }

    // It does not do what it says
    public function MultipleColumn()
    {
        $result = DB::table('details')->pluck('name', 'roll');

        return $result;
    }

    public function CountAllRow()
    {
        $result = DB::table('details')->count();

        return $result;
    }
    public function MaxInAllColumn()
    {
        $result = DB::table('details')->max('roll');

        return $result;
    }

    // It does not do what it says
    public function MinInAllColumn()
    {
        $result = DB::table('details')->min('roll');

        return $result;
    }
    public function AvgInAllColumn()
    {
        $result = DB::table('details')->avg('roll');

        return $result;
    }
    public function SumInAllColumn()
    {
        $result = DB::table('details')->sum('roll');

        return $result;
    }

    // Query Builder CRUD operation by lumen

    public function GetAllData()
    {

        $result = DB::table('details')->get();

        return $result;
    }

    public function CreateData(Request $request)
    {
        $name = $request->input("name");
        $roll = $request->input("roll");
        $city = $request->input("city");
        $phn = $request->input("phn");
        $class = $request->input("class");

        $result = DB::table('details')->insert(['name'=>$name,'roll'=>$roll,'city'=>$city,'phn'=>$phn,'class'=>$class]);
        if($result==true){
            return "Data Insert Success";
        }else{
            return "Insert Fail!";
        }
        
    }
    
    public function UpdateData(Request $request)
    {

        $id = $request->input("id");
        $name = $request->input("name");
        $roll = $request->input("roll");
        $city = $request->input("city");
        $phn = $request->input("phn");
        $class = $request->input("class");



        $result = DB::table('details')->where('id',$id)->update(['name'=>$name,'roll'=>$roll,'city'=>$city,'phn'=>$phn,'class'=>$class]);
        if($result==true){
            return "Data Update Success";
        }else{
            return "Update Fail!";
        }
    }

    public function DeleteData(Request $request)
    {

        $id = $request->input("id");
        $result = DB::table('details')->where('id',$id)->delete();
        if($result==true){
            return "Data Delete Success";
        }else{
            return "Delete Fail!";
        }
    }

}

