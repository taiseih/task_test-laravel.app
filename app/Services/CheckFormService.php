<?php 

namespace App\Services;

class CheckFormService {

    // 引数と変数にControllerの$contactが置き換わる
    public static function checkGender($data){

        if($data->gender == 0 ){
            $gender = '男性';
        }else {
            $gender = '女性';
        }
        return $gender;
    }

}


?>