<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class SearchAutoCompleteController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('search-autocomplete',compact('users'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = User::where('name', 'LIKE', '%'. $query. '%')->get();
        return response()->json($filterResult);
    }
}
