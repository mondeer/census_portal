<?php

namespace census\Http\Controllers;

use Illuminate\Http\Request;
use census\Adult;
use census\Birth;
use PDF;

class FilterCtrl extends Controller
{
    public function filter() {
      return view('admin.reports.constituency');
    }

    public function constituency(Request $request) {
      $constituency = Adult::query();

      $cons = $request->input('constituency');

      $adults = $constituency->where('constituency', $cons)->get();

      return view('admin.reports.constituencyfilters')->with(array(
        'adults'=>$adults,
        'cons'=>$cons
      ));
    }

    public function filterlocation() {
      return view('admin.reports.location');
    }

    public function location(Request $request) {
      $location = Adult::query();

      $locale = $request->input('location');

      $adults = $location->where('location', $locale)->get();

      return view('admin.reports.locationfilters')->with(array(
        'adults'=>$adults,
        'locale'=>$locale
      ));
    }

    public function filterward() {
      return view('admin.reports.ward');
    }

    public function ward(Request $request) {
      $ward = Adult::query();

      $locale = $request->input('ward');

      $adults = $ward->where('ward', $locale)->get();

      return view('admin.reports.wardfilters')->with(array(
        'adults'=>$adults,
        'locale'=>$locale
      ));
    }

    public function filtergender() {
      return view('admin.reports.gender');
    }

    public function gender(Request $request) {

      $mod = $request->input('gategory');
      $locale = $request->input('gender');

      if ($mod == 'children'){
        $child = Birth::query();
        $persons = $child->where('gender', $locale)->get();
      }elseif($mod == 'adults'){
        $adult = Adult::query();
        $persons = $adult->where('gender', $locale)->get();
      }

      return view('admin.reports.genderfilters')->with(array(
        'persons'=>$persons,
        'locale'=>$locale
      ));
    }

    public function cert(Request $request) {
      $child = Birth::query();
      $locale = $request->input('birthcert');
      $children = $child->where('birthcert', $locale)->get();

      return view('clerk.child.birthcert')->with(array(
        'children'=>$children,
        'locale'=>$locale
      ));
    }

    public function birthcert(Request $request) {
      $child = Birth::query();
      $locale = $request->input('birthcert');
      $children = $child->where('birthcert', $locale)->get();

      view()->share('children',$children);

      $pdf = PDF::loadView('clerk.birthcert', $children);
      return $pdf->download('clerk.birthcert');

      return view('clerk.child.birthcert')->with(array(
        'children'=>$children,
        'locale'=>$locale
      ));
    }
}
