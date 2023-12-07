<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class BlogController extends Controller
{

    function detail(Request $request, $slug)
    {

        $article = Post::where('slug', $slug)->first();
        $article->view_count = $article->view_count + 1;
        $article->save();
        $tags = $article->tags;
        $comments = $article->comments;

        return view('detailarticle', compact(['article', 'tags', 'comments']));
    }

    public function articles(Request $request)
    {
        if ($request->post != null) {
            $posts = Post::with(['comments' => function ($query) {
            }])->where('title', 'LIKE', '%' . $request->post . '%')
                ->paginate(5);
            //  DB::table('posts')
            // ->where('title', 'LIKE', '%' .$request->post.'%')
            //     ->paginate(5);
        } elseif ($request->categorie != null) {
            $posts =   Post::with(['comments' => function ($query) {
            }])->where('categorie_id', '=', $request->categorie)
                ->paginate(5);

            // DB::table('posts')
            // ->where('categorie_id', '=', $request->categorie)
            //     ->paginate(5);
        } else {
            $posts =  Post::with(['comments' => function ($query) {
            }])->paginate(5);

            DB::table('posts')
                ->paginate(5);
        }

        $categories = Categorie::all();

        return view('articles', compact(['posts', 'categories']));
    }

    public function apropos()
    {
        return view('apropos');
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

    public function newsletterenvoyer(Request $request)
    {
        $newletter = new Newsletter();
        $newletter->mail = $request->mail;
        $newletter->save();

        return redirect('/')->with('success', 'Le formulaire a été envoyé avec succès !');
    }

    public function sendcomment(Request $request)
    {
        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user_id;
        $comment->username = $request->user_name;
        $comment->content = $request->commentaire;
        $comment->status = 1;
        $comment->save();

        return Redirect::back()->with('success', 'Le commentaire a été envoyé avec succès !');
    }
}
