<?php namespace ElenStar\Offers\Models;

use Model;
use \October\Rain\Database\Traits\Validation;
use \October\Rain\Database\Traits\Nullable;

/**
 * Price Model
 */
class Price extends Model
{
    

    
    public $table = 'elenstar_offers_prices';

   
    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $fillable = ['title', 'content'];
    protected $jsonable = ['content'];

    use Validation;
    public $rules = [
        'title' => 'required',
    ];
    use Nullable;
    protected $nullable = ['content'];

}
