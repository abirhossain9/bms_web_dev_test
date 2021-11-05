<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = 2;
        $not_verified = 2;
        $users = User::Orderby('id','asc')->WHERE('role',$user)->WHERE('admin_verification',$not_verified)->get();
        return view('dashboard',compact('users'));

    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->admin_verification = 1;
        $user->save();
        return redirect()->route('dashboard')->with('user Verified Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
