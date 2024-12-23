<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends BaseModel
{
  /**
   * Get the school that owns the Education
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function school(): BelongsTo
  {
      return $this->belongsTo(School::class, 'school_id');
  }
}
