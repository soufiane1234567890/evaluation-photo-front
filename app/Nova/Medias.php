<?php

namespace App\Nova;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Medias extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Medias>
     */
    public static $model = \App\Models\Medias::class;

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
            Text::make('Titre', 'file_name')
                ->sortable()
                ->rules('required', 'max:255'),
            Select::make('Catégorie', 'categorie_id')
                ->searchable()
                ->options(Categorie::all()
                    ->pluck('name', 'id'))
                ->rules('required'),
            Image::make('Charger une image', 'file_path')
            ->help('Upload an image to display as hero')
            ->disk('public')
            ->maxWidth(200)
            ->prunable()
            ->creationRules('required')
            ->deletable(false),
            // ->disk('public')->rules('required'),
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

    public static function label() {
        return 'Galeries';
    }
}
