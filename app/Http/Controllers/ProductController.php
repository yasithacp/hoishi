<?php
/**
 * Created by PhpStorm.
 * User: yasitha
 * Date: 25/9/16
 * Time: 2:08 PM
 */

namespace App\Http\Controllers;

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
}