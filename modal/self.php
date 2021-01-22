<h3>新增基本資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td style="vertical-align:top">基本資料內容</td>
    </tr>
    <tr>
        <td>名字</td>
        <td><input  type="text" name="name" style="width:50px;height:30px;"></input></td>
    </tr>
    <tr>
        <td>電話</td>
        <td><input type="text" name="tel" style="width:50px;height:30px;"></input></td>
    </tr>
    <tr>
        <td>信箱</td>
        <td><input type="text" name="email" style="width:50px;height:30px;"></input></td>
    </tr>
    <tr>
        <td>生日</td>
        <td><input type="date" name="birth" style="width:150px;height:30px;"></input></td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="hidden" name="table" value="<?=$_GET['table'];?>">
            <input type="submit" value="新增">
            <input type="reset" value="重置">
        </td>

    </tr>
</table>
    
    

</form>
