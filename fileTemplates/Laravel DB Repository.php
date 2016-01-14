<?php namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\\${MODEL}Repository;

#parse("PHP File Header.php")
class Db${MODEL}Repository extends DbRepository implements ${MODEL}Repository
{
}
