<!-- Article.php -->

<?php

class Article {
    private $articleId;
    private $title;
    private $content;
    private $author;
    private $category;

    public function __construct($articleId, $title, $content, $author, $category) {
        $this->articleId = $articleId;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->category = $category;
    }

    public function displayInfo() {
        echo "Article ID: $this->articleId\n";
        echo "Title: $this->title\n";
        echo "Content: $this->content\n";
        echo "Author: $this->author\n";
        echo "Category: $this->category\n";
    }
}

?>
