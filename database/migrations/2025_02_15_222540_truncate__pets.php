<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   //exclui todos os registros da tabela e reinicia o id
       DB::table('Pets')->truncate();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
