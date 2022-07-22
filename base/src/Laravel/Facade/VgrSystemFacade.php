<?php
    namespace VgrSystem\Base\Laravel\Facade;

    use Illuminate\Support\Facades\Facade;

    class VgrSystemFacade extends Facade
    {
        protected static function getFacadeAccessor()
        {
            return 'VgrSystem';
        }
    }
?>
