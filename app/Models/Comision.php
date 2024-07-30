<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    use HasFactory;

    protected $table = 'comision';
    protected $fillable = [];


    public function revision_extintor(){
        return $this->hasMany(RevisionExtintor::class);
    }


}
