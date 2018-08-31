<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BalanceController extends Controller
{
    public function index() {
        //pego os dados
        $balance = auth()->user()->balance;

        //if que verifica se existe saldo, se nao, volta 0.
        $amount  = $balance ? $balance->amount : 0;
        //retorno os dados para a view
        return view('admin.balance.index', compact('amount'));
    }

    public function deposit(){

        return view('admin.balance.deposit');
    }
}
