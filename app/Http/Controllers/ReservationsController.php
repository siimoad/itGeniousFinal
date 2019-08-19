<?php

namespace App\Http\Controllers;
use App\Annonce;
use App\Formation;
use \Validator;
use Redirect;
use App\User;
use App\Reservation;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Guest.reserver');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'sexe' => 'required',
            'date_naissance' => 'required',
            'ville' => 'required',
            'tel' => 'required',
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            $error = $validator->errors()->first();
            return $error;
        }

    
         else {
            $user = new User;
            $user->name = request('name');
            $user->sexe = request('sexe');
            $user->etat = 3;
            $user->date_naissance = request('date_naissance');
            $user->ville = request('ville');
            $user->etablissement = "guest";
            $user->niveau = "guest";
            $user->privilege = "guest";
            $user->password = "guest";
            $user->tel = request('tel');
            $user->email = request('email');
            $user->save();
            $userid = $user->id;
            
            $reservation = new Reservation;
            $reservation->annonce_id = request('annonce_id');
            $reservation->user_id = $userid;
            $reservation->save();

    return back()->withStatus(__('Reservation successfully added.'));
}
    }
    public function storeGuest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'sexe' => 'required',
            'date_naissance' => 'required',
            'ville' => 'required',
            'tel' => 'required',
            'email' => 'required',
        ]);
        if ($validator->fails()) {
            $error = $validator->errors()->first();
            return $error;
        }

    
         else {
            $user = new User;
            $user->name = request('name');
            $user->sexe = request('sexe');
            $user->etat = 4;
            $user->date_naissance = request('date_naissance');
            $user->ville = request('ville');
            $user->etablissement = "guest";
            $user->niveau = "guest";
            $user->privilege = "guest";
            $user->password = "guest";
            $user->tel = request('tel');
            $user->email = request('email');
            $user->save();
         
    return back()->withStatus(__('Reservation successfully added.'));
}


        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annonce = Annonce::with('formation')->find($id);
        return view('Guest.reserver', compact('annonce'));


        //, compact('annonce')
    }
    public function book()
    {
        return view('Guest.book');


        //, compact('annonce')
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function paiementIndex(){
        $reservations = Reservation::with('user')->with('annonce')->get();

        return view('Admin.paiement', compact('reservations'));
    }

}
