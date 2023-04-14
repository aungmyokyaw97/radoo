<?php 
namespace Amk\Radoo\Facades;

use Illuminate\Support\Facades\Facade;

class Radoo extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return \Amk\Radoo\Radoo::class; }

}