<?php
/**
 * Created by PhpStorm.
 * User: Evgeniy
 * Date: 16.09.2016
 * Time: 14:15
 */

namespace App\Models;

use App\Model;

class News extends Model
{
    const TABLE = 'news';
    public  $title;
    public $text;
    public $img;
    public $date_publish;


}