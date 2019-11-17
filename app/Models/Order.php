<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $fillable = ['name','email','phone','address','status','account_id','total_price'];	

	public function us(){
		return $this->hasOne('App\Models\Account','id','account_id');
	}

	public function detail(){
		return $this->hasMany('App\Models\OrderDetail','order_id','id');
	}

}

 ?>