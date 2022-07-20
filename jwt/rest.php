<?php
require_once('constants.php');

    class Rest{

        public function __construct(){
            if($_SERVER['REQUEST_METHOD'] !== 'POST'){
                $this->throwError(REQUEST_METHOD_NOT_VALID, 'Invalid Request Method');
            }
            $handler = fopen('php://input','r');
            $request = stream_get_contents($handler);
        }

        public function validateRequest(){

        }

        public function processApi(){

        }

        public function validateParameters($fieldName, $value, $dataType, $required){

        }

        public function throwError($code, $message){
            header("content-type: application/json; charset=UTF-8");
            $errorMsg = json_encode(["error" => ['status' => $code, 'message' => $message]]);
            echo $errorMsg;
            exit;
        }

        public function returnResponse(){

        }

    }
?>