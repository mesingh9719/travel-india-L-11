<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
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
        "first_name",
        "last_name",
        "mobile",
        "email",
        "whatsapp_number",
        "dl_number",
        "gst_number",
        "pan_number",
        "father_name",
        "address",
        "dob",
        "gender",
        "user_type_id",
        "password",
        "aadhar_image_front",
        "aadhar_image_back",
        "aadhar_number",
        "dl_image",
        "profile_image",
        'voter_id_front',
        'voter_id_back',
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



  
    
    // Optionally, customize the log name or log description
    // protected static $logName = 'default_log_name';


    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly($this->fillable)
        ->useLogName('use log');
        // Chain fluent methods for configuration options
    }

    
}
