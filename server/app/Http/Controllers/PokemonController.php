<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 11/10/2018
 * Time: 16:36
 */

namespace App\Http\Controllers;


use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PokemonController extends Controller
{
    public function index()
    {
        return response()->json(Pokemon::all());
    }

    public function show($id)
    {
        return response()->json(Pokemon::findOrFail($id));
    }

    public function search(Request $request)
    {
        $field = $request->get('field') === 1 ? 'name' : 'type_one';

        $v_ar_search = Pokemon::select('name'
                                      ,'type_one'
                                      ,'type_two'
                                      ,'weather_one'
                                      ,'weather_two'
                                      ,'stat_total'
                                      ,'power_atack'
                                      ,'power_defense'
                                      ,'sta'
                                      ,'per_cp@40'
                                      ,'per_cp@39')
                                ->where($field, 'like', '%'. $request->get('content') .'%')
                                ->get()
                                ->toArray();

        if ($v_ar_search)
        {
            return response()->json($v_ar_search, 200);
        }
        else
        {
            return response()->json('Nâo foi possível encontrar o que você procurava! Tente novamente.', 404);
        }
    }
}
