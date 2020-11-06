<?php

namespace ConfrariaWeb\TemplateColugo\Controllers;

use App\Http\Controllers\Controller;

class TemplateColugoController extends Controller
{
    protected $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function home()
    {
        return view('templateColugo::home.home', $this->data);
    }
}
