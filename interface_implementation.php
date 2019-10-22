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
      return Book::where('id','=', $id)->first();
    }

    public function getBooksByAuthor(string $author)
    {
      return Book::where('author','LIKE', '%'.$author.'%')->get();
    }

    public function getBooksByName(string $name)
    {
      return Book::where('name','LIKE', '%'.$name.'%')->get();
    }

    public function getBooksByYear(int $year)
    {
      return Book::where('year','LIKE', '%'.$year.'%')->get();
    }

    public function getBooksByManufacture(string $manufacture)
    {
      return Book::where('manufacture','LIKE', '%'.$manufacture.'%')->get();
    }

}

//main.php

$favorite_books = array(
  new Book (1, "Dostoevskiy", "Idiot", 2019, "Almaty Kitap"),
  new Book (2, "Shekspir, "R&D", 2019, "Nursultan Kitap")
);

echo "My favorite books:<br>";
foreach($favorite_books as $favorite_book) {
    echo ' - ' . $favorite_book '<br>';
};

?>
