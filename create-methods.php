<?php
class User {
  public $firstLine = "";
  public $secondLine = "";
  public $city = "";
  public $county = "";
  public $country = "";
  public $postcode = "";

  function getFullAddress(){
    return $this->firstLine . ",\n" . $this->secondLine . ",\n" . $this->city . ",\n" . $this->county . ",\n" . $this->country . ",\n" . $this->postcode;
  }
}

$user = new User();
$user->firstLine = "Address 1";
$user->secondLine = "Address 2";
$user->city = "city";
$user->county = "county";
$user->country = "country";
$user->postcode = "postcode";

echo $user->getFullAddress();

$user2 = new User();
$user2->firstLine = "2Address 1";
$user2->secondLine = "2Address 2";
$user2->city = "2city";
$user2->county = "2county";
$user2->country = "2country";
$user2->postcode = "2postcode";

echo $user2->getFullAddress();
