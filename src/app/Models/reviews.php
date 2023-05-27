<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use DB;
use App\Models\Product;
class reviews extends Model
{
    use HasFactory;
    use Notifiable;
    use AuthenticatableTrait;
    protected $connection = 'mysql';
    protected $fillable =['id','productId','note','comment'];
     

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
