<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomerController extends Controller
{
    public function update(Request $request)
    {
        $user = auth()->guard('customer')->user();
        $item = Customer::find($user->id);
        
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'username' => 'required|string|max:20|unique:customers,username,'.$user->id,
            'email' => 'required|string|email|max:255|unique:customers,email,'.$user->id,
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            'cp' => 'required|max:255',
            'geoprov_id' => 'required|max:255',
            'geoloc_id' => 'required|max:255',
            ]);
            
            $item->fill($request->all());
            $item->save();
            
        if($request->from == "checkout"){
            return redirect()->route('store.checkout')->with('message','Datos actualizados');
        } 
        return redirect()->route('store.customer-account')->with('message','Datos actualizados');

    }

    public function updatePassword(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[
            'password' => 'required|string|min:6|confirmed'
        ],[
            'password.required' => 'Debe ingresar un password',
            'password.confirmed' => 'Las constraseñas no coinciden',
        ]);
        
        
        //bcrypt
    }
}
