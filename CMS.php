<!-- CMS.php -->

<?php

require_once 'Article.php';
require_once 'Author.php';
require_once 'Category.php';

// Create authors
$author1 = new Author(1, 'John Doe', 'john.doe@example.com');
$author2 = new Author(2, 'Jane Smith', 'jane.smith@example.com');

// Create categories
$category1 = new Category(101, 'Technology');
$category2 = new Category(102, 'Science');

// Create articles
$article1 = new Article(1001, 'Introduction to PHP', 'PHP is a server-side scripting language.', $author1, $category1);
$article2 = new Article(1002, 'The Impact of Artificial Intelligence', 'AI is shaping the future of technology.', $author2, $category2);

// Display information
echo "Article Information:\n";
$article1->displayInfo();
echo "\n";
$article2->displayInfo();

?>
