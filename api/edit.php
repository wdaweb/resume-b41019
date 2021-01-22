<?php
include "../base.php";
print_r($_POST);
$table=$_POST['table'];
$db=new DB($table);

foreach($_POST['id'] as $key => $id){
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){

        $db->del($id);

    }else{

        $row=$db->find($id);
        
        if(!empty($_POST['text'])){

            $row['text']=$_POST['text'][$key];
        }

        switch($table){
            case "self":
                $row['name']=$_POST['name'][$key];
                $row['tel']=$_POST['tel'][$key];
                $row['email']=$_POST['email'][$key];
                $row['birth']=$_POST['birth'][$key];
                $row['sh']=(in_array($id,$_POST['sh']))?1:0;
            break;
            case "job":
                $row['job']=$_POST['job'][$key];
                $row['pay']=$_POST['pay'][$key];
                $row['lo']=$_POST['lo'][$key];
                $row['sh']=(in_array($id,$_POST['sh']))?1:0;
            break;
            case "title":
                $row['sh']=($id==$_POST['sh'])?1:0;
            break;
            case "hshot":
                $row['sh']=($id==$_POST['sh'])?1:0;
            break;
            case "total":
                $row['total']=$_POST['total'];
            break;
            case "bottom":
                $row['bottom']=$_POST['bottom'];
            break;
            case "menu":
                $row['sh']=(in_array($id,$_POST['sh']))?1:0;
                $row['href']=$_POST['href'][$key];
            break;
            case "admin":
                $row['acc']=$_POST['acc'][$key];
                $row['pw']=$_POST['pw'][$key];
            break;
            default:
            $row['sh']=(in_array($id,$_POST['sh']))?1:0;

        }

        /* 
        case "total":
            $row['total']=$_POST['total'];
        break;
        case "bottom":
            $row['bottom']=$_POST['bottom'];
        break; 
        
        可以改寫成
        case "total":
        case "bottom":    
            $row['$table]=$_POST[$table];
        break; */

        $db->save($row);

    }


}

to("../backend.php?do=$table");
?>
