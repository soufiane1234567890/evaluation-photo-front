<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Medias;
use App\Models\Newsletter;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class MyController extends Controller
{
    public function tarifs(Request $request)
    {
        $tarifs = Post::all();
        return view('tarifs', compact(['tarifs']));
    }

    public function galerie(Request $request)
    {
        if ($request->post != null) {
            $galeries = Medias::where('file_name', 'LIKE', '%' . $request->post . '%')->get();
        } elseif ($request->categorie != null) {
            $galeries =   Medias::where('categorie_id', '=', $request->categorie)->get();
        } else {
            $galeries =  Medias::all();
        }

        $categories = Categorie::all();

        return view('galerie', compact(['galeries', 'categories']));
    }

    public function contact()
    {
        return view('contact');
    }

    public function envoyercontact(Request $request)
    {
        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->sujet = $request->email;
        $contact->message = $request->message;
        $contact->save();

        return redirect('/contact')->with('success', 'Le formulaire a été envoyé avec succès !');
    }

}
