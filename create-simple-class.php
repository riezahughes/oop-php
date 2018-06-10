<?php
echo "<h1>Learning php OOP</h1>";
//simple class stating user parameters, which create a new user object.
//this has set variablesthat can't be changed
echo "<h2>Basic Class usage with private variables</h2>";
class user {
  private $name = "Test Name";
  private $phone = "01234567";
  private $location = "Glasgow";
}
$user = new user;
echo "<pre>";
print_r($user);

echo "<h2>Basic Class usage with public alterable variables</h2>";
//this class creates an object which has changable variables attached to it.
class person {
  public $name = "";
  public $phone = "";
  public $location = "";
}
$person = new person();
$person2 = new person();
$person->name = "My Name";
$person2->name = "Your Name";
$person->phone = "0123456789";
$person2->phone = "789456412310";
$person->location = "Edinburgh";
$person2->location = "somewhere";
print_r($person);
print_r($person2);
