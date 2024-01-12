<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressReport extends Model
{   
    use HasFactory;
    protected $table = 'progress_reports';
    protected $primaryKey = 'id'; // Assuming 'projectsid' is the primary key
    public $timestamps = false;
    protected $fillable = ['project_id', 'progress_date', 'description'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}