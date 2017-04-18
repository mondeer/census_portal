<?php

namespace census\Http\Controllers;

use Illuminate\Http\Request;
use census\Adult;

class AdultCtrl extends Controller
{
    public function create() {
      return view('admin.adult.register');
    }

    public function postCreate(Request $request) {
        $adults = new Adult;

        $user = $request->all();

        $adults->birthcert = $request->input('birthcert');
        $adults->national_id = $request->input('national_id');
        $adults->f_name = $request->input('f_name');
        $adults->m_name = $request->input('m_name');
        $adults->l_name = $request->input('l_name');
        $adults->district_of_birth = $request->input('district_of_birth');
        $adults->constituency = $request->input('constituency');
        $adults->ward = $request->input('ward');
        $adults->location = $request->input('location');
        $adults->dob = $request->input('dob');
        $adults->gender = $request->input('gender');
        $adults->name_of_father = $request->input('name_of_father');
        $adults->name_of_mother = $request->input('name_of_mother');
        $adults->save();

        dd($user);
        // return redirect('/adult/view');
    }


    public function view() {
      $adults = Adult::all();

      return view('admin.adult.view')->with('adults', $adults);
    }

    public function deregister() {
      $adults = Adult::all();

      return view('admin.adult.deregister')->with('adults', $adults);
    }

    public function destroy($id)
    {
      $adult = Adult::find($id);
      $adult->delete();
      return redirect('/adult/deregister');
    }

    public function edit($id)
    {
      $adult = Adult::findOrFail($id);
      return view('admin.adult.edit')->with('adult', $adult);
    }

    public function update(Request $request, $id)
    {
      $adult = Adult::findOrFail($id);

      $adult->f_name= $request->input('f_name');
      $adult->constituency = $request->input('constituency');
      $adult->location = $request->input('location');
      $adult->ward = $request->input('ward');
      $adult->name_of_father = $request->input('name_of_father');
      $adult->name_of_mother = $request->input('name_of_mother');
      $adult->save();

      return redirect('/adult/view')->with(array(
        'adult'=>$adult,
        'update'=>true
      ));
    }

}
