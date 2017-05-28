<?php

use Illuminate\Database\Seeder;

class ResponsaveisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            factory(App\Responsaveis::class, 10)->create()->each(function ($mae) {
       			$mae->produtos()->save(factory(App\Produtos::class)->make());
       			$mae->filhos()->save(factory(App\Filhos::class)->make());
    		});
    }
}
