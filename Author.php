<!-- Author.php -->

<?php

class Author {
    private $authorId;
    private $name;
    private $email;

    public function __construct($authorId, $name, $email) {
        $this->authorId = $authorId;
        $this->name = $name;
        $this->email = $email;
    }

    public function displayInfo() {
        echo "Author ID: $this->authorId\n";
        echo "Name: $this->name\n";
        echo "Email: $this->email\n";
    }
}

?>
