<?php

namespace Modules\AdminPanel\Http\Controllers\Back;

use App\Http\Controllers\BackController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminPanelController extends BackController
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
