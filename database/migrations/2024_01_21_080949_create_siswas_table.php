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
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->enum ('kelas', ['X PPLG 1','X PPLG 2','X PPLG 3','X AKT 1','X AKT 2','X DKV','X ANM', 'X BDP', 'XI PPLG 1','XI PPLG 2','XI PPLG 3','XI AKT 1','XI AKT 2','XI DKV','XI ANM', 'XI BDP', 'XII PPLG 1','XII PPLG 2','XII PPLG 3','XII AKT 1','XII AKT 2','XII DKV 1','XII DKV 2','XII ANM', 'XII BDP']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
