<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//user classnya 
//extends Authenticatable turunan dari Authenticatable yang maksudnya class user bisa memanggil properti yg ada di Authenticatable
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //protected maksudnya datanya tdk bisa dirubah namun bisa dipanggil diclass turunannanya/subclass
    //public maksudnya datanya bisa dirubah dan datanya bisa dipanggil di class turunannya
    //privat maksudnya datanya tdk bisa dirubah dan datanya tidak bisa dipanggil di class turunannya/subclass
    //fillable adalah array dengan didalamnya tipedata string dan int 
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    public function role(string $role): bool
    {
        return $this->role === $role;
        //=== untuk membandingkan dan menyamakan antara dua variable dan fungsi
    }

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
}