<?php
function protect_input($data){
    echo trim(strip_tags($_POST[$data]));
}

function debug_array ($arr) {
    echo "<pre>";
    print_r ($arr);
    echo "<pre>";
  }
  ?>