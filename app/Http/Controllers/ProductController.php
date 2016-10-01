<?php
/**
 * Created by PhpStorm.
 * User: yasitha
 * Date: 25/9/16
 * Time: 2:08 PM
 */

namespace App\Http\Controllers;

use App\Cable;
use Illuminate\Http\Request;
use App\Transceiver;

class ProductController extends Controller
{

    public function viewModuleProducts($module){
        $transceivers = Transceiver::where('Level 2 Form Factor', $module)->get();
        return view('transceivers', compact('module', 'transceivers'));
    }

    public function viewCategoryProducts($module, $category){
        $transceivers = Transceiver::where([
            ['Level 2 Form Factor', $module],
            ['Level 3 Type of Standard', $category],
        ])->get();
        return view('transceivers', compact('module', 'category', 'transceivers'));
    }

    public function viewCableTypes($type){
        $cables = Cable::where('Level 2 Cable Type', $type)->get();
        return view('cables', compact('type', 'cables'));
    }

    public function viewCableForms($type, $form){
        $cables = Cable::where([
            ['Level 2 Cable Type', $type],
            ['Form', $form],
        ])->get();
        return view('cables', compact('type', 'form', 'cables'));
    }

    public function searchProducts(Request $request){

        $keyword = $request->input('search');

        if(!empty($keyword)) {
            $cables = Cable::where('Compatible Brands', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Form', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Model', 'LIKE', '%' . $keyword . '%')->get()->toArray();

            $transceivers = Transceiver::where('Compatible Brand', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Level 2 Form Factor', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Model', 'LIKE', '%' . $keyword . '%')->get()->toArray();
        } else {
            $cables = Cable::all()->toArray();
            $transceivers = Transceiver::all()->toArray();
        }

        $results = array_merge($cables, $transceivers);

        return view('search_results', compact('keyword', 'results'));
    }

    public function viewTransceiver($id) {
        $transceiver = Transceiver::find($id);
        return view('transceiver', compact('transceiver'));
    }

    public function viewCable($id){
        $cable = Cable::find($id);
        return view('cable', compact('cable'));
    }
}