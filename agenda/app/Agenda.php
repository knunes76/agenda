<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $primaryKey = 'age_id';
    protected $fillable = ['age_nome','age_email','age_fone'];
    protected $guarded = ['age_id', 'created_at', 'update_at'];
    protected $table = 'age_agenda';
}
