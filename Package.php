<?php
/**
 *  Package Class
 */
class Package
{
  private $packageId;
  private $pkgName;
  private $startDate;
  private $endDate;
  private $description;
  private $basePrice;
  private $commission;
  private $imgLink;
  //Constructor requires an array of the right size and column order of package table
  function __construct($packArray)
  {
    $this->packageId = $packArray[0];
    $this->pkgName = $packArray[1];
    $this->startDate = $packArray[2];
    $this->endDate = $packArray[3];
    $this->description = $packArray[4];
    $this->basePrice = $packArray[5];
    $this->commission = $packArray[6];
    $this->imgLink = $packArray[7];
  }
  //Getters
  public function getPackageId(){
    return $this->packageId;
  }
  public function getPkgName(){
    return $this->pkgName;
  }
  public function getStartDate(){
    return $this->startDate;
  }
  public function getEndDate(){
    return $this->endDate;
  }
  public function getDescription(){
      return $this->description;
  }
  public function getBasePrice(){
    return $this->basePrice;
  }
  public function getCommission(){
      return $this->commission;
  }
  public function getImgLink(){
    return $this->imgLink;
  }



}


?>
