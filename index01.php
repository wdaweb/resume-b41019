<?php include_once "base.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>卓越科技大學校園資訊系統</title>
<link href="./css/css.css" rel="stylesheet" type="text/css">
<script src="./js/jquery-1.9.1.min.js"></script>
<script src="./js/js.js"></script>
</head>

<body>
<div id="cover" style="display:none; ">
	<div id="coverr">
    	<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
</div>

	<div id="main">
		<a title="<?=$Title->find(['sh'=>1])['text'];?>" href="index.php">
			<div class="ti" style="background:url(&#39;img/<?=$Title->find(['sh'=>1])['img'];?>&#39;); background-size:cover;"></div>
		</a>
            <!--標題-->
        	<div id="ms">
             	<div id="lf" style="float:left;">
            		<div id="menuput" class="dbor">
                    <!--主選單放此-->
                    	                            <span class="t botli">主選單區</span>
                                                </div>
                    <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    	<span class="t">進站總人數 : <?=$Total->find(1)['total'];?></span>
                    </div>
        		</div>
				<?php
				
					$do=(isset($_GET['do']))?$_GET['do']:'main';
					$file="./front/".$do.".php";
					if(file_exists($file)){
						include $file;
					}else{
						include "./front/main.php";
					}

				
				;?>
                                 <div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
                	<!--右邊-->   
                	<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo(&#39;?do=login&#39;)">管理登入</button>
                	<div style="width:89%; height:480px;" class="dbor">
                    	<span class="t botli">校園映象區</span>

							<!--
								1.從image資料表中撈出設定為顯示的圖片
								2.讓圖片顯示在網頁上
								3.設定圖片大小為150px x 103px
							-->
							<div class='cent' onclick="pp(1)" style="margin:5px 0">
								<img src="icon/up.jpg" alt="">
							</div>
							<?php

								$imgs=$Image->all(['sh'=>1]);

								foreach($imgs as $key => $img){
									echo "<div class='cent im' id='ssaa$key'><img src='img/{$img['img']}' style='width:150px;height:103px;border:3px solid orange;margin:3px 0'></div>";
								}

							?>
							<div class='cent' onclick="pp(2)">
								<img src="icon/dn.jpg" alt="">
							</div>
						<script>
                        	var nowpage=0,num=<?=$Image->count(['sh'=>1]);?>;
							function pp(x)
							{
								var s,t;
								if(x==1 && nowpage-1>=0)
								{nowpage--;}
								if(x==2&&(nowpage+1)<=num-3)
								{nowpage++;}
								$(".im").hide()
								for(s=0;s<=2;s++)
								{
									t=s*1+nowpage*1;
									$("#ssaa"+t).show()
								}
							}
							pp(1)
                        </script>
                    </div>
                </div>
                            </div>
             	<div style="clear:both;"></div>
            	<div style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
                	<span class="t" style="line-height:123px;"><?=$Bottom->find(1)['bottom'];?></span>
                </div>
    </div>

</body></html>
