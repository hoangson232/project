<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class OrderDetail extends Model
{
	protected $table = 'order_detail';

	protected $fillable = ['order_id','product_id','quantity','price'];	

	public function pro(){
		return $this->hasOne('App\Models\Product','id','product_id');
	}

}

 ?>