<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'projectsid'; // Assuming 'projectsid' is the primary key
    public $timestamps = false; // Assuming there are no created_at and updated_at columns 
    protected $fillable = [
        'projectsid ',
        'name',
        'owner',
        'type',
        'startdate',
        'enddate',
        'initiation',
        'leaddeveloper',
        'developers',
        'estimatedduration',
        'dev_methodology',
        'dev_platform',
        'deployment_type',
        'planning',
        'design',
        'test',
        'deploy',
        'status'
    ];
   
    public function leadDeveloper()
    {
        return $this->belongsTo(SystemUser::class, 'leaddeveloper', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(systemUser::class, 'project_user', 'projectid', 'userid');
    }

    public function developers()
    {
        return $this->users()->where('role', 3);
    }

    public function leadDeveloperr()
    {
        return $this->belongsTo(User::class, 'owner', 'id');
    }   
    
}
