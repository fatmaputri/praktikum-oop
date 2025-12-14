<?php

class Book {
    public string $title;
    protected string $author;

    public function __construct(string $title, string $author) {
        $this->title = $title;
        $this->author = $author;
    }

    // setter private (simulasi private(set))
    private function setTitle(string $title): void {
        $this->title = $title;
    }

    // setter protected (simulasi protected(set))
    protected function setAuthor(string $author): void {
        $this->author = $author;
    }

    public function getAuthor(): string {
        return $this->author;
    }
}

$bk = new Book("How to PHP", "Ada");
echo $bk->title;
