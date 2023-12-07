<?php

namespace App\Nova;

use App\Models\Categorie;
use App\Models\Tag as ModelsTag;
use App\Nova\Categorie as NovaCategorie;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Spatie\TagsField\Tags;
//use App\Models\Post;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Post>
     */
    public static $model = \App\Models\Post::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Hidden::make('User ID', 'user_id')
                ->default(auth()->id()),

            Select::make('Catégorie', 'categorie_id')
                ->searchable()
                ->options(Categorie::all()
                    ->pluck('name', 'id'))
                ->rules('required'),

            Text::make('Titre Post', 'title')
                ->sortable()
                ->rules('required', 'max:255'),
            Slug::make('Slug')
                ->sortable()
                ->rules('required', 'max:255')->from('title')->separator('_'),
            NovaTinyMCE::make('Description', 'content'),
            Text::make('Résumé de l\'article', 'summary')
                ->sortable()
                ->rules('required', 'max:255'),
            Image::make('Image de couverture', 'image')->disk('public'),

            Boolean::make('Active', 'status'),
            Hidden::make('Nombre de view', 'view_count')
                ->default(0),
            HasMany::make('Commentaires', 'comments', Comment::class),

            Tags::make('Tags')->withLinkToTagResource(),
            
            
            
            
            

        ];
    }

    public function with(Request $request)
    {
        return [
            'comments' => $this->comments,
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }

    public static function label()
    {
        return 'Articles';
    }

    public static function indexQuery(NovaRequest $request, $query)
    {
        if ($request->user()->role == 2) {
            $user_id = $request->user()->id;
            // Filtrer les articles en fonction de l'utilisateur connecté
            return $query->where('user_id', $user_id);
        }
    }
}
