/////step19///

/// Form request and routes ///
<!DOCTYPE html>
<html>
<head>
<title>Student  Add</title>
</head>
<body>
<form action = "/create" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td> Name</td>
<td><input type='text' name='name' ></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name='email'></td>
</tr>

<tr>
<td>
<input type = 'submit' value = "submit">
</td>
</tr>
</table>
</form>
</body>
</html>

/// Controller file///

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App/insert;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudInsertController extends Controller {
public function insertform(){
return view('stud_create');
}
public function insert(Request $request){
$name = $request->input('name');
$email = $request->input('email');
$data=array('name'=>name,"email"=>$email);
$insert::Inserts('student')->insert($data);
echo "Record inserted successfully.<br/>";

}
}
/// Routes///
//insert data
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');

///  Migration file///
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insert', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inserts');
    }
}
?>


   



  

