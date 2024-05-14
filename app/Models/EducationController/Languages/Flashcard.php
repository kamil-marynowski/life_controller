<?php

declare(strict_types=1);

namespace App\Models\EducationController\Languages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flashcard extends Model
{
    use HasFactory;

    protected $table = 'flash_cards';

    protected $fillable = [
        'type_id',
        'category_id',
        'base_language_id',
        'learn_language_id',
        'base_language_content',
        'learn_language_content',
        'pronunciation',
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(FlashcardCategory::class, 'category_id');
    }

    /**
     * @return BelongsTo
     */
    public function baseLanguage(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'base_language_id');
    }

    /**
     * @return BelongsTo
     */
    public function learnLanguage(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'learn_language_id');
    }
}
