<?php
use Hahadu\Collect\Collection;
if (!function_exists('value')) {
    /**
     * Return the default value of the given value.
     *
     * @param mixed $value
     * @return mixed
     */
    function value($value)
    {
        return $value instanceof Closure ? $value() : $value;
    }
}

if(!function_exists('collections')){
    /*****
     * @param array $array
     * @return Collection
     */
    function collections(array $array=[]): Collection
    {
        
        return new Collection($array);
    }
}