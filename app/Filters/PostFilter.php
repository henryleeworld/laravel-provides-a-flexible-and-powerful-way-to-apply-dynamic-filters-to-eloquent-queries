<?php

namespace App\Filters;

use Filterable\Filter;
use Illuminate\Database\Eloquent\Builder;

class PostFilter extends Filter
{
    /**
     * Registered filters to operate upon.
     *
     * @var array<string>
     */
    protected array $filters = ['user', 'category'];

    /**
     * Filter the query by a user attribute value.
     *
     * @param integer $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function user(int $value): Builder
    {
        return $this->builder->where('user_id', $value);
    }

    /**
     * Filter the query by a category attribute value.
     *
     * @param integer $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function category(int $value): Builder
    {
        return $this->builder->where('category_id', $value);
    }
}
