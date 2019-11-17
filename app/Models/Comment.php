<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Comment extends Model
{
	protected $table = 'comment';

	protected $fillable = ['product_id','account_id','comment','status'];	

	public function acc(){
		return $this->hasOne('App\Models\Account','id','account_id');
	}
	public function pro(){
		return $this->hasOne('App\Models\Product','id','product_id');
	}


}

 ?>