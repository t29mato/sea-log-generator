<?php

namespace App\Models;

use Intervention\Image\Facades\Image;

class Label extends Font
{
    public function __construct()
    {
        parent::__construct();
        $this->size = 24;
    }
}
