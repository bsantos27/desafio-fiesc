<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTelefoneToAlunosTable extends Migration
{
    public function up()
    {
        // Verifica se a coluna 'telefone' existe antes de tentar adicioná-la
        if (!Schema::hasColumn('alunos', 'telefone')) {
            Schema::table('alunos', function (Blueprint $table) {
                $table->string('telefone');
            });
        }
    }

    public function down()
    {
        // Remove a coluna 'telefone' durante o rollback
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropColumn('telefone');
        });
    }
}
