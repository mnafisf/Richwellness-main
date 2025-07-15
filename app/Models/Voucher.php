<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'description',
        'type',
        'value',
        'min_order',
        'max_discount',
        'usage_limit',
        'used_count',
        'start_date',
        'end_date',
        'is_active'
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'is_active' => 'boolean',
        'value' => 'decimal:2',
        'min_order' => 'decimal:2',
        'max_discount' => 'decimal:2'
    ];

    /**
     * Check if the voucher is valid for use
     *
     * @return bool
     */
    public function isValid()
    {
        $now = now();
        
        // Check if voucher is active
        if (!$this->is_active) {
            return false;
        }
        
        // Check if voucher is within valid date range
        if ($now < $this->start_date || $now > $this->end_date) {
            return false;
        }
        
        // Check if usage limit is reached
        if ($this->usage_limit !== null && $this->used_count >= $this->usage_limit) {
            return false;
        }
        
        return true;
    }

    /**
     * Calculate discount amount based on order total
     *
     * @param float $orderTotal
     * @return float
     */
    public function calculateDiscount($orderTotal)
    {
        // Check if order meets minimum requirement
        if ($this->min_order !== null && $orderTotal < $this->min_order) {
            return 0;
        }
        
        $discount = 0;
        
        if ($this->type === 'percentage') {
            $discount = $orderTotal * ($this->value / 100);
            
            // Apply maximum discount if set
            if ($this->max_discount !== null && $discount > $this->max_discount) {
                $discount = $this->max_discount;
            }
        } else { // fixed amount
            $discount = $this->value;
            
            // Discount cannot be more than order total
            if ($discount > $orderTotal) {
                $discount = $orderTotal;
            }
        }
        
        return $discount;
    }

    /**
     * Increment the used count when voucher is applied
     *
     * @return void
     */
    public function incrementUsage()
    {
        $this->used_count += 1;
        $this->save();
    }
}
