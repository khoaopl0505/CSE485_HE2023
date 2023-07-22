<?php
require_once 'model/Book.php';
require_once 'model/BookList.php';

class BookController {
    private $bookList;

    public function __construct() {
        $this->bookList = new BookList();
    }

    public function index() {
        $books = $this->bookList->getAllBooks();
        require 'view/book-list.php';
    }

    public function addBook() {
        $book1 = new Book("B1", "B", "X", 1992, "ISBN1423", ["Chapter 1", "Chapter 2"]);
        $book2 = new Book("B2", "C", "Y", 1996, "ISBN7465", ["Chapter 1", "Chapter 2", "Chapter 3"]);
        $book3 = new Book("B3", "A", "Z", 2000, "ISBN6666", ["Chapter 1", "Chapter 2", "Chapter 3", "Chapter 4"]);

        $this->bookList->addBook($book1);
        $this->bookList->addBook($book2);
        $this->bookList->addBook($book3);

       $this->index();
    }

    public function sortBooks() {
        $sortType = isset($_GET['sort']) ? $_GET['sort'] : 'author';
        $book1 = new Book("B1", "B", "X", 1992, "ISBN1423", ["Chapter 1", "Chapter 2"]);
        $book2 = new Book("B2", "C", "Y", 1996, "ISBN7465", ["Chapter 1", "Chapter 2", "Chapter 3"]);
        $book3 = new Book("B3", "A", "Z", 2000, "ISBN6666", ["Chapter 1", "Chapter 2", "Chapter 3", "Chapter 4"]);

        $this->bookList->addBook($book1);
        $this->bookList->addBook($book2);
        $this->bookList->addBook($book3);

        switch ($sortType) {
            case 'author':
                $this->bookList->sortBooksByAuthor();
                break;
            case 'title':
                $this->bookList->sortBooksByTitle();
                break;
            case 'year':
                $this->bookList->sortBooksByPublicationYear();
                break;
            default:
                break;
        }

        $this->index();
    }
}
?>
