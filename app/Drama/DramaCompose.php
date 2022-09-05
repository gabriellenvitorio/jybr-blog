<?php

namespace App\Drama;

use App\Models\Drama;

class DramaCompose{
    public $drama;

    public function __construct(Drama $drama){
        $this->dramas = $drama;
    } 

    public function compose($view){
        $view->with('dramas', $this->dramas->get());
    }
}