<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'company_license'=>'Baa0001',          // 公司序號
            'account'=>'test001',          // 帳號
            'password'=>bcrypt('123'),  // 密碼
            'name'=>'王尹駿',          // 姓名
            'mobile_phone'=>'0928043711',          // 手機號碼
        ]);
    }
}
