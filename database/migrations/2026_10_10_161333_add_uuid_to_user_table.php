<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('user', function (Blueprint $table) {
            $table->uuid('uuid')->nullable()->unique();
        });

        DB::table('user')->whereNull('uuid')->get()->each(function ($user) {
            DB::table('user')
                ->where('id', $user->id)
                ->update(['uuid' => (string) Str::uuid()]);
        });
    }

    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropUnique(['uuid']);
            $table->dropColumn('uuid');
        });
    }
};