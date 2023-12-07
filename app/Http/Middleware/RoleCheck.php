<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       
        $userRole = $request->user()->role;

        switch ($userRole) {
            case 1: // Administrateur
                // Autoriser l'accès à toutes les ressources
                break;
            case 2: // Editeur
                // Autoriser l'accès aux ressources destinées aux éditeurs et aux utilisateurs
                if ($request->is('editeur/*') || $request->is('utilisateur/*')) {
                    break;
                }
                abort(403, 'Accès non autorisé.');
                break;
            case 3: // Utilisateur
                // Autoriser l'accès aux ressources destinées aux utilisateurs
                if ($request->is('utilisateur/*')) {
                    break;
                }
                abort(403, 'Accès non autorisé.');
                break;
            default:
                // Si le rôle n'est pas défini, refuser l'accès
                abort(403, 'Accès non autorisé.');
        }

        return $next($request);

    }
}
