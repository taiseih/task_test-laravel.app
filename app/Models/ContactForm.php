<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
// DBに保存
    protected $fillable = [
        'name',
        'title',
        'email',
        'url',
        'gender',
        'age',
        'contact',
    ];

    //検索機能
    public function scopeSearch($query, $search){
        if($search !== null){
            $search_split = mb_convert_kana($search, 's');//全角スペースを半角に変換
            $search_split2 = preg_split('/[\s]+/', $search_split); //空白で区切る
            foreach( $search_split2 as $val){
                $query->where('name', 'like', '%' .$val. '%');
            }  
        }
        return $query;
    }

}
