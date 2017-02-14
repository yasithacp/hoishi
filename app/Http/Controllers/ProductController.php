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
use Mail;

class ProductController extends Controller
{

    public function viewModuleProducts($module){
        $transceivers = Transceiver::where('Level 2 Form Factor', $module)->get();
        $categories = Transceiver::where('Level 2 Form Factor', $module)->distinct('Level 3 Type of Standard')->select('Level 3 Type of Standard')->get();
        $filter_categories = array();
        return view('transceivers', compact('module', 'transceivers', 'categories', 'filter_categories'));
    }

    public function viewCategoryProducts($module, $category){
        $transceivers = Transceiver::where([
            ['Level 2 Form Factor', $module],
            ['Level 3 Type of Standard', $category],
        ])->get();

        $categories = Transceiver::where('Level 2 Form Factor', $module)->distinct('Level 3 Type of Standard')->select('Level 3 Type of Standard')->get();

        $brands = Transceiver::where([
            ['Level 2 Form Factor', $module],
            ['Level 3 Type of Standard', $category],
        ])->distinct('Compatible Brand')->select('Compatible Brand')->get();

        $distances = Transceiver::where([
            ['Level 2 Form Factor', $module],
            ['Level 3 Type of Standard', $category],
        ])->distinct('Reach')->select('Reach')->get();

        $filter_categories = array($category);

        return view('transceivers', compact('module', 'filter_categories', 'transceivers', 'categories', 'brands', 'distances'));
    }

    public function viewCableTypes($type){
        $cables = Cable::where('Level 2 Cable Type', $type)->get();
        $forms = Cable::where('Level 2 Cable Type', $type)->distinct('Form')->select('Form')->get();
        $filter_forms = array();
        return view('cables', compact('type', 'cables', 'forms', 'filter_forms'));
    }

    public function viewCableForms($type, $form){
        $cables = Cable::where([
            ['Level 2 Cable Type', $type],
            ['Form', $form],
        ])->get();

        $forms = Cable::where('Level 2 Cable Type', $type)->distinct('Form')->select('Form')->get();

        $brands = Cable::where([
            ['Level 2 Cable Type', $type],
            ['Form', $form],
        ])->distinct('Compatible Brands')->select('Compatible Brands')->get();

        $filter_forms = array($form);

        return view('cables', compact('type', 'filter_forms', 'cables', 'forms', 'brands'));
    }

