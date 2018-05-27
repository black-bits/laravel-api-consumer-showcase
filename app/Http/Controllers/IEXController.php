<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IEXController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $data = [
            'symbols' => null
        ];

        debug($data);
        return response()->view('symbols.list', $data);
    }

    /**
     * @param $apiSymbol
     * @return \Illuminate\Http\Response
     */
    public function show($apiSymbol)
    {
        $data = [
            'symbol' => null
        ];

        debug($data);
        return response()->view('symbols.show', $data);
    }

    /**
     * @param $apiSymbol
     * @return \Illuminate\Http\Response
     */
    public function showSymbolCompany($apiSymbol)
    {
        $data = [
            'company' => null
        ];

        debug($data);
        return response()->view('symbols.show-company', $data);
    }
}
