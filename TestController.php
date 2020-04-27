<?php

namespace App\Http\Controllers;

use App\DetailsModel;
use illuminate\Http\Request;

class DetailsController extends Controller
{

    public function GetDataByID(Request $request)
    {
        $id = $request->input('id');
        $result = DetailsModel::where('id', $id)->get();
        return $result;
    }

    public function GetRowsSingleDataByID(Request $request)
    {
        $id = $request->input('id');
        $result = DetailsModel::where('id', $id)->first();

        return $result->roll;
    }
    public function GetAllColumn()
    {
        $result = DetailsModel::pluck('roll');

        return $result;
    }
    public function Count()
    {
        $result = DetailsModel::count();

        return $result;
    }
    public function Max()
    {
        $result = DetailsModel::max('roll');

        return $result;
    }
    public function Min()
    {
        $result = DetailsModel::min('roll');

        return $result;
    }
    public function Avg()
    {
        $result = DetailsModel::avg('roll');

        return $result;
    }
    public function Sum()
    {
        $result = DetailsModel::sum('roll');

        return $result;
    }

    public function GetAllData()
    {
        $result = DetailsModel::all();
        return $result;
    }
    public function CreateData(Request $request)
    {
        $name = $request->input("name");
        $roll = $request->input("roll");
        $city = $request->input("city");
        $phn = $request->input("phn");
        $class = $request->input("class");

        $result = DetailsModel::insert(['name' => $name, 'roll' => $roll, 'city' => $city, 'phn' => $phn, 'class' => $class]);
        if ($result == true) {
            return "Data Insert Success";
        } else {
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

        $result = DetailsModel::where('id', $id)->update(['name' => $name, 'roll' => $roll, 'city' => $city, 'phn' => $phn, 'class' => $class]);
        if ($result == true) {
            return "Data Update Success";
        } else {
            return "Update Fail!";
        }
    }

    public function DeleteData(Request $request)
    {

        $id = $request->input("id");
        $result = DetailsModel::where('id', $id)->delete();
        if ($result == true) {
            return "Data Delete Success";
        } else {
            return "Delete Fail!";
        }
    }

}
