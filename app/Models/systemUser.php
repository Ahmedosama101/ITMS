<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class systemUser extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id'; // Assuming 'projectsid' is the primary key
    public $timestamps = false; // Assuming there are no created_at and updated_at columns 
    protected $fillable = [
        'id',
        'name', 
        'password',
        'email',
        'role'
    ];
    public function leadingProjects()
    {
        return $this->hasMany(Project::class, 'leaddeveloper');
    }

    public function scopeDevelopers($query)
    {
        return $query->where('role', 3);
    }

}
