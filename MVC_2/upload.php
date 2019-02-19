
<?php

function uploadImage($image) {
    $extention = pathinfo($image['name'], 4);
    $filename = uniqid(). ".".$extention;
    money_format($image['tmp_name'], "./uploads/" .$filename);
}
