<?php

namespace App\Models;

use Hyperf\DbConnection\Model\Model;

class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    public function book()
    {
        return $this->hasOne(Book::class, 'user_id', 'id');
    }
}