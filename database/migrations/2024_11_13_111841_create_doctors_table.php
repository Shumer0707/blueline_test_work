<?php

use App\Models\Doctor;
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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('specialization_id')->constrained();
            $table->timestamps();

        });
        Doctor::insert([
            [
                'name' => 'Kurpatov',
                'specialization_id' => 1,
            ],
            [
                'name' => 'Sklifosovsky',
                'specialization_id' => 2,
            ],
            [
                'name' => 'Komarov',
                'specialization_id' => 3,
            ],
            [
                'name' => 'Smit',
                'specialization_id' => 4,
            ],
            [
                'name' => 'Muntianu',
                'specialization_id' => 4,
            ],
            [
                'name' => 'Myasnikov',
                'specialization_id' => 1,
            ],
            [
                'name' => 'Cokolov',
                'specialization_id' => 2,
            ],
            [
                'name' => 'Stricalo',
                'specialization_id' => 3,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