    public function searchProducts(Request $request){

        $keyword = $request->input('search');

        $filter_modules = $request->input('filter_modules');
        $filter_modules = explode(',' , $filter_modules);
        $filter_categories = $request->input('filter_categories');
        $filter_categories = explode(',' , $filter_categories);
        $filter_brands = $request->input('filter_brands');
        $filter_brands = explode(',' , $filter_brands);

        if(!empty($keyword)) {
            $cables_query = Cable::where(function($q) use($keyword) {
                $q->where('Compatible Brands', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('Form', 'LIKE', '%' . $keyword . '%')
                    ->orWhere('Model', 'LIKE', '%' . $keyword . '%');
            });

            if(sizeof($filter_modules) > 0 && !empty($filter_modules[0])) {
                $cables_query = $cables_query->whereIn('Level 2 Cable Type', $filter_modules);
            }

            if(sizeof($filter_categories) > 0 && !empty($filter_categories[0])) {
                $cables_query = $cables_query->whereIn('Form', $filter_categories);
            }

            if(sizeof($filter_brands) > 0 && !empty($filter_brands[0])) {
                $cables_query = $cables_query->whereIn('Compatible Brands', $filter_brands);
            }

            $cables = $cables_query->get()->toArray();

            $transceivers_query = Transceiver::where(function($q) use($keyword) {
                    $q->where('Compatible Brand', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('Level 2 Form Factor', 'LIKE', '%' . $keyword . '%')
                        ->orWhere('Model', 'LIKE', '%' . $keyword . '%');
                });

            if(sizeof($filter_modules) > 0 && !empty($filter_modules[0])) {
                $transceivers_query = $transceivers_query->whereIn('Level 2 Form Factor', $filter_modules);
            }

            if(sizeof($filter_categories) > 0 && !empty($filter_categories[0])) {
                $transceivers_query = $transceivers_query->whereIn('Level 3 Type of Standard', $filter_categories);
            }

            if(sizeof($filter_brands) > 0 && !empty($filter_brands[0])) {
                $transceivers_query = $transceivers_query->whereIn('Compatible Brand', $filter_brands);
            }

            $transceivers = $transceivers_query->get()->toArray();

            $cables_modules = Cable::where('Compatible Brands', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Form', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Model', 'LIKE', '%' . $keyword . '%')
                ->distinct('Level 2 Cable Type')->select('Level 2 Cable Type', 'Product Type')->get()->toArray();

            $transceivers_modules = Transceiver::where('Compatible Brand', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Level 2 Form Factor', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Model', 'LIKE', '%' . $keyword . '%')
                ->distinct('Level 2 Form Factor')->select('Level 2 Form Factor', 'Product Type')->get()->toArray();

            $modules = array_merge($transceivers_modules, $cables_modules);

            $cables_categories = Cable::where('Compatible Brands', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Form', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Model', 'LIKE', '%' . $keyword . '%')
                ->distinct('Form')->select('Form', 'Product Type')->get()->toArray();

            $transceivers_categories = Transceiver::where('Compatible Brand', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Level 2 Form Factor', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Model', 'LIKE', '%' . $keyword . '%')
                ->distinct('Level 3 Type of Standard')->select('Level 3 Type of Standard', 'Product Type')->get()->toArray();

            $categories = array_merge($transceivers_categories, $cables_categories);

            $cables_brands = Cable::where('Compatible Brands', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Form', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Model', 'LIKE', '%' . $keyword . '%')
                ->distinct('Compatible Brands')->select('Compatible Brands', 'Product Type')->get()->toArray();

            $transceivers_brands = Transceiver::where('Compatible Brand', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Level 2 Form Factor', 'LIKE', '%' . $keyword . '%')
                ->orWhere('Model', 'LIKE', '%' . $keyword . '%')
                ->distinct('Compatible Brand')->select('Compatible Brand', 'Product Type')->get()->toArray();

            $brands = array_merge($transceivers_brands, $cables_brands);

        } else {
            $cables = Cable::all()->toArray();
            $transceivers = Transceiver::all()->toArray();
        }

        $results = array_merge($cables, $transceivers);

        return view('search_results', compact('keyword', 'results', 'filter_modules', 'modules', 'filter_categories', 'categories', 'filter_brands', 'brands'));
    }

    public function viewTransceiver($id) {
        $transceiver = Transceiver::find($id);
        return view('transceiver', compact('transceiver'));
    }

    public function viewCable($id){
        $cable = Cable::find($id);
        return view('cable', compact('cable'));
    }

    public function filterTransceivers(Request $request){
        $module = $request->input('filter_module');
        $filter_categories = $request->input('filter_categories');
        $filter_categories = explode(',' , $filter_categories);
        $filter_brands = $request->input('filter_brands');
        $filter_brands = explode(',' , $filter_brands);
        $filter_distances = $request->input('filter_distances');
        $filter_distances = explode(',' , $filter_distances);

        $query = Transceiver::where('Level 2 Form Factor', $module);

        if(sizeof($filter_categories) > 0 && !empty($filter_categories[0])) {
            $query = $query->whereIn('Level 3 Type of Standard', $filter_categories);
        }

        if(sizeof($filter_brands) > 0 && !empty($filter_brands[0])) {
            $query = $query->whereIn('Compatible Brand', $filter_brands);
        }

        if(sizeof($filter_distances) > 0 && !empty($filter_distances[0])) {
            $query = $query->whereIn('Reach', $filter_distances);
        }

        $transceivers = $query->get();

        $categories = Transceiver::where('Level 2 Form Factor', $module)->distinct('Level 3 Type of Standard')->select('Level 3 Type of Standard')->get();

        $brands = Transceiver::where('Level 2 Form Factor', $module)
            ->whereIn('Level 3 Type of Standard', $filter_categories)
            ->distinct('Compatible Brand')->select('Compatible Brand')->get();

        $distances = Transceiver::where('Level 2 Form Factor', $module)
            ->whereIn('Level 3 Type of Standard', $filter_categories)
            ->distinct('Reach')->select('Reach')->get();

        return view('transceivers', compact('module', 'filter_categories', 'filter_brands', 'filter_distances', 'transceivers', 'categories', 'brands', 'distances'));
    }

    public function filterCables(Request $request){
        $type = $request->input('filter_type');
        $filter_forms = $request->input('filter_forms');
        $filter_forms = explode(',' , $filter_forms);
        $filter_brands = $request->input('filter_brands');
        $filter_brands = explode(',' , $filter_brands);

        $query = Cable::where('Level 2 Cable Type', $type);

        if(sizeof($filter_forms) > 0 && !empty($filter_forms[0])) {
            $query = $query->whereIn('Form', $filter_forms);
        }

        if(sizeof($filter_brands) > 0 && !empty($filter_brands[0])) {
            $query = $query->whereIn('Compatible Brands', $filter_brands);
        }

        $cables = $query->get();

        $forms = Cable::where('Level 2 Cable Type', $type)->distinct('Form')->select('Form')->get();

        $brands = Cable::where('Level 2 Cable Type', $type)
            ->whereIn('Form', $filter_forms)
            ->distinct('Compatible Brands')->select('Compatible Brands')->get();

        return view('cables', compact('type', 'filter_forms', 'filter_brands', 'cables', 'forms', 'brands'));
    }

    public function contact(Request $request){

        $data = array();
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['phone'] = $request->input('phone');
        $data['subject'] = $request->input('subject');
        $data['body'] = $request->input('body');

        $emails = ['daniel.hartwright@hoishi.com', 'stephen.dale@hoishi.com', 'yasitha4@gmail.com'];

        Mail::send('contact_email', $data, function ($message) use ($data, $emails) {
            $message->from('admin@hoishi.com', 'Hoishi');
            $message->to($emails)->subject('[Hoishi - Contact Us] ' . $data['subject']);
        });

        $message = "Thank you for contacting us";

        return view('contact', compact('message'));
    }

    public function subscribe(Request $request){
        $data['email'] = $request->input('email');
        $emails = ['daniel.hartwright@hoishi.com', 'stephen.dale@hoishi.com', 'yasitha4@gmail.com'];

        Mail::send('subscribe', $data, function ($message) use ($data, $emails) {
            $message->from('admin@hoishi.com', 'Hoishi');
            $message->to($emails)->subject('[Hoishi - Subscribe] - Subscription Request for Newsletter');
        });

        $message = "Thank you for subscribing";

        return view('home', compact('message'));
    }
}
