
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?=$tstr[$do];?></p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">

                    <td width="30%">應徵職務</td>
                    <td width="25%">期望薪資</td>
                    <td width="25%">工作地區</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>

                </tr>
                <?php

                // $all=$News->count();
                // $div=5;
                // $pages=ceil($all/$div);
                // $now=(isset($_GET['p']))?$_GET['p']:1;

                //$now=(isset($_GET['p']))??1;

                // $start=($now-1)*$div;

                $rows=$Job->all();

                foreach($rows as $row){
                ?>
                <tr>
                    <td >
                        <input type="text" name="job[]" style="width:95%;height:30px"value="<?=$row['job'];?>">
                    </td>
                    <td >
                        <input type="text" name="pay[]" style="width:95%;height:30px" value="<?=$row['pay'];?>">
                    </td>
                    
                    <td >
                        <input type="text" name="lo[]" style="width:95%;height:30px" value="<?=$row['lo'];?>">
                    </td>
                    <td ><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                    <td ><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                    <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                </tr>
                <?php
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