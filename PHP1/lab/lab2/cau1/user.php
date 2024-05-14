<?php

namespace model;

class User {
    public function hello() {
        echo "Xin chào model<br>";
    }
}

namespace controller;

class User {
    public function hello() {
        echo "Xin chào controller<br>";
    }
}

namespace view;

class User {
    public function hello() {
        echo "Xin chào view<br>";
    }
}
?>
