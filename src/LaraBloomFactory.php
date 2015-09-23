<?php

namespace Nickfan\LaraBloom;

use Bloom;

class LaraBloomFactory
{
    public static function create($params=[]){
        return new Bloom($params);
    }
}
