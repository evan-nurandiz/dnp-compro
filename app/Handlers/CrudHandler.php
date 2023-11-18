<?php

namespace App\Handlers;
use Illuminate\Support\Facades\DB;

class CrudHandler{
    public function get($table)
    {
        return DB::table($table)->orderBy('created_at', 'DESC')->paginate(10);
    }

    public function getById($table, $id)
    {
        return DB::table($table)->find($id);
    }

    public function getByOneCondition($table, $column, $value)
    {
        return DB::table($table)->where($column, $value)->first();
    }

    public function create($table, $data)
    {
        return DB::table($table)->insert($data);
    }

    public function delete($table, $primaryKey, $id)
    {
        return DB::table($table)->where($primaryKey, $id)->delete();
    }

    public function update($table, $primaryKey ,$id, $data)
    {
        return DB::table($table)->where($primaryKey, $id)->update($data);
    }

    public function getPaginateData($table, $page)
    {
        return DB::table($table)->paginate($page);
    }

    public function getLatestData($table, $totalData) {
        return DB::table($table)->latest()->limit($totalData)->get();
    }
}

?>