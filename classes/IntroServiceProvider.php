<?php

namespace Ecjia\App\Intro;

use Royalcms\Component\App\AppServiceProvider;

class IntroServiceProvider extends  AppServiceProvider
{
    
    public function boot()
    {
        $this->package('ecjia/app-intro');
    }
    
    public function register()
    {
        
    }
    
    
    
}