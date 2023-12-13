<!-- Category.php -->

<?php

class Category {
    private $categoryId;
    private $name;

    public function __construct($categoryId, $name) {
        $this->categoryId = $categoryId;
        $this->name = $name;
    }

    public function displayInfo() {
        echo "Category ID: $this->categoryId\n";
        echo "Name: $this->name\n";
    }
}

?>
