<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\TotalArticle;
use App\Nova\Metrics\TotalCategorie;
use App\Nova\Metrics\TotalCommentaire;
use App\Nova\Metrics\TotalTag;
use App\Nova\Metrics\TotalUser;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        
        // $userRole = Auth::user()->role;
        return [
            TotalUser::make()->icon('user'),
            TotalArticle::make()->width('2/3')->icon('cube'),
            TotalCategorie::make()->icon('tag'),
        ];

        // switch ($userRole) {
        //     case 1: // Administrateur
                
        //         break;
        //     case 2: // Editeur
        //         return [
        //             TotalArticleUser::make()->icon('cube'),
        //             TotalCategorie::make()->width('2/3')->icon('tag'),
        //             TotalTag::make()->width('full')->icon('hashtag'),
        //         ];
        //         break;
        //     case 3: // Utilisateur
        //         abort(403, 'Accès non autorisé.');
        //         break;
        //     default:
        //         // Si le rôle n'est pas défini, refuser l'accès
        //         abort(403, 'Accès non autorisé.');
        // }
        
    }

    

    public function label() {
        return 'Tableau de bord';
    }
}
