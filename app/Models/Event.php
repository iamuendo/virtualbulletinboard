<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'poster',
        'slug',
        'description',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'location_details',
        'room_no',
        'meeting_url',
        'available_slots',
        'user_id',
        'event_category_id',
        'event_mode_id',

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(EventCategory::class);
    }

    public function mode(): BelongsTo
    {
        return $this->belongsTo(EventMode::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(EventForum::class);
    }

    public function likes(): HasMany
    {
        return $this->hasMany(EventForum::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    
}
