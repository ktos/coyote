<?php

namespace Coyote\Http\Controllers\Adm;

class DashboardController extends BaseController
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return $this->view('adm.dashboard');
    }
}
