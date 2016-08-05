<?php

namespace Bunta\Translations\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model {

    public $timestamps = false;
    protected $table = 'translations';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['table', 'foreign_id', 'lang', 'field', 'value'];

}
