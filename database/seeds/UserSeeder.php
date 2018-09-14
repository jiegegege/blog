<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 100)->create();
        $user = \App\User::find(1);
        $user->name='chane';
        $user->email='893461089@qq.com';
        $user->password=bcrypt('000000');
        $user->is_admin=true;
        $user->save();
    }
}
