<h3>新增求職條件</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td style="vertical-align:top">求職條件內容</td>
    </tr>
    <tr>
        <td>應徵職務</td>
        <td><input type="text" name="job" style="width:50px;height:30px;"></input></td>
    </tr>
    <tr>
        <td>薪資</td>
        <td><input type="text" name="pay" style="width:50px;height:30px;"></input></td>
    </tr>
    <tr>
        <td>工作地點</td>
        <td><input type="text" name="lo" style="width:50px;height:30px;"></input></td>
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
