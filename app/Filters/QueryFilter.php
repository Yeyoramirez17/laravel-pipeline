<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

abstract class QueryFilter
{
    public function handle( Builder $builder, \Closure $next ): Builder
    {
        if( ! request()->query( $this->filterName() )) {
            return $next( $builder );
        }
        // Filtar por status
        // Pordenar por id
        return $next( $this->apply($builder) );
    }

    abstract protected function apply( Builder $builder );
    abstract protected function filterName(): string;
}
