# Laravel_LumenAPI_code_collection

#route example

$router->get('/get','DetailsController@DetailsSelect');

$router->post('/post','DetailsController@DetailsCreate');

$router->put('/put','DetailsController@DetailsUpdate');

$router->delete('/delete','DetailsController@DetailsDelete');

#DetailsController page
namespace App\Http\Controllers;

use illuminate\Http\Request;
use illuminate\support\Facades\DB;

class DetailsController extends Controller
{

    // Hard coded sql database CRUD oparetion Strat

    public function DetailsSelect(Request $request)
    {

        $SQL = "SELECT * FROM details";

        $request = DB::select($SQL);

        return $request;
    }

    public function DetailsCreate(Request $request)
    {
        $name = $request->input("name");
        $roll = $request->input("roll");
        $city = $request->input("city");
        $phn = $request->input("phn");
        $class = $request->input("class");

        $sql = "INSERT INTO `details`(`name`, `roll`, `city`, `phn`, `class`) VALUES (?,?,?,?,?)";

        $_create = DB::insert($sql, [$name, $roll, $city, $phn, $class]);

        if ($_create == true) {
            return "Your post successfully saved";

        } else {
            return "Warning something is wrong, please call@support +8801778717033";
        }
    }

    public function DetailsUpdate(Request $request)
    {
        $id = $request->input("id");
        $name = $request->input("name");
        $roll = $request->input("roll");
        $city = $request->input("city");
        $phn = $request->input("phn");
        $class = $request->input("class");

        $SQL = "UPDATE `details` SET `name`=?,`roll`=?,`city`=?,`phn`=?,`class`=? WHERE `id`=?";

        $_update = DB::update($SQL, [$name, $roll, $city, $phn, $class, $id]);

        if ($_update == true) {
            return "Your post successfully updated";

        } else {
            return "Warning something is wrong, please call@support +8801778717033";
        }

    }

    public function DetailsDelete(Request $request)
    {

        $id = $request->input("id");
        $SQL = "DELETE FROM `details` WHERE `id`=?";
        $_delete = DB::delete($SQL, [$id]);

        if ($_delete == true) {
            return "Succesfully Delete";
        } else {
            return "Warning! not deleted";
        }

    }

    // Hard coded sql database CRUD oparetion End

}
