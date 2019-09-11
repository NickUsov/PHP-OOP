<?php
    class Form
    {
        public function input($array)
        {
            $field = '<input type="text" ';
            foreach($array as $key=>$value)
            {
                $field .= "$key='$value'";
            }
            $field .= '>';
            return $field;
        }
        public function password($array)
        {
            $field = '<input type="password" ';
            foreach($array as $key=>$value)
            {
                $field .= "$key='$value'";
            }
            $field .= '>';
            return $field;
        }
        public function submit($array)
        {
            $field = '<input type="submit" ';
            foreach($array as $key=>$value)
            {
                $field .= "$key='$value'";
            }
            $field .= '>';
            return $field;
        }
        public function textarea($array)
        {
            $field = '<textarea  ';
            foreach($array as $key=>$value)
            {
                $field .= "$key='$value'";
            }
            $field .= '></textarea>';
            return $field;
        }
        public function open($array)
        {
            $field = '<form ';
            foreach($array as $key=>$value)
            {
                $field .= "$key='$value'";
            }
            $field .= '>';
            return $field;
        }
        public function close()
        {
            return '</form>';
        }
    }
?>