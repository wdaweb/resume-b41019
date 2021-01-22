<?php
include_once "../base.php";

$table=$_POST['table'];
$db=new DB($table);

$data=[];
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}

if(!empty($_POST['text'])){

    $data['text']=$_POST['text'];
}

    switch($table){
        case "self":
            $data['name']=$_POST['name'];
            $data['tel']=$_POST['tel'];
            $data['email']=$_POST['email'];
            $data['birth']=$_POST['birth'];
            $data['sh']=($id==$_POST['sh'])?1:0;
        break;
        case "job":
            $data['job']=$_POST['job'];
            $data['pay']=$_POST['pay'];
            $data['lo']=$_POST['lo'];
            $data['sh']=(in_array($id,$_POST['sh']))?1:0;
        break;
        case "title":
            $data['sh']=0;
        break;
        case "admin":
            $data['acc']=$_POST['acc'];
            $data['pw']=$_POST['pw'];
        break;
        case "menu":
            $data['href']=$_POST['href'];
            $data['sh']=1;
        break;
        default:
         $data['sh']=1;

    }



$db->save($data);

to("../backend.php?do=$table");

?>
