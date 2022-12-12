<?php

namespace Database\Seeders;

use App\Models\ContactForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contact_forms');//->truncate()をするとfactoryが登録されない

        $contacts = [
            [
                'name' => '名前',
                'title' => '件名',
                'email' => 'test@test.com',
                'url' => 'http://test',
                'gender' =>0,
                'age' => 10,
                'contact' => 'お問い合わせ内容'
            ]
            ];

            foreach($contacts as $contact) {
                ContactForm::create($contact);
            }
    }
}
