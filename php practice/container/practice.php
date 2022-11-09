
<?php

if(isset($_POST['submit'])){
  
$errors = [];    

$request = $_POST;
$title = $request['title'];
$detail = $request['detail'];
$author = $request['author'];

if(empty($title)){
    $msg = "title doesn't finding";
    $errors['title'] = $msg;
}elseif (strlen($title) > 10) {
    $msg = "overloaded";
    $errors['title'] = $msg;
}

if(empty($detail)){
    $msg = "detail doesn't finding";
    $errors['detail'] = $msg;
}

echo "<pre>";
print_r($errors);
echo"</pre>";

echo count($errors);

}else{
    echo "click the submit button";
}
  