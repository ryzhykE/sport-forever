<?php
/**
 * Created by PhpStorm.
 * User: Evgeniy
 * Date: 16.09.2016
 * Time: 11:39
 */

namespace App;


class DB
{
    use Singleton;

    protected $dbh;

    protected function __construct()
    {

        $params = include('/../config.php');
        try {
            $this->dbh = new \PDO("mysql:host={$params['host']};dbname={$params['dbname']}"
                            , $params['user'], $params['password']);
        }catch (DbException $e) {
            exit();
        }
    }
    /*
     * query no return param (for create/upd)
     */
    public function execute ($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }
    /*
     * return param
     */
    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();

        if(false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return[];
    }
}