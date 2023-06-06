<?php

namespace Modules\AdminPanel\Http\Controllers\Back;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminPanelController extends Controller
{
    /**
     * Load admin dashboard
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
   public function dashboard()
   {
       return view('adminpanel::back.dashboard');
   }
}
