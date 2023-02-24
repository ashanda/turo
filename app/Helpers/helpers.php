<?php

function profile_name(){
  $profile_letter =  'https://ui-avatars.com/api/?name='.Auth::user()->company_name.'&bold=true&rounded=true&length=2&background=696cff&color=ffffff';
  return $profile_letter;
}

