<?php

namespace App\Nova;

use App\Models\Comment as ModelsComment;
use App\Models\Post;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Comment extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Comment>
     */
    public static $model = \App\Models\Comment::class;

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
            Text::make('Commentaire', 'content')
                ->sortable()
                ->rules('required', 'max:255'),
            Select::make('Choisir Post', 'post_id')
                ->searchable()
                ->options(Post::all()
                    ->pluck('title', 'id'))
                ->rules('required'),
            Hidden::make('User ID', 'user_id')
                ->default(auth()->id()),
            // Boolean::make('Active'),

            Select::make('Choisir Parent', 'parent_id')
                ->searchable()
                ->options(ModelsComment::all()
                    ->pluck('content', 'id')),
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
        return 'Commentaires';
    }

    public static function authorizedToCreate(Request $request)
    {
        return false;
    }

    // public function authorizedToDelete(Request $request)
    // {
    //     return false;
    // }

    public function authorizedToUpdate(Request $request)
    {
        return false;
    }
}
