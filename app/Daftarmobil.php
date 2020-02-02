<?php

namespace App;

//use http\Env\Request;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;



class Daftarmobil extends Model {





    protected $table    = 'daftarmobil';

    protected $fillable = [
          'no_kerangka',
          'no_polisi',
          'merek',
          'tipe',
          'tahun'
    ];

    public function get_data(){

        $data = Daftarmobil::all();
        return $data;
    }

    public function add_data(Request $request){

        $data = Daftarmobil::create($request->all());
        return $data;

    }

    public function delete_data($id){
        Daftarmobil::destroy($id);

    }

    public function edit_data($id){
        $data = Daftarmobil::find($id);
        return $data;

    }

    public function update_data($id, Request $request){

        $data = Daftarmobil::findOrFail($id);
        $data->update($request->all());
        return $data;
    }



    public static function boot()
    {
        parent::boot();

        Daftarmobil::observe(new UserActionsObserver);
    }




}
