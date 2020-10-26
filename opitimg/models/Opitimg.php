<?php namespace Alex\Opitimg\Models;

use Model;

/**
 * Model
 */
class Opitimg extends Model
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
    public $table = 'alex_opitimg_';
    public $attachOne = [
        'img' => 'System\Models\File'
    
        ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
