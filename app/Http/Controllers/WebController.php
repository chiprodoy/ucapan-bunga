<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public $title;

    public $description;

    public $keyword;

    public $meta;

    public $keywords=[];

    public function __construct()
    {
        $this->keyword = env('KEYWORDS');
        $this->keywords = explode(',',env('KEYWORDS'));

    }
}
