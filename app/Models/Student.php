<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'namalengkap',
        'namapanggilan',
        'email',
        'nomor_hp',
        'jalur',
        'image',
        'programstudi_1',
        'programstudi_2',
    ];

    public function setImageAttribute(?string $value): void
    {
        $this->attributes['image'] = $this->normalizeImagePath($value);
    }

    public function getImageAttribute(?string $value): ?string
    {
        return $this->normalizeImagePath($value);
    }

    protected function normalizeImagePath(?string $value): ?string
    {
        if ($value === null) {
            return null;
        }

        $normalized = trim($value);
        $normalized = str_replace(["\r", "\n", "\t"], '', $normalized);

        return $normalized === '' ? null : $normalized;
    }
}