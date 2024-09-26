<?php

namespace Campidellis\FilamentHelpers\Contracts;

use Filament\Tables\Table;

abstract class FiltersBuilder
{
    public static function make(): array
    {
        return (new static())->filters();
    }

    public abstract function filters(): array;
}
