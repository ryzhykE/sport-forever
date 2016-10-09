<?php
/**
 * Created by PhpStorm.
 * User: Evgeniy
 * Date: 17.09.2016
 * Time: 8:38
 */

namespace App;

use App\DB;

abstract class Model
{
    const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = DB::instasnce();
        return $db->query(
            'SELECT * FROM  ' . static::TABLE,
            static::class
        );
    }

/**
    public static function findById(int $id)
    {
        $db = DB::instsnce();
        $data = $db->query(
            'SELECT * FROM ' . static::$table . ' WHERE `id`=:id',
            [':id' => $id],
            static::class
        );
        return $data[0];
    }


    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }
 * */
        /*
         * arr fields $columns
         * value fields $values

        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }

        $sql = '
          INSERT INTO ' . static::TABLE . '
            (' . implode(',', $columns) . ')
          VALUES
            (' . implode(',', array_keys($values)) . ')
        ';
        $db = DB::instsnce();
        $db->execute($sql, $values);
    }
 */
}
