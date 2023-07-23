<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{

    public function itemView()
    {
		if (Auth()->user()->role > 2 ) {
            return view('errors.401');
        }
    	$panddingItem = Item::where('status',0)->orderBy('order')->get();
    	$completeItem = Item::where('status',1)->orderBy('order')->get();

        
    	return view('noc.Subnets',compact('panddingItem','completeItem'));
    }

    public function updateItems(Request $request)
    {
		if (Auth()->user()->role > 2 ) {
            return view('errors.401');
        }
    	$input = $request->all();

    	foreach ($input['panddingArr'] as $key => $value) {
    		$key = $key+1;
    		Item::where('id',$value)->update(['status'=>0,'order'=>$key]);
    	}

    	foreach ($input['completeArr'] as $key => $value) {
    		$key = $key+1;
    		Item::where('id',$value)->update(['status'=>1,'order'=>$key]);
    	}

    	return response()->json(['status'=>'success']);
    }

}