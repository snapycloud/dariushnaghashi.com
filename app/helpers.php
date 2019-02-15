<?php 

function convertToPersion($string)
{
      $farsi_chars = ['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'];
      $latin_chars = ['0','1','2','3','4','5','6','7','8','9'];
      return str_replace($latin_chars, $farsi_chars, $string);
}

