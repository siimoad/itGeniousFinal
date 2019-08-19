<?php

namespace App\Http\Controllers;
use App\Annonce;
use App\Formation;
use Illuminate\Http\Request;
use Storage;
class AnnoncesController extends Controller
{
    public function index()
    {
        $annonces = Annonce::all();
        return view('Admin.annonce', compact('annonces'));
        }
    public function indexHome()
    {
        $annonces = Annonce::with('formation')->get();;
        return view('welcome')->with(compact('annonces', $annonces));
    }
    public function details($id)
    {
        $annonce = Annonce::with('formation')->find($id);
        return view('Admin.afficherAnnonce', ['annonce' => $annonce, 'id' => $id]);
    }
    public function microsoftHome()
    {
        return view('Guest.microsoft');
    }

    public function adobeHome()
    {
        return view('Guest.adobe');
    }

    public function officeHome()
{
        return view('Guest.office');
    }

    public function comptiaHome()
    {
        return view('Guest.comptia');
    }

    public function pearsonvueHome()
    {
        return view('Guest.pearsonvue');
    }

    public function create()
    {
        $annonces = Annonce::all();
        $formations = Formation::all();
        return view('Admin.ajouterAnnonce')->with(compact('annonces'))->with(compact('formations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'prix' => 'required',
            'annonce_photo' => 'required',
        ]);
        $annonce = new Annonce();
        $annonce->formation_id = request('titre');
        $annonce->prix = request('prix');
        $annonce->annonce_photo = request('annonce_photo');
        if ($request->has('annonce_photo')) {
            $annonce_photo = $request->file('annonce_photo');
            $annonce_photo->store('annonce_photo');
            $path_annonce_photo = $annonce_photo->getClientOriginalName();
            $annonce_photo->storeAs('annonce_photo', $path_annonce_photo);
            $annonce->annonce_photo = Storage::url($path_annonce_photo);
        }
        if ($request->has('annonce_photo2')) {
            $annonce_photo2 = $request->file('annonce_photo2');
            $annonce_photo2->store('annonce_photo2');
            $path_annonce_photo2 = $annonce_photo2->getClientOriginalName();
            $annonce_photo2->storeAs('annonce_photo2', $path_annonce_photo2);
            $annonce->annonce_photo2 = Storage::url($path_annonce_photo2);
        }
        $annonce->save();
        return back()->withStatus(__('Annonce successfully added.'));
    }

    public function showAnnonce($id)
    {
        $annonce = Annonce::with('formation')->find($id);
        return view('Admin.modifierAnnonce', ['annonce' => $annonce, 'id' => $id]);
    }
    public function show($id)
    {
        $annonce = Annonce::with('formation')->find($id);
        return view('Guest.details', compact('annonce'));

    }

    public function edit(User $user)
    {
        return view('formations', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'titre' => 'required',
            'prix' => 'required',
            'annonce_photo' => 'required',
            'annonce_photo2' => 'required',
        ]);
        $annonce = Annonce::with('formation')->find($id);
        $annonce->formation->titre = $request->input('titre');
        $annonce->prix = $request->input('prix');
        if ($request->has('annonce_photo')) {
            $annonce_photo = $request->file('annonce_photo');
            $annonce_photo->store('annonce_photo');
            $path_annonce_photo = $annonce_photo->getClientOriginalName();
            $annonce_photo->storeAs('annonce_photo', $path_annonce_photo);
            $annonce->annonce_photo = Storage::url($path_annonce_photo);
        }
        if ($request->has('annonce_photo2')) {
            $annonce_photo2 = $request->file('annonce_photo2');
            $annonce_photo2->store('annonce_photo2');
            $path_annonce_photo2 = $annonce_photo2->getClientOriginalName();
            $annonce_photo2->storeAs('annonce_photo2', $path_annonce_photo2);
            $annonce->annonce_photo2 = Storage::url($path_annonce_photo2);
        }
        $annonce->save();
        return back()->withStatus(__('Annonce successfully updated.'));
    }

    public function destroy($id)
    {
        $annonce = Annonce::where('id', '=', $id)->first();
        $annonce->delete();
        return back()->withStatus(__('Annonce successfully deleted.'));
    }
}
