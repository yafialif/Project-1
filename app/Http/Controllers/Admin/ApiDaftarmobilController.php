<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Daftarmobil;
use App\Http\Requests\CreateDaftarmobilRequest;
use App\Http\Requests\UpdateDaftarmobilRequest;
use Illuminate\Http\Request;



class ApiDaftarmobilController extends Controller {

	/**
	 * listing of daftarmobil
	 *
     * @return data Json
	 */
	public function get_mobil( Daftarmobil $daftarmobil)
    {

        $daftarmobil = $daftarmobil->get_data();

		return response()->json($daftarmobil, 200);
	}



    /**
     * listing of daftarmobil
     *
     * @param $brand
     *
     * @return data Json
     */
    public function get_mobil_brand($brand, Daftarmobil $daftarmobil)
    {

        $daftarmobil = $daftarmobil->get_data()->where('merek', '=',$brand );

        return response()->json($daftarmobil, 200);
    }



    /**
     * listing of daftarmobil
     *
     * @param $brand , $type
     *
     * @return data Json
     */
    public function get_mobil_brand_type($brand, $type, Daftarmobil $daftarmobil)
    {

        $daftarmobil = $daftarmobil->get_data()->where('merek', '=',$brand )->where('tipe','=', $type);

        return response()->json($daftarmobil, 200);
    }



    /**
	 * Store a newly created daftarmobil in storage.
	 *
     * @param CreateDaftarmobilRequest|Request $request
     *
	 */
	public function store($brand, $type ,Request $request, Daftarmobil $daftarmobil)
	{

	    $request = new Request(array_merge($request->all(), ['merek'=>$brand, 'tipe'=>$type]));

	    $daftarmobil = $daftarmobil->add_data( $request);

	    return response()->json($daftarmobil, 200);
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

	    return response()->json($daftarmobil, 200);

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

	    return response()->json($daftarmobil, 200);

	}

	/**
	 * Remove the specified daftarmobil from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id, Daftarmobil $daftarmobil)
	{
	    $daftarmobil->delete_data($id);

	    return response()->json($daftarmobil, 200);

	}


}
