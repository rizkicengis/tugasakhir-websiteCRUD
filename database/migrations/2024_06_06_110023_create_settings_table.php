<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();

            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Peternak Ayam',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_location',
            'label' => 'Alamat Kantor',
            'value' => 'Sleman, Yogyakarta, Indonesia',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/posterrizz_?igsh=MWFicHg5eHAyOTJkOA==',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_tiktok',
            'label' => 'TikTok',
            'value' => 'https://www.tiktok.com/@langitdanshenja?_t=8myK36FGwRl&_r=1',
            'type' => 'text',
        ]);

        setting::create([
            'key' => '_facebook',
            'label' => 'Facebook',
            'value' => 'https://www.facebook.com/muhammad.r.aziz.589',
            'type' => 'text',
        ]);
    
        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'website peternak ayam',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
