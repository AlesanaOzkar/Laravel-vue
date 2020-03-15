 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
 
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->string('codigo')->unique()->nullable();
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->date('fecha_nacimiento')->nullable();
            $table->enum('genero',['Masculino','Femenino'])->nullable();
            $table->string('ocupacion')->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('telefono_fijo')->nullable();
            $table->integer('telefono_celular')->nullable();
            $table->integer('contactoemergencia_telefono')->nullable();
            $table->dateTime('fecha_ultima_consulta')->nullable();
            $table->text('notas')->nullable();
            //Llave foranea
            //$table->foreign('paciente_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
 
