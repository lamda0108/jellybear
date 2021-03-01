<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;
    protected $fillable = ['username','title', 'body', 'rating', 'product_id'];

    public function getReviewDateAttribute(){
        return $this->created_at->format('Y-m-d');
    }
}
