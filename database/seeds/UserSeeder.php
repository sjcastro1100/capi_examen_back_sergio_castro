<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Ejecuta la acción de crear 100 usuarios con su domicilio
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\UserDomicilio::class,100)->create();

    }
}
