<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableFuncionariosColumnAvatarGrandeDefault extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcionarios', function ($table) {
            $table->text('avatar_grande')->default('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')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcionarios', function ($table) {
            DB::statement('ALTER TABLE funcionarios ALTER COLUMN avatar_grande DROP DEFAULT');
        });
    }
}