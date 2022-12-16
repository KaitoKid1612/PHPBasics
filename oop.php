<?php
    echo 'OOP - Object Oriented Programming Language';

    class User {
        public $name;
        public $email;
        public $age;
        public $password;

        //Contructor: function that run when call object is instantiated
        public function __construct($name, 
                                    $email, 
                                    $age, 
                                    $password) {
            // echo "Contructor run";
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
            $this->password = $password;
        }

        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }
    }

    $user1 = new User('Viet', 'leviet1612@gmail.com', 10, '123456');
    $user2 = new User('Thao', 'leviet1612@gmail.com', 10, '123456');
    // $user1->name = 'Viet';
    // $user1->email = 'leviet1612@gmail.com';
    // $user1->age = '22';
    // $user1->password = '123456';
    // $user1->set_name('Duc');
    // $user2->set_name('Nghia');

    echo $user1->name;

    // print_r($user1);
    // print_r($user2);

    class Employee extends User {
        public function __construct($name, $email, $age, $password, $title) {
            parent::__construct($name, $email, $age, $password);
            $this->title = $title;
        }

        public function get_title($title) {
            return $this->title;
        }
    }

    $employee1 = new Employee('Viet', 'leviet1612@gmail.com', 10, '123456','admin');
    echo $employee1->title;
?>