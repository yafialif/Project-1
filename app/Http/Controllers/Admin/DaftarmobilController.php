<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Daftarmobil;
use App\Http\Requests\CreateDaftarmobilRequest;
use App\Http\Requests\UpdateDaftarmobilRequest;
use Illuminate\Http\Request;



class DaftarmobilController extends Controller {

	/**
	 * Display a listing of daftarmobil
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request, Daftarmobil $daftarmobil)
    {

        $daftarmobil = $daftarmobil->get_data();

		return view('admin.daftarmobil.index', compact('daftarmobil'));
	}

	/**
	 * Show the form for creating a new daftarmobil
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{


	    return view('admin.daftarmobil.create');
	}

	/**
	 * Store a newly created daftarmobil in storage.
	 *
     * @param CreateDaftarmobilRequest|Request $request
	 */
	public function store(CreateDaftarmobilRequest $request, Daftarmobil $daftarmobil)
	{

	    $daftarmobil->add_data($request);

//		Daftarmobil::create($request->all());

		return redirect()->route(config('quickadmin.route').'.daftarmobil.index');
	}

	/**
	 * Show the form for editing the specified daftarmobil.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id, Daftarmobil $daftarmobil)
	{

	    $daftarmobil = $daftarmobil->edit_data($id);

		return view('admin.daftarmobil.edit', compact('daftarmobil'));
	}

	/**
	 * Update the specified daftarmobil in storage.
     * @param UpdateDaftarmobilRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDaftarmobilRequest $request, Daftarmobil $daftarmobil)
	{
	    $daftarmobil->update_data($id, $request);

		return redirect()->route(config('quickadmin.route').'.daftarmobil.index');
	}

	/**
	 * Remove the specified daftarmobil from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id, Daftarmobil $daftarmobil)
	{
	    $daftarmobil->delete_data($id);


		return redirect()->route(config('quickadmin.route').'.daftarmobil.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Daftarmobil::destroy($toDelete);
        } else {
            Daftarmobil::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.daftarmobil.index');
    }

}
