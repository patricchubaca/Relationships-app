<?php
namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Location;
use Illuminate\Http\Request;

class OneToOneController extends Controller
{
    public function oneToOne(){


        $country = Country::find(1);

        $location = $country->location;

        dd($location->longitude);
    }
}
