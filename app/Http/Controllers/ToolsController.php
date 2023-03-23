<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    //
    public function tools(){
        return view('tools.tools');
    }

    public function debit_card(){
        return view('tools.business-debit-card');
    }

    public function loans(){
        return view('tools.loans');
    }

    public function loan(){
        return view('tools.loan');
    }

    public function proposition(){
        return view('tools.proposition');
    }
}
