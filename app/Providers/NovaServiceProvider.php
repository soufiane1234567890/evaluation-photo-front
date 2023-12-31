<?php

namespace App\Providers;

use App\Nova\Contact;
use App\Nova\Newsletter;
use App\Nova\Categorie;
use App\Nova\Comment;
use App\Nova\Medias;
use App\Nova\Post;
use App\Nova\User;
use App\Nova\Dashboards\Main;
use App\Nova\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use DigitalCreative\NovaDashboard\Examples\ExampleDashboard;
use DigitalCreative\NovaDashboard\NovaDashboard;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
           
                    return [
                        MenuSection::dashboard(Main::class)->icon('chart-bar'),
        
                        MenuSection::make('Catégories', [
                            MenuItem::resource(Categorie::class),
                        ])->icon('tag'),
        
                        MenuSection::make('Tarifs', [
                            MenuItem::resource(Post::class),
                        ])->icon('cube'),
        
                        MenuSection::make('Utilisateurs',  [
                            MenuItem::resource(User::class),
                        ])->icon('user'),

                        MenuSection::make('Contact',  [
                            MenuItem::resource(Contact::class),
                        ])->icon('chat'),
        
                        MenuSection::make('Galerie',  [
                            MenuItem::resource(Medias::class),
                        ])->icon('photograph'),
                    ];
                 
        
            
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
           
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
