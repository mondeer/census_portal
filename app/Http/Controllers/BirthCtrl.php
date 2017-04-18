<?php

namespace census\Http\Controllers;

use Illuminate\Http\Request;
use census\Birth;

class BirthCtrl extends Controller
{
    public function create() {
      return view('admin.child.register');
    }

    public function postCreate(Request $request) {
        $births = new Birth;

        $births->birthcert = $request->input('birthcert');
        $births->names = $request->input('names');
        $births->constituency = $request->input('constituency');
        $births->location = $request->input('location');
        $births->ward = $request->input('ward');
        $births->dob = $request->input('dob');
        $births->gender = $request->input('gender');
        $births->name_of_father = $request->input('name_of_father');
        $births->name_of_mother = $request->input('name_of_mother');
        $births->save();

        return redirect('/births/view');
    }


    public function view() {
      $births = Birth::all();

      return view('admin.child.view')->with('births', $births);
    }

    public function deregister() {
      $births = Birth::all();

      return view('admin.child.deregister')->with('births', $births);
    }

    public function destroy($id)
    {
      $birth = Birth::find($id);
      $birth->delete();
      return redirect('/births/deregister');
    }

    public function edit($id)
    {
      $birth = Birth::findOrFail($id);
      return view('admin.child.edit')->with('birth', $birth);
    }

    public function update(Request $request, $id)
    {
      $birth = Birth::findOrFail($id);

      $birth->names= $request->input('names');
      $birth->constituency = $request->input('constituency');
      $birth->location = $request->input('location');
      $birth->ward = $request->input('ward');
      $birth->name_of_father = $request->input('name_of_father');
      $birth->name_of_mother = $request->input('name_of_mother');
      $birth->save();

      return redirect('/births/view')->with(array(
        'birth'=>$birth,
        'update'=>true
      ));
    }
}
