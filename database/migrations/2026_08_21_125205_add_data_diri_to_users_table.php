<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nik', 16)
                ->nullable()
                ->unique()
                ->after('role');

            $table->string('no_hp', 20)
                ->nullable()
                ->after('nik');

            $table->text('alamat')
                ->nullable()
                ->after('no_hp');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['nik']);

            $table->dropColumn([
                'nik',
                'no_hp',
                'alamat',
            ]);
        });
    }
};