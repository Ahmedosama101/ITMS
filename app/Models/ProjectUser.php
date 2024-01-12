<?php

// app/Models/ProjectUser.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    use HasFactory;
    protected $table = 'project_user';
    protected $primaryKey = 'id'; // Assuming 'projectsid' is the primary key
    public $timestamps = false;
    protected $fillable = [
        'id',
        'projectid',
        'userid',
        'is_lead'
        // Add other columns here if needed
    ];
}
