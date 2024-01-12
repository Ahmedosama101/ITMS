<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectRequest extends Model
{
    use HasFactory;
    protected $table = 'project_requests';
    protected $primaryKey = 'id'; // Assuming 'projectsid' is the primary key
    public $timestamps = false; // Assuming there are no created_at and updated_at columns 
    protected $fillable = [
        'id',
        'name', 
        'type',
        'description'
    ];}
