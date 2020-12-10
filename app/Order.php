<?php

namespace App;

use App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Http\Middleware\BaskerIsNotEmpty;

class Order extends Model
{
    public function products() {
    	return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }
    // public function {
    //     return $this->belongsTo(User::class);
    // }
    public function getFullPrice() {
    	$sum = 0;
    	foreach ($this->products as $product) {
    		$sum += $product->getPriceForCount();
    	}
    	return $sum;
    }
    public function saveOrder($name, $phone) {
        if ($this->status == 0) {
        $this->name = $name;
        $this->phone = $phone;
        $this->status = 1;
        $this->save();
        session()->forget('orderId');
        return true;
        } else {
            return false;
        }
    }
}
