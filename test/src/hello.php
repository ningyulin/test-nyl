<?php
    /**
     * Created by PhpStorm.
     * User: MINI
     * Date: 2019/9/16
     * Time: 21:39
     */
    namespace TestNyl;
    class Hello
    {
        private $name;

        public function __construct( $name = 'World' )
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }

        public function hello()
        {
            return 'Hello '.$this->name.'!';
        }
    }