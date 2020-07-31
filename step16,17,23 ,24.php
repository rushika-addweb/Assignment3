/////step16,17,23,24,25///

/// Dry Up your Views and  make of Routes and Controllers and Laravel and uses of namespace ///

/// Mumbai blade file///
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
            @yield('content')
                <div class="title m-b-md">
                    Radio
                </div>

                <div class="links">
                <a href="/radio">Radio Mirchi</a>
                <a href="/radiocity">Radio City</a>
                <a href="/red">Red FM</a>
                   

                </div>
            </div>
        </div>
    </body>
</html>

////// web.php  calling of routes///

Route::get('/mumbai', function () {
    return view('mumbai');

Route::get('/radio', 'RadioController@index');
Route::get('/radiocity', 'radiocityController@index');
Route::get('/red', 'RedController@index');

/// controller////
<?php

namespace App\Http\Controllers;
use App\radiocity;
use Illuminate\Http\Request;

class radiocityController extends Controller
{
    //
    public function index()
    {
        
         $radiocity =RadioCity::all();
          return view('radiocity.index',compact('radiocity'));
    }
}
?>

<?php

namespace App\Http\Controllers;

use App\radio;
use Illuminate\Http\Request;

class RadioController extends Controller
{
    
    public function index()
    {
        //
        $radio =radio::all();
        return view('radio.index',['radio'=>$radio]);
    }
?>

<?php

namespace App\Http\Controllers;

use App\red;
use Illuminate\Http\Request;

class RedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reds =red::all();
        return view('red.index',['red'=>$reds]);
    }
?>
////Migration file////
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
        Schema::create('reds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('show');
            $table->text('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reds');
    }
}
?>
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadiocityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radiocity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('show');
            $table->text('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radiocity');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radios', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->string('show');
            $table->text('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radios');
    }
}
?>
///Model///
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class radio extends Model
{
    //
    public $table ="radios";
}
?>

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class radio extends Model
{
    //
    public $table ="radiocity";
}
?>
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class radio extends Model
{
    //
    public $table ="reds";
}


//views file///
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div>
                <table class="table table-striped">
                
               
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th >id</th>
                        <th >name</th>
                        <th >shows</th>
                        <th >time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($radiocity as $radio)
                        <th >{{$radio->id}}</th>
                        <td>{{$radio->name}}</td>
                        <td>{{$radio->show}}</td>
                        <td>{{$radio->time}}</td>
                        </tr>
                    
                @endforeach
                
 
  
            </div>
    </body>
</html>
  /////
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div>
                <table class="table table-striped">
                
               
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th >id</th>
                        <th >name</th>
                        <th >shows</th>
                        <th >time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($radiocity as $radio)
                        <th >{{$radio->id}}</th>
                        <td>{{$radio->name}}</td>
                        <td>{{$radio->show}}</td>
                        <td>{{$radio->time}}</td>
                        </tr>
                    
                @endforeach
                
 
  
            </div>
    </body>
</html>

//////
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div>
               
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>shows</th>
                        <th>time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        @foreach($red as $radio)
                        <th>{{$radio->id}}</th>
                        <td>{{$radio->name}}</td>
                        <td>{{$radio->show}}</td>
                        <td>{{$radio->time}}</td>
                        </tr>
                    
                        @endforeach
                        
                        
                    </tbody>
                </table>        
            </div>  
            <table class="table table-hover">
 
    </body>
</html>
/// databasefile////
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 06:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `version`
--

-- --------------------------------------------------------

--
-- Table structure for table `radios`
--

CREATE TABLE `radios` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `radios`
--

INSERT INTO `radios` (`id`, `name`, `show`, `time`) VALUES
(1, 'Rj Riya Bose', 'Morning Music', '7:45am'),
(2, 'Rj Raj Malik', 'Break Fast with Music', '9:30am'),
(3, 'Rj Rashi Shrama', 'Lunch with Music', '1:45pm'),
(4, 'Rj Karan Mehra', 'Tea With Music', '5:30pm'),
(5, 'Rj Prem Kumar ', 'Music with dinner', '9:45pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `radios`
--
ALTER TABLE `radios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `radios`
--
ALTER TABLE `radios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 06:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `version`
--

-- --------------------------------------------------------

--
-- Table structure for table `radiocity`
--

CREATE TABLE `radiocity` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `radiocity`
--

INSERT INTO `radiocity` (`id`, `name`, `show`, `time`) VALUES
(1, 'Rj Rashi Shrama', 'Morning Music', '7:00am'),
(2, 'Rj Prem Kumar', 'Breakfast with music', '9:50pm'),
(3, 'Rj Rahul Bose', 'lunch with music', '1:50pm'),
(4, 'Rj Salaman Khan', 'Tea With Salman', '4:50pm'),
(5, 'Rj Rhit Verma', 'Night with music', '9:30pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `radiocity`
--
ALTER TABLE `radiocity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `radiocity`
--
ALTER TABLE `radiocity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 06:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `version`
--

-- --------------------------------------------------------

--
-- Table structure for table `reds`
--

CREATE TABLE `reds` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reds`
--

INSERT INTO `reds` (`id`, `name`, `show`, `time`) VALUES
(1, 'Rj Rahul Malotra', 'Moring Music', '7:50am'),
(2, 'Rj Sonali Mehra', 'Fresh Afternoon', '11:50am'),
(3, 'Rj Zarina Khan', 'Music with Lunch', '1:20pm'),
(4, 'Rj Karan Signh', 'Evening with music', '5:00pm'),
(5, 'Rj Salman Khan', 'Night with Music', '10:00pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reds`
--
ALTER TABLE `reds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reds`
--
ALTER TABLE `reds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


  




  


 








  

