<?php

// File.php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'title',
      'overview',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}