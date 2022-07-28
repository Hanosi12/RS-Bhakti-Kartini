<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function isAdmin() {
        return $this->roles()->where('role', 'Admin')->exists();
     }

    public function isPasien() {
        return $this->roles()->where('role', 'Pasien')->exists();
    }

    public function isDokter() {
        return $this->roles()->where('role', 'Dokter')->exists();
    }

    public function isDeveloper() {
        return $this->roles()->where('role', 'Developer')->exists();
    }
}
