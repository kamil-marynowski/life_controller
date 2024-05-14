<?php

declare(strict_types=1);

namespace App\Models\EducationController\Languages;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 *
 * @property string $name
 * @property string $code
 */
class Language extends Model
{
    use HasFactory;

    protected $table = 'education_controller_languages';

    protected $fillable = [
        'name',
        'code',
    ];
}
