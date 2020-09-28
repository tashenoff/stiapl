<?php namespace Alex\Sert\Models;

use Model;

/**
 * Model
 */
class Sert extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'alex_sert_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
