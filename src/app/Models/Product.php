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
use App\Models\reviews;
class Product extends Model
{
    use HasFactory;
    use Notifiable;
    use AuthenticatableTrait;
    protected $connection = 'mysql';
    protected $fillable =['id','productName' , 'description', 'price', 'category', 'imageUrl' ,'reviews'];
     
    /**
    * Get the REVIEWS for the PORDUCT LIST.
    */
    public function reviews(): HasMany
    {
        return $this->hasMany(reviews::class);
    }

    public static function getCachedData()
    {
        return Cache::remember('id', 10, function () {
            $data = DB::select('select * from products');
            return $data;
        });
    }
}
