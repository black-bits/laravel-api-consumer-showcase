<?php

namespace App\Http\Controllers;

use App\ApiConsumers\IEX\IEX;
use Illuminate\Http\Request;

/**
 * Class IEXController
 * @package App\Http\Controllers
 */
class IEXController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request)
    {
        $symbols = IEX::Symbol()->take(10);

        if (!empty($request->get('symbol'))) {
           $symbols->where('symbol', $request->get('symbol'));
        }

        if (!empty($request->get('name'))) {
            $symbols->where('name', $request->get('name'));
        }

        $data = [
            'symbols' => $symbols->get()
        ];

        debug($data);
        return response()->view('symbols.list', $data);
    }

    /**
     * @param $apiSymbol
     * @return \Illuminate\Http\Response
     */
    public function showSymbolCompany($apiSymbol)
    {
        $symbol = IEX::Symbol()->where('symbol', $apiSymbol)->first();

        $data = [
            'symbol'  => $symbol,
            'company' => $symbol->company()->first()
        ];

        debug($data);
        return response()->view('symbols.show-company', $data);
    }
}
