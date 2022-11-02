<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Luggage;

class LuggagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }	
    public function index()
    {
    	return view('pages.luggage_search');
    }
    public function create()
    {
		return view('pages.luggage_store');
    }
	public function store(Request $request)
	{
		$luggage = new Luggage([
			'urgent_matter' => $request->get('emergency_case'),
			'loading_date' => $request->get('loading_date'),
			'loading_time' => $request->get('loading_time'),
			'loading_space' => $request->get('emptypalce'),
			'loading_city' => $request->get('loading_city'),
			'drop_date' => $request->get('drop_date'),
			'drop_time' => $request->get('drop_time'),
			'drop_space' => $request->get('emptyOtherplace'),
			'drop_city' => $request->get('drop_city'),
			'baggage_name' => $request->get('baggage_name'),
			'baggage_weight' => $request->get('baggage_weight'),
			'vehicle_inf' => $request->get('vehicle_inf'),
			'vehicle_type1' => $request->get('vehicle_type1'),
			'vehicle_type1_content' => $request->get('vehicle_type1_content'),
			'vehicle_type2' => $request->get('vehicle_type2'),
			'vehicle_type3' => $request->get('vehicle_type3'),
			'bigo' => $request->get('bigo'),
			'fares_money' => $request->get('fares_money'),
			'is_consultation' => $request->get('is_consultation'),
			'phone_number' => $request->get('phone_number'),
			'person_charge' => $request->get('person_charge')
		]);
		$luggage->save();
		return redirect('/luggage_info');
	}
	public function show()
	{
		return view('pages.luggage_info');
	}
	public function search(Request $request){
		$first_beginplace = substr($request->get('beginplace'), 0, -1);
		$second_beginplace = explode(',', $first_beginplace);
		$first_endplace = substr($request->get('endplace'), 0, -1);
		$second_endplace = explode(',', $first_endplace);
		
		$results = Luggage::query()
							->where(function($loading_date) use ($request){
								if(!isset($loading_date)){
									$loading_date->where('loading_date','>', $request->get('loading_start'));
									$loading_date->where('loading_date','<', $request->get('loading_end'));
								}
							})
							->orwhereIn('loading_space',$second_beginplace)
							->orwhereIn('drop_space',$second_endplace)
							->orwhere(function($drop_date) use ($request){
								if(!isset($drop_date)){
									$drop_date->where('drop_date','>', $request->get('drop_start'));
									$drop_date->where('drop_date','<', $request->get('drop_end'));
								}
							})
								->orwhere('vehicle_inf',$request->get('vehicle_inf'))
							->orwhere('vehicle_type1',$request->get('type'))
							->orwhere('vehicle_type1_content',$request->get('other_type'))
							->orwhere('vehicle_type2',$request->get('spec_cond1'))
							->orwhere('vehicle_type3',$request->get('spec_cond2'))
							->get();
		$results['corp_name'] = Auth::user()->corp_name;
		// var_dump($results['corp_name']);exit;
		return view('pages.luggage_info')->with('results',$results);
	}

	public function edit()
	{
		$showdata = Luggage::all();
		return view('pages.luggage_edit')->with('showdatas',$showdata);
	}
	public function update(Request $request, $id)
	{
		$luggage = Luggage::find($id);
		$luggage->loading_time = $request->get('loading_time');
		$luggage->loading_space = $request->get('loading_space');
		$luggage->drop_time = $request->get('drop_time');
		$luggage->drop_space = $request->get('drop_space');
		$luggage->vehicle_inf = $request->get('vehicle_inf');
		$luggage->vehicle_type1 = $request->get('vehicle_type1');
		$luggage->vehicle_type2 = $request->get('vehicle_type2');
		$luggage->vehicle_type3 = $request->get('vehicle_type3');
		$luggage->bigo = $request->get('bigo');
		$luggage->person_charge = $request->get('person_charge');
		$luggage->save();
		return redirect('/luggage_edit');
	}
	public function destroy($id)
	{
		$luggage = Luggage::find($id);
		$luggage->delete($id);
		return response()->json('Successfully Deleted');
	}
	public function edit_table($id){
		$editdata = Luggage::find($id);
		return view('pages.table_edit')->with('editdata', $editdata);
	}
}
