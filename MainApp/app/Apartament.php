<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartament extends Model
{
    //
    protected $fillable = [
        'room', 'floor', 'adult_capacity','luxury','cost_per_day','currency'];
    /*     $table->integer('room');
            $table->integer('floor')
            $table->integer('adult_capacity');
            $table->text("luxury");
            $table->integer('cost_per_day');
            $table->text('currency');
     */
}
