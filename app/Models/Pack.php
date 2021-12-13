<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    protected $fillable = [
        'size',
        'widget_id',
    ];

    public function widget()
    {
        return $this->belongsTo(Widget::class, 'widget_id');
    }
}
