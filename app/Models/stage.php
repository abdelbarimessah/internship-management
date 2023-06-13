<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable = [
        'annee',
        'moisMax',
        'dateDepart',
        'dateFin',
        'demandeDate',
        'parrin',
        'stageType',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
