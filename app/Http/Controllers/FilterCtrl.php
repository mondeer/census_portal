<?php

namespace census\Http\Controllers;

use Illuminate\Http\Request;
use census\Adult;
use census\Birth;

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
}
