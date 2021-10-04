<?php

namespace App\Models\Abstracts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

abstract class TranslationModel extends Model
{
    use HasFactory;

    public function setAttribute($key, $value)
    {
        return parent::setAttribute(Str::snake($key), $value);
    }

    public function getAttribute($key)
    {
        return parent::getAttribute(Str::snake($key));
    }
}
