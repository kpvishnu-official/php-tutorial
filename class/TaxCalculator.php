<?php
Class TaxCalculator
{
    public function calculate(float $rupees, string $stateName): float
    {
        // Calculate
        $stateTax = $this->getTaxForState($stateName);

        return $this->turnRupeesIntoTax($stateTax);
    }

    private function turnRupeesIntoTax(float $rupees): float
    {
        // Calculate
    }
    protected function getTaxForState(string $stateName): float
    {
        // Calculate
    }
}

// Call
$tax = new Tax();
$taxValue = $tax->calculate(10);