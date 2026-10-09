<?php
    Class A{
        public static function miFuncion(){
            //mostrara el nombre de la clase actual:
            echo __CLASS__;
        }
        public static function otraFuncion(){
            static::miFuncion();
        }

    }//fin de A

    Class B extends A {
        #[Override]
        public static function miFuncion(){
            //mostara el nombre de la clase actual:
            echo __CLASS__;
        }
    }

B::otraFuncion();
?>