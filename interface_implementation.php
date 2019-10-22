<?php

require_once "LibraryInterface.php";

class Book implements Library
{
    private $id;
    private $author;
    private $name;
    private $year;
    private $manufacture;

    public function __construct( $id, $author, $name, $year, $manufacture) {
      $this->id = $id;
	    $this->author = $author;
      $this->name = $name;
      $this->year = $year;
      $thid->manufacture = $manufacture;
	  }

    public function getBookById(int $id)
    {
      return $this->id;
    }

    public function getBooksByAuthor(string $author)
    {
      return $this->author;
    }

    public function getBooksByName(string $name)
    {
      return $this->name;
    }

    public function getBooksByYear(int $year)
    {
      return $this->year;
    }

    public function getBooksByManufacture(string $manufacture)
    {
      return $this->manufacture;
    }

}

$favorite_books = array(
  new Book (1, "Dostoevskiy", "Idiot", 2019, "Almaty Kitap"),
  new Book (2, "Shekspir, "R&D", 2019, "Nursultan Kitap")
);

echo "My favorite books:<br>";
foreach($favorite_books as $favorite_book) {
    echo ' - ' . $favorite_book '<br>';
};

?>
