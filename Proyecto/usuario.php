<?php
    class Usuario{

        public $name;
        public $rol;

      
        // Methods
        function set_name($name) {
          $this->name = $name;
        }
        function get_name() {
          return $this->name;
        }

         // Methods
       function set_rol($rol) {
        $this->rol = $rol;
      }
      function get_rol() {
        return $this->rol;
      }
    
      }
    
      

?>