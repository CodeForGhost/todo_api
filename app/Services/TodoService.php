<?php

namespace App\Services;

use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TodoService
{
    public static function store($data)
    {
        $todo = new Todo();
        $todo->date = $data['date'];
        $todo->title = $data['title'];
        $todo->save();
        return $todo;
    }


    public static function update($todo, $data)
    {
        $todo->date = $data->date;
        $todo->title = $data->title;
        $todo->save();
        return $todo;
    }
    
}
