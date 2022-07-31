<?php
function protect_input($data){
    echo trim(strip_tags($_POST[$data]));
}
?>