<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index() {
        $logements = Logement::all();
        return response()->view('sitemap', [
            'logements' => $logements
        ])->header('Content-Type', 'text/xml');
      }
}
