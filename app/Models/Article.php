<?php

namespace App\Models;

use App\Filters\Sort;
use App\Filters\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Article extends Model
{
    use HasFactory;

    public function scopeFiltered( Builder $builder ): Builder
    {
        return  app( Pipeline::class )
            ->send( $builder)
            ->through([
                Status::class,
                Sort::class,
            ])
            ->thenReturn();
    }

}
