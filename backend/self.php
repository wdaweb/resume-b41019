
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">

                    <td width="15%">姓名</td>
                    <td width="25%">電話</td>
                    <td width="25%">信箱</td>
                    <td width="25%">生日</td>
                    <td width="10%">顯示</td>

                </tr>
                <?php
                $rows=$Self->all();

                foreach($rows as $row){
                    // if($row['acc']!='admin'){
                ?>
                <tr>
                    <td ><input type="text" name="name[]" value="<?=$row['name'];?>"style="width:95%" ></td>
                    <td ><input type="text" name="tel[]" value="<?=$row['tel'];?>"style="width:95%"></td>
                    <td ><input type="text" name="email[]" value="<?=$row['email'];?>"style="width:95%"></td>
                    <td ><input type="text" name="birth[]" value="<?=$row['birth'];?>"></td>
                    <td ><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
                        // }
                    }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="<?=$do;?>">
                    <td width="200px">
                     <input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php?table=<?=$do;?>&#39;)"
                            value="<?=$addstr[$do];?>"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>