<?php namespace Alex\Contact\Models;

use Model;

/**
 * Model
 */
class Contact extends Model
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
    public $table = 'alex_contact_';
    protected $jsonable = ['phones'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
