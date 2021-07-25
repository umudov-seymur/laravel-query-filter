<?php

namespace App\Utilities\ArticleFilters;

use App\Utilities\FilterContract;
use App\Utilities\QueryFilter;

class AuthorFilter extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        $this->query->whereHas('author', function ($q) use ($value) {
            return $q->where('username', $value);
        });
    }
}
