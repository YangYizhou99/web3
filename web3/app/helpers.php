<?php

if(!function_exists('categories')){
    function categories()
    {
        $categories=cache()->rememberForever('categories',function(){
            $categories= \Illuminate\Support\Facades\DB::table('categories')
                ->pluck('name','id');
            return $categories;
        });
        return $categories;
    }
}
