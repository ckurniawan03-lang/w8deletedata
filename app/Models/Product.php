<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;
=======
>>>>>>> a17a68c75f0ef523e9974de07746f14d6a06b83e

class Product extends Model
{
    //
<<<<<<< HEAD
    use SoftDeletes;
    public function product_category():BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
=======
    public function product_category():BelongsTo
    {
        return $this->belongsTo(ProductCategory::class,'category_id');
    }
}
>>>>>>> a17a68c75f0ef523e9974de07746f14d6a06b83e
