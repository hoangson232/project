<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * summary
 */
class ImgProduct extends Model
{
  public $table= 'product_image';

  public $fillable= ['product_id','link'];
}






 ?>