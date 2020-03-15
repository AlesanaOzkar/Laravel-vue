<?php

use Illuminate\Database\Seeder;
use App\Paciente;
class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Paciente();
        $user->codigo = 'PT1';
        $user->nombre = 'Oscar';

        $user->user_id = 1;
        $user->apellido_paterno = 'Rubio';
        $user->apellido_materno = 'Sevilla';

        $user->fecha_nacimiento = '1991-09-27';
 
        $user->save(); 

        $user = new Paciente();
        $user->user_id = 1;
        $user->codigo = 'PT2';

        $user->nombre = 'Patsy Alejandra';

   
        $user->apellido_paterno = 'Chavez';
        $user->apellido_materno = 'Rosas';

        $user->fecha_nacimiento = '1995-06-15';
 
        $user->save(); 


        

        for($i = 0; $i < 500; $i++) {
            $faker = Faker\Factory::create();
            Paciente::create([
                'user_id' => rand(1,100),
    
                'nombre' => $faker->firstNameMale,
                'apellido_paterno' => $faker->lastName,
                'apellido_materno' => $faker->lastName,
 
                'telefono_celular' => $faker->ean8,
                'telefono_fijo' => $faker->ean8,

                'fecha_nacimiento' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'email' => $faker->email
            ]);
        }
        for($i = 0; $i < 500; $i++) {
            $faker = Faker\Factory::create();

            Paciente::create([
                'user_id' => rand(1,50),
                  

                'nombre' => $faker->firstNameFemale,
                'apellido_paterno' => $faker->lastName,
                'apellido_materno' => $faker->lastName,
                'telefono_celular' => $faker->ean8,
                'telefono_fijo' => $faker->ean8,
                'notas' => $faker->realText,
                'fecha_nacimiento' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'email' => $faker->email
            ]);
        }

    }
}
