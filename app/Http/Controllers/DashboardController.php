<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index( Request $request ) {

        return view('test', array(
            'title' => $request->query( key: 'title', default: 'Valor default'),
        ));
    }
}
