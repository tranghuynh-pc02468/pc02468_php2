<?php


namespace App\Core;

use Exception;
use App\Models\Database;

class Request
{

    private $_rules = [];
    private $_messages = [];

    public $errors = [];


    public function getMethod()
    {
        return ($_SERVER['REQUEST_METHOD']);
    }

    public function isGet()
    {
        if ($this->getMethod() == 'GET') {
            return true;
        }
        return false;
    }

    public function isPost()
    {
        if ($this->getMethod() == 'POST') {
            return true;
        }
        return false;
    }

    public function getField()
    {
        $dataFields = [];
        //xử lý phương thức get
        if ($this->isGet()) {
            if (!empty($_GET)) {
                foreach ($_GET as $key => $value) {
                    //kt có là mảng hay không
                    if (is_array($value)) {
                        $dataFields[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    } else {
                        $dataFields[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }
        }

        //Phương thức post
        if ($this->isPost()) {
            if (!empty($_POST)) {
                foreach ($_POST as $key => $value) {
                    if (is_array($value)) {
                        $dataFields[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                    } else {
                        $dataFields[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                    }
                }
            }
        }
        return $dataFields;
    }


    public function rules($rules = [])
    {
        $this->_rules = $rules;
//        echo '<pre>';
//        print_r($this->_rules);
//        echo '</pre>';
    }

    public function message($messages = [])
    {
        $this->_messages = $messages;
    }

    public function validate()
    {
        $this->_rules = array_filter($this->_rules);
        $checkValidate = true;
        if (!empty($this->_rules)) {
            $dataFields = $this->getField();

            foreach ($this->_rules as $nameField => $ruleItem) {
                $ruleItemArr = explode('|', $ruleItem);

                foreach ($ruleItemArr as $rules) {
                    $ruleName = null;
                    $ruleValue = null;
                    $rulesArr = explode(':', $rules);
                    $ruleName = reset($rulesArr);

                    if (count($rulesArr) > 1) {
                        $ruleValue = end($rulesArr);
                    }

                    if ($ruleName == 'required') {
                        if (empty(trim($dataFields[$nameField]))) {
                            $this->setErrors($nameField, $ruleName);
                            $checkValidate = false;
                        }
                    }

                    if ($ruleName == 'min') {

                            if (strlen(trim($dataFields[$nameField])) < $ruleValue) {
                                $this->setErrors($nameField, $ruleName);
                                $checkValidate = false;
                            }

                    }

                    if ($ruleName == 'max') {
//                        if (!empty($dataFields[$nameField])) {
                            if (strlen(trim($dataFields[$nameField])) > $ruleValue) {
                                $this->setErrors($nameField, $ruleName);
                                $checkValidate = false;
                            }
//                        }
                    }

                    if ($ruleName == 'email') {
//                        if (!empty($dataFields[$nameField])) {
                            if (!filter_var($dataFields[$nameField], FILTER_VALIDATE_EMAIL)) {
                                $this->setErrors($nameField, $ruleName);
                                $checkValidate = false;
                            }
//                        }
                    }

                    if ($ruleName == 'match') {
//                        if (!empty($dataFields[$nameField])) {
                            if (trim($dataFields[$nameField]) != trim($dataFields[$ruleValue])) {
                                $this->setErrors($nameField, $ruleName);
                                $checkValidate = false;
                            }
//                        }

                    }

//                    if ($ruleName == 'number') {
//                        if (!empty($dataField[$nameField])) {
//                            if (!is_int($dataField[$nameField])) {
//                                $this->getError($nameField, $ruleName);
//                                $validate = true;
//                            }
//                        }
//                    }
//                    if ($ruleName == 'phone') {
//                        if (!empty($dataField[$nameField])) {
//                            $check = preg_match("/^(032|033|034|035|036|037|038|039|096|097|098|086|083|084|085|081|082|088|091|094|070|079|077|076|078|090|093|089|056|058|092|059|099)[0-9]{7}$/", $dataField[$nameField]);
//                            if (!$check) {
//                                $this->getError($nameField, $ruleName);
//                                $validate = true;
//                            }
//                        }
//                    }
//
//                    if ($ruleName == 'password') {
//                        if (!empty($dataField[$nameField])) {
//                            $check = preg_match("/^.*(?=.*[A-Z])(?=.*[0-9])(?=.*[a-z].*[a-z])(?=.*[@\!\$\^\&\*]).{8,}$/", $dataField[$nameField]);
//                            if (!$check) {
//                                $this->getError($nameField, $ruleName);
//                                $validate = true;
//                            }
//                        }
//                    }
//
//
//
//
//                    if ($ruleName == 'exist') {
//                        $check = null;
//                        if (count($rules) == 3 && !empty($dataField[$nameField])) {
//                            $nameTable = $rules[1];
//                            $fieldCheck = $rules[2];
//                            $dataField[$nameField] = trim($dataField[$nameField]);
//                            $check = $this->_db->pdo_query("SELECT $fieldCheck FROM $nameTable WHERE $fieldCheck = '$dataField[$nameField]'");
//                        }
//                        if (empty($check)) {
//                            $this->getError($nameField, $ruleName);
//                            $validate = true;
//                        }
//                    }
//
//
//                    if (preg_match("~^callback_(.+)~is", $ruleName, $nameFunc)) {
//                        $nameFunc = $nameFunc[1];
//                        if (method_exists(self::$_controller, $nameFunc)) {
//                            $check = self::$_controller->$nameFunc(trim($dataField[$nameField]));
//                            if ($check) {
//                                $this->getError($nameField, $ruleName);
//                                $validate = true;
//                            }
//                        }
//                    }
//
//                    if (preg_match("~^callbackcheck_(.+)~is", $ruleName, $nameFunc)) {
//                        $nameFunc = $nameFunc[1];
//                        if (method_exists(self::$_controller, $nameFunc)) {
//                            $check = self::$_controller->$nameFunc();
//                            if (!$check) {
//                                $this->getError($nameField, $ruleName);
//                                $validate = true;
//                            }
//                        }
//                    }
                }
            }
        }
        return $checkValidate;
    }


    public function errors($nameField = '')
    {
        if (!empty($this->errors)) {
            if(empty($nameField)){
                $errorArr = [];
                foreach ($this->errors as $key =>$error){
                    $errorArr[$key] = reset($error);
                }
                return $errorArr;
            }
            return reset($this->errors[$nameField]);
        }
        return false;
    }

    public function setErrors($nameField, $ruleName)
    {
        return $this->errors[$nameField][$ruleName] = $this->_messages[$nameField . '.' . $ruleName];
    }

}