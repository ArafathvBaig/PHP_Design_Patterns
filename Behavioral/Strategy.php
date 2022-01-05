<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Classes to Compute Observer Design Problem
 */
interface DiscountSalesStrategy
{
    public function getDiscount(): int;
}
class NewYear implements DiscountSalesStrategy
{
    public function getDiscount(): int
    {
        return 10;
    }
}

class Sankranti implements DiscountSalesStrategy
{
    public function getDiscount(): int
    {
        return 15;
    }
}

class Clothes
{
    private $sale;
    public function __construct(DiscountSalesStrategy $sale)
    {
        $this->sale = $sale;
    }
    public function getDiscount()
    {
        return $this->sale->getDiscount();
    }
}
$newYear = new Clothes(new NewYear);
echo "NewYear Sales Discount is :: " . $newYear->getDiscount() . "%\n";
$sankranti = new Clothes(new Sankranti);
echo "Sankranti Sales Discount is :: " . $sankranti->getDiscount() . "%\n";
