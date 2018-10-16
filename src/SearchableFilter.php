<?php

namespace R64\Filters;

use Laravel\Nova\Filters\Filter;
use Illuminate\Container\Container;
use Illuminate\Http\Request;

abstract class SearchableFilter extends Filter
{
    /**
     * Prepare the filter for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), [
            'customComponent' => true,
            'component'       => 'searchable-filter',
            'label'           => 'name',
        ]);
    }
}
