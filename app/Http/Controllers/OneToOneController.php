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

        dd($country->name ." - Latitude : ". $location->longitude ." Latitude : ".$location->latitude);
    }

    public function oneToOneInverse(){
        $latitude = 212332;
        $longitude = 232332322;

        $location = Location::where('latitude',$latitude)
            ->where('longitude', $longitude)
            ->get()
            ->first();

           echo $location->id;

           $pais = Country::find($location->id);
           echo $pais;
    }
}
