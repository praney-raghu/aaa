<?php

namespace SaveLife\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SaveLife\User;
use SaveLife\Donor;

class DonorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('search');
    }

    /**
     * Show the application dashboard for Donor.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$donor = DB::table('users')->join('donors','users.id','=','donors.user_id')->join('bloodgroups','bloodgroups.id','=','donors.blood_group_id')->where('users.id',Auth::user()->id)->get();
    	return view('donor.home', compact('donor'));
    }

    /*
	 * Storing status of Donor Availability
	 *
	 * @return \Illuminate\Http\Response
     */
    public function status(Request $request) 
    {
    	$id = Auth::user()->id;
    	
    }

}
