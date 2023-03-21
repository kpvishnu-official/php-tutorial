<?php
/**
 * 
 
public -> index.php, style.css, script.js, files/img
src -> 
    Controller -> TaxContoller.php -> 
    Repository -> TaxRepository.php -> database
    Service -> TaxService.php -> calculations core
    Entity -> Tax.php -> 
    templates -> tax.temp.php -> html

Class Bank
{
    public function __construct(
        public int $id,
        public string $name,
        public string $phoneNumber,
        public string $netWorth,
        public string $totalBranchCount,
    ) {

    }
}
//
$bank = new Bank(1, 'SBI', 12345667, 1289475078, 50000);