<?php

namespace R64\Filters;

abstract class SearchableFilter extends CustomFilter
{
    /**
     * Prepare the filter for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), [
            'label' => 'name',
        ]);
    }

    /**
     * The name of the Vue component to be used for this filter
     *
     * @return string
     */
    protected function componentName()
    {
        return 'searchable-filter';
    }
}
