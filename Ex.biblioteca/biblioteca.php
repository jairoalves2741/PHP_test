<?php

class biblioteca
{
    private $user;
    private $book;
    private $author;
    private $year;
    private $category;

    //methods access
    public function getBook()
    {
        return $this->book;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setBook($book): void
    {
        $this->book = $book;
    }

    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    public function setYear($year): void
    {
        $this->year = $year;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    //construct
    public function __construct($user, $book, $author, $year, $category, )
    {
        $this->user = $user;
        $this->book = $book;
        $this->author = $author;
        $this->year = $year;
        $this->category = $category;

    }

    //methods communs
    public function ViewInfo()
    {
        echo "Nome de Usúario: " . $this->user . "<br>";
        echo "Livro: " . $this->book . "<br>";
        echo "Autor: " . $this->author . "<br>";
        echo "Ano de publicação: " . $this->year . "<br>";
        echo "Categoria: " . $this->category . "<br>";
    }
}