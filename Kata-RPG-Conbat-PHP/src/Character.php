<?php

namespace App;

use phpDocumentor\Reflection\Type\This;

class Character {
    private int $helth;
    private int $level;
    private bool $live;

    public function _construct()
    {
        $this->helth = 1000;
        $this->level = 1;
        $this->live = true;
    }

        

    
    
}

?>