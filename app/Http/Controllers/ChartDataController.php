<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Annonce;
use App\Formation;
use App\User;
class ChartDataController extends Controller
{

    function getAllMonths(){
        $month_array = array();
        $reservations_dates = Reservation::orderBy('created_at','ASC')->pluck('created_at');
        $reservations_dates = json_decode($reservations_dates);
        if(! empty($reservations_dates)){
            foreach($reservations_dates as $unformatted_date){
                $date = new \DateTime($unformatted_date);
                $month_no = $date->format('m');
                $month_name = $date->format('M');
                $month_array[ $month_no ] = $month_name;
            }
        }
        return $month_array;
    }

    function getMonthlyPriceSum($month){
        $monthly_price_sum = Reservation::join('users', 'reservations.user_id', '=', 'users.id')
        ->join('annonces','reservations.annonce_id','=','annonces.id')
        ->select('annonces.prix')
        ->where('users.etat', '2')
        ->whereMonth('reservations.created_at',$month)
        ->get()
        ->sum('prix');
        return $monthly_price_sum;
    }
    function getMonthlyPrice(){
        $monthly_price_sum_array = array();
        $month_array = $this->getAllMonths();
        $month_name_array = array();
        if (! empty($month_array)){
            foreach ($month_array as $month_no => $month_name) {
                $monthly_price_sum =$this->getMonthlyPriceSum($month_no);
                array_push($monthly_price_sum_array,$monthly_price_sum);
                array_push($month_name_array,$month_name);
            }
    }
    $max_no = max( $monthly_price_sum_array);
    $max = round(($max_no + 10/2)/10)*10;
    $monthly_price_data_array = array(
        'monthsPrices' => $month_name_array,
        'price' => $monthly_price_sum_array,
        'max' => $max,
    );
    return $monthly_price_data_array;
}
#######################################################################################################################################
function getAllMonths_users(){
    $month_array = array();
    $inscriptions_dates = User::orderBy('created_at','ASC')->pluck('created_at');
    $inscriptions_dates = json_decode($inscriptions_dates);
    if(! empty($inscriptions_dates)){
        foreach($inscriptions_dates as $unformatted_date){
            $date = new \DateTime($unformatted_date);
            $month_no = $date->format('m');
            $month_name = $date->format('M');
            $month_array[ $month_no ] = $month_name;
        }
    }
    return $month_array;
}

function getMonthlyUsersCount($month){
    $monthly_users_count = User::
    whereMonth('users.created_at',$month)
    ->get()
    ->count();
    return $monthly_users_count;
}
function getMonthlyUsers(){
    $monthly_users_count_array = array();
    $month_array = $this->getAllMonths();
    $month_name_array = array();
    if (! empty($month_array)){
        foreach ($month_array as $month_no => $month_name) {
            $monthly_user_count =$this->getMonthlyUsersCount($month_no);
            array_push($monthly_users_count_array,$monthly_user_count);
            array_push($month_name_array,$month_name);
        }
}
$max_no = max( $monthly_users_count_array);
$max = round(($max_no + 10/2)/10)*10;
$monthly_users_data_array = array(
    'monthsUsers' => $month_name_array,
    'users' => $monthly_users_count_array,
    'max' => $max,
);
return $monthly_users_data_array;
}
##############################################################


}
