<?php

namespace SamPoyigi\Featured_menus\Models;

use Model;

class Subscriber extends Model
{
    protected $table = 'igniter_frontend_subscribers';

    protected $primaryKey = 'id';

    protected $fillable = ['email'];
}