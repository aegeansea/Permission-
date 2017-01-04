<?php

namespace Able;

/**
 * This file is part of Laratrust,
 * a role & permission management solution for Laravel.
 *
 * @license MIT
 * @package Laratrust
 */

use Laratrust\Contracts\LaratrustGroupInterface;
use Laratrust\Traits\LaratrustGroupTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class LaratrustGroup extends Model implements LaratrustGroupInterface
{
    use LaratrustGroupTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('laratrust.groups_table');
    }
}
