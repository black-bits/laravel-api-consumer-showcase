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
        $symbols = IEX::Symbol();

        if (!empty($request->get('symbol'))) {
           $symbol = $request->get('symbol');
           $symbols->filter(function ($value, $key) use ($symbol) {
               return str_contains($value->symbol, $symbol);
           });
        }

        if (!empty($request->get('name'))) {
            $symbols->filterName($request->get('name'));
        }

        $data = [
            'symbols' => $symbols->take(10)->get()
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
