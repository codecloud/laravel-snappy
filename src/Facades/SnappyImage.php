<?php
namespace CodeCloud\SnappyLaravel\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;

class SnappyImage extends BaseFacade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'snappy.image.wrapper'; }


}