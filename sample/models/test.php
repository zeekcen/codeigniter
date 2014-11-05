<?php

class Test extends CI_Model {

        function __construct()
        {
                parent::__construct();
        }

        public function test() {
                echo 'model_test';
        }
}
