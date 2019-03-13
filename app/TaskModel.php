<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    protected $table = 'task';
    protected $fillable = ['name', 'date_begin', 'date_end', 'description', 'type'];
    protected $dates = ['date_begin', 'date_end'];

    public function gettypeAttribute($value)
    {
        $var = "";

        if (strlen($value) == 1) {
            switch ($value) {
                case 1:
                    $var = "To Do / À Fazer";
                    break;
                case 2:
                    $var = "Doing / Fazendo";
                    break;
                case 3:
                    $var = "Done / Feito";
                    break;
                case 4:
                    $var = "Backlog / Ideias";
                    break;
            }
        } else {
            switch ($value) {
                case "To Do / À Fazer":
                    $var = "1";
                    break;
                case "Doing / Fazendo":
                    $var = "2";
                    break;
                case "Done / Feito":
                    $var = "3";
                    break;
                case "Backlog / Ideias":
                    $var = "4";
                    break;
            }
        }

        return $var;
    }

    public function getTypeIntAttribute()
    {
        return $this->attributes['type'];
    }
}
