<?php
/**
 * Created by PhpStorm.
 * User: Sara
 * Date: 19/12/2019
 * Time: 14:56
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trail
 * @package App
 */
class Trial extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'number', 'description', 'url_github', 'url_linkedin', 'salary', 'language'
    ];
}