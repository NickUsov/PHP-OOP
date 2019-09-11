<?php
    include('Form.php');
    $form = new Form;
    $arr_open = ['name'=>'form', 'class'=>'form'];
    $arr_text = ['name'=>'login','placeholder'=>'text'];
    $arr_submit = ['name'=>'btn', 'class'=>'btn'];
    $arr_pass = ['name'=>'password', 'class'=>'password'];
    $arr_tarea = ['name'=>'textarea', 'class'=>'textarea'];
    echo $form->open($arr_open);
    echo $form->input($arr_text).'<br/>';
    echo $form->password($arr_pass).'<br/>';
    //.$form->textarea($arr_tarea).'<br/>'.$form->submit($arr_submit).
    echo $form->close();
    // $form->input($array);
?>