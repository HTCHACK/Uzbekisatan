<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;

class HomeController extends Controller
{

    public function index()
    {
        return view(
            'welcome',
            [
                'regions' => Region::where('lang', $this->getLang()),
            ]
        );
    }

    private function getLang()
    {
        if (!isset($_COOKIE['language'])) {
            return 'uz';
        }
        if (isset($_COOKIE['language'])) {
            return $_COOKIE['language'];
        }
    }
}
