<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListController extends Controller
{
    public function index(){
        return view('listing.index',[
            'datas' => Listing::latest()->filter(request(['tag','search']))->paginate(3)
        ]);
    }

    public function show(Listing $id){
        return view('listing.show',[
            'data' => $id
        ]);
    }

    public function create(){
        return view('listing.create');
    }

    public function store(Request $request){
        $inputFields = $request->validate([
            'title' => 'required',
            'company' => ['required',Rule::unique('listings','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $inputFields['logo'] = $request->file('logo')->store('logos','public');
        }

        Listing::create($inputFields);

        return redirect('/')->with('message','Listing created successfully!');
    }
}
