<?php

namespace App\Http\Controllers;

use Auth;
use App\Reservation;
use App\Annonce;
use App\Formation;
use App\User;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (Auth::user()->privilege == 0){
            $id = Auth::user()->id;
            $formations = Reservation::join('annonces','reservations.annonce_id','=','annonces.id')
            ->join('users','reservations.user_id','=','users.id')
            ->where('reservations.user_id','=',$id)->get();
            return view('Client.mesformations', ['formations' => $formations]);    
        }
        else{
            $data = DB::table('reservations')
            ->join('users', 'reservations.user_id', '=', 'users.id')
            ->join('annonces', 'reservations.annonce_id', '=', 'annonces.id')
            ->join('formations', 'annonces.formation_id', '=', 'formations.id')
            ->select(
                'formations.*','annonces.*','users.*',
                DB::raw("count(reservations.user_id) AS total"),
                DB::raw("sum(annonces.prix) AS total2")

            )
            ->where('users.etat','2')
        ->groupBy('annonce_id')
        ->orderBy('total','DESC')
        ->paginate(10);
        $formations = Formation::count();
        $users = User::count();
        $revenues = Annonce::join('reservations', 'annonce_id', '=', 'annonces.id')->sum('prix');

        // $revenues = DB::select("
        // SELECT SUM(PRIX) FROM ANNONCES, RESERVATIONS WHERE ANNONCES.ID = RESERVATIONS.ANNONCE_ID

        // ");
            return view('Admin.dashboard',compact('data','formations','users','revenues'));

        }

      
        
    }

    ########### Stats ################



}
