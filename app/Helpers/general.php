<?php
function get_langs(){

return app()->getLocale() == "ar" ? "css-rtl" : "css";
};

function get_images($image){

return asset('assets\images/'.$image);

}




function get_trans($var){

    return app()->getLocale() == "ar" ? $var->gettranslation('name','ar') : $var->gettranslation('name','en');

}

;
