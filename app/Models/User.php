<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use App\Models\DLVerify;
class User extends Authenticatable 
{
    use HasFactory, Notifiable, HasApiTokens, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "user_type_id",
        "mobile",
        "email",
        "dl_number",
        "gst_number",
        "pan_number",
        "father_name",
        "password",
        "aadhar_image_front",
        "aadhar_image_back",
        "aadhar_number",
        "dl_image",
        "profile_image",
        "vter_id_front",
        "voter_id_back",
        "full_name", 
        "alternate_Mobile",
        "business_name",
        "business_address",
        "home_address",
        "business_state",
        "business_city",
        "business_zip",
        "home_state",
        "home_city",
        "home_zip",
        "selfie_image"
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly($this->fillable)
        ->useLogName('User Log');
    }

    public function userType(): BelongsTo
    {
        return $this->belongsTo(UserType::class);
    }

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }

    public function bankDetails()
    {
        return $this->hasOne(BankDetails::class);
    }

    public function dlVerifies()
    {
        return $this->hasMany(DLVerify::class);
    }

}
