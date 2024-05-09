<?php

namespace App\Http\Controllers;

use App\Http\Requests\SantaRequest;
use Santa;

class SantaController extends Controller
{
    public function index()
    {
        return view('santa');
    }

    public function generatePairs(SantaRequest $request)
    {
        $sCode = $request->input('code');
        $arData = json_decode($sCode, true);
        $pairs = Santa::generatePairs($arData);
        Santa::sendMessages($pairs);

        return view('results', compact('pairs'));
    }
}
