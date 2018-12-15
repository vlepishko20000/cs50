<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'arrival_date', 'departure_date', 'adult_count','childs_count'];
}
