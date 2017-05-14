<?php

namespace census\Http\Controllers;

use Illuminate\Http\Request;
use census\Adult;
use census\Birth;

class ClerkCtrl extends Controller
{
  public function createadult() {
    return view('clerk.adults.createadult');
  }

  public function postCreateadult(Request $request) {
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

      return redirect('/clerk/adult/view');
  }


  public function viewadult() {
    $adults = Adult::all();

    return view('clerk.adults.view')->with('adults', $adults);
  }

  public function editadult($id)
  {
    $adult = Adult::findOrFail($id);
    return view('clerk.adults.edit')->with('adult', $adult);
  }

  public function updateadult(Request $request, $id)
  {
    $adult = Adult::findOrFail($id);

    $adult->f_name= $request->input('f_name');
    $adult->m_name= $request->input('m_name');
    $adult->l_name= $request->input('l_name');
    $adult->constituency = $request->input('constituency');
    $adult->location = $request->input('location');
    $adult->ward = $request->input('ward');
    $adult->name_of_father = $request->input('name_of_father');
    $adult->name_of_mother = $request->input('name_of_mother');
    $adult->save();

    return redirect('/clerk/adult/view')->with(array(
      'adult'=>$adult,
      'update'=>true
    ));
  }

  public function create() {
    return view('clerk.child.register');
  }

  public function postCreate(Request $request) {
      $births = new Birth;

      $births->birthcert = $request->input('birthcert');
      $births->f_name = $request->input('f_name');
      $births->m_name = $request->input('m_name');
      $births->l_name = $request->input('l_name');
      $births->district_of_birth = $request->input('district_of_birth');
      $births->constituency = $request->input('constituency');
      $births->ward = $request->input('ward');
      $births->location = $request->input('location');
      $births->dob = $request->input('dob');
      $births->gender = $request->input('gender');
      $births->name_of_father = $request->input('name_of_father');
      $births->name_of_mother = $request->input('name_of_mother');
      $births->save();

      return redirect('/clerk/births/view');
  }


  public function view() {
    $births = Birth::all();

    return view('clerk.child.view')->with('births', $births);
  }

  public function deregister() {
    $births = Birth::all();

    return view('clerk.child.deregister')->with('births', $births);
  }

  public function destroy($id)
  {
    $birth = Birth::find($id);
    $birth->delete();
    return redirect('/clerk/births/deregister');
  }

  public function edit($id)
  {
    $birth = Birth::findOrFail($id);
    return view('clerk.child.edit')->with('birth', $birth);
  }

  public function update(Request $request, $id)
  {
    $birth = Birth::findOrFail($id);

    $birth->f_name = $request->input('f_name');
    $birth->m_name = $request->input('m_name');
    $birth->l_name = $request->input('l_name');
    $birth->district_of_birth = $request->input('district_of_birth');
    $birth->constituency = $request->input('constituency');
    $birth->location = $request->input('location');
    $birth->ward = $request->input('ward');
    $birth->name_of_father = $request->input('name_of_father');
    $birth->name_of_mother = $request->input('name_of_mother');
    $birth->save();

    return redirect('/clerk/births/view')->with(array(
      'birth'=>$birth,
      'update'=>true
    ));
  }

}
