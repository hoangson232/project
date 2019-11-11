<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Product extends Model
{
	protected $table = 'product';

	protected $fillable = ['name','image','id_cate','price','sale_price','status','description','slug','category_id'];	

	public function category(){
		return $this->hasOne('App\Models\Category','id','category_id');
	}
}

 ?>