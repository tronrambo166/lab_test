<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Likecomm;

class testController extends Controller
{
 

	public function home() {
    return view('home');
}




 public function Palindrome(Request $request)
    {
      $text=$request->test;
	  $reverse=strrev($text);
	   $length = strlen($text);
	  
 $value=str_split($text);
   
  $l = 0;
  $r = strlen($text) - 1;
  $flag = 0;

  while($r > $l){
    if ($value[$l] != $value[$r]){
      $flag = 1;
      break;
    }
    $l++;
    $r--;
  }
  
  $String=implode('', $value); 

  if ($flag == 0){
	  Session::put('word', $String);
	  Session::put('reverse', $reverse);
	  Session::put('chars', $length);
      Session::put('success', $String.' is a Palindrome.');
  } else {
	   Session::put('word', $String);
	  Session::put('reverse', $reverse);
	  Session::put('chars', $length);
    Session::put('success', $String.' is not a Palindrome.');
  }


       return redirect()->back();       
    }



}
