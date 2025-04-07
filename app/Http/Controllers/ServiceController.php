<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function isocompta()
    {
        return Inertia::render('Isocompta');
    }

    public function isogescom()
    {
        return Inertia::render('Isogescom');
    }

    public function isopaie()
    {
        return Inertia::render('Isopaie');
    }

    public function isoetatfin()
    {
        return Inertia::render('Isoetatfin');
    }
}
