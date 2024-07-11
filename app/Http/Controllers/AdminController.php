<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    //
    public function generateSiteMap(){
        Artisan::call('app:generate-sitemap');
        copy('/home/ucapanbu/repositories/ucapan-bunga/public/sitemap.xml','/home/ucapanbu/public_html');
    }
}
