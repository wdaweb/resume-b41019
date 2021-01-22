<?php
include_once "base.php";

?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- 載入外部插件 注意順序 start -->
  <link rel="stylesheet" href="plugins/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/custom.css">
  <link rel="stylesheet" href="plugins/skill.css">
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC|Open+Sans&display=swap" rel="stylesheet">
  <!--Fontawesome 5.12.1-->
  <script src="https://kit.fontawesome.com/fa483230ea.js" crossorigin="anonymous"></script>
  <!--Google Font-->
  <script src="plugins/jquery-3.4.1.min.js"></script>
  <script src="plugins/bootstrap.bundle.min.js"></script>
  <!-- 載入外部插件 end -->
  <title>Wang ying xin web</title>
  <style>
    .intro-box {
      display: flex;
      justify-content: center;
    }

    .intro-box a {
      color: orange;
      margin: 0rem 0.5rem;
      font-size: 0.8em;
      text-decoration: none;
      width: 70px;
    }

    .intro-box a :hover {
      color: azure;
    }

    #phone {
      /* font-size: 0.3em; */
      padding: 0 1px;
    }
  </style>
</head>

<body>
  <header id="lokimenu" class="fixed-top">
    <nav class="navbar navbar-expand-md navbar-dark container">
      <a class="navbar-brand" href="?do=main">
        <img src="imgs/logo-f.png" alt="" style="width: 25%;height: 25%;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#lokinav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="lokinav">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#self"><i class="fas fa-user mr-2"></i>自我介紹</a>
          </li>

          <!-- <li class="nav-item"> -->
          <!-- <a class="nav-link" href="#self"><i class="fas fa-graduation-cap mr-2"></i>學業經歷</a> -->
          <!-- </li> -->
          <!-- <li class="nav-item"> -->
          <!-- <a class="nav-link" href="#self"><i class="fas fa-chart-bar mr-2"></i>專業技能</a> -->
          <!-- </li> -->
          <!-- <li class="nav-item"> -->
          <!-- <a class="nav-link" href="#self"><i class="fas fa-list-ul mr-2"></i>作品一覽</a> -->
          <!-- </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#linkme"><i class="fas fa-envelope mr-2"></i>聯絡我</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href=".?do=login"><i class="far fa-user-circle mr-2"></i>登入</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>


  <section id="lokislider" class="carousel slide" data-ride="carousel">

    <?php

    $do = (isset($_GET['do'])) ? $_GET['do'] : 'main';
    $file = "./front/" . $do . ".php";
    if (file_exists($file)) {
      include $file;
    } else {
      include "./front/main.php";
    }; ?>







  </section>



  <!--  -->




  <section id="lokiroom" class="container py-5">
    <header class="text-center">
      <h2 class="text-info pb-3">我的履歷</h2>
      <nav class="nav nav-tabs justify-content-around">
        <a class="nav-item nav-link alert-info text-white active" data-toggle="tab" href="#self"><i class="fas fa-user mr-2"></i>自我介紹</a>
        <a class="nav-item nav-link alert-info text-white" data-toggle="tab" href="#edu"><i class="fas fa-graduation-cap mr-2"></i>學歷/求職</a>
        <!-- <a class="nav-item nav-link alert-info text-white" data-toggle="tab" href="#edu">學歷與證照</a> -->
        <a class="nav-item nav-link alert-info text-white" data-toggle="tab" href="#skill"><i class="fas fa-chart-bar mr-2"></i>專業技能</a>
        <a class="nav-item nav-link alert-info text-white" data-toggle="tab" href="#prof"><i class="fas fa-list-ul mr-2"></i>作品欄</a>
      </nav>
    </header>
    <article class="tab-content py-5">
      <div class="row tab-pane fade show active" id="self">
        <!-- row>col content A-->
        <h3 class="col-12 mb-5 text-muted text-center">
          嗨,您好,我是<?= $Self->find(['sh' => 1])['name']; ?>,一個專業的碼農
        </h3>

        <div class="col-12 col-md-6 col-lg-4 mb-5">
          <div class="card">
            <img src="img/<?= $Hshot->find(['sh' => 1])['img']; ?>" class="card-img-top">
            <!-- <img src="imgs/roomA.jpg" class="card-img-top"> -->
            <div class="card-body">
              <h5><?= $Self->find(['sh' => 1])['name']; ?></h5>
              <p class="card-text">
                生日: <?= $Self->find(['sh' => 1])['birth']; ?>
              </p>
              <p class="card-text">
                電話: <small> <?= $Self->find(['sh' => 1])['tel']; ?></small>
              </p>
              <p class="card-text">
                信箱: <small><?= $Self->find(['sh' => 1])['email']; ?></small>
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-8 mb-5">
          <div class="card-body">
            <p>
              <?= $Auto->find(['sh' => 1])['text']; ?>
            </p>
          </div>
        </div>
      </div>

      <div class="tab-pane fade" id="edu">
        <!--col content D-->
        <div class="mb-5">
          <h5 class="text-info">[ 學習經歷 ]</h5>
          <table class="table table-sm text-center">
            <thead>
              <tr class="alert-info">
                <th class="border-info">學歷</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $edu = $Edu->all(['sh' => 1]);
              foreach ($edu as $e) {
              ?>
                <tr>
                  <th><?= $e['text']; ?></th>

                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="mb-5">
          <h5 class="text-info">[ 應徵條件 ]</h5>
          <table class="table table-sm text-center">
            <thead>
              <tr class="alert-info">
                <th class="border-info">應徵職務</th>
                <th class="border-info">期望薪資</th>
                <th class="border-info">工作地區</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $job = $Job->all(['sh' => 1]);
              foreach ($job as $j) {
              ?>
                <tr>
                  <th><?= $j['job']; ?> </th>
                  <td><?= $j['pay']; ?></td>
                  <td><?= $j['lo']; ?></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row tab-pane fade" id="skill">
        <!-- row>col content C-->
        <div class="skill">
          <li>
            <h5>HTML</h5>
            <span class="bar"><span class="html"></span></span>
          </li>
          <li>
            <h5>CSS</h5>
            <span class="bar"><span class="css"></span></span>
          </li>
          <li>
            <h5>JS</h5>
            <span class="bar"><span class="js"></span></span>
          </li>

          <li>
            <h5>PHP</h5>
            <span class="bar"><span class="php"></span></span>
          </li>

        </div>
      </div>



      <div class="row tab-pane fade" id="prof">
        <!-- row>col content B-->

        <?php
        $prof = $Prof->all(['sh' => 1]);
        foreach ($prof as $p) {

        ?>
          <div class="col-12 col-md-6 col-lg-4 mb-5">
            <div class="card">
              <img src="img/<?= $p['img']; ?>" class="card-img-top" style="width:288px;height:193px">
              <div class="card-body">
                <!-- <h5>雙幕川館</h5> -->
                <p class="card-text">
                  <?= $p['text']; ?>
                </p>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>



      <div class="tab-pane fade" id="prof1">
        <!--col content E-->
        <h3 class="text-right border-bottom border-info">入住須知</h3>
        <h5 class="text-info">[ 飯店設備 ]</h5>
        <p class="mb-5">
          客房無線網路、有線第四台、自助洗衣機、免費烘乾機、免費停車場
        </p>
        <h5 class="text-info">[ 入住須知 ]</h5>
        <p class="mb-5">
          進房時間（Check In )時間為15:00以後；退房時間（Check
          Out）時間為11:00以前。<br>
          住宿時請攜帶本人身分證正本、駕照以利核對。<br>
          一般住宿附贈早餐、SPA券（依住宿房型開立），特殊專案依專案條件辦理。<br>
          超過退房時間一個小時將以一個小時200元計費，超過半個小時將以一個小時計算。<br>
          請注意住宿人數勿超過客房設定之人數，若有超過客房設定人數，飯店有權拒絕入住。
        </p>
        <h5 class="text-info">[ 平假日定義 ]</h5>
        <p class="mb-5">
          平日時間：星期日~星期五；假日時間：星期六、連續假日結束前一日，依飯店公告為準。
        </p>
        <h5 class="text-info">[ 加人服務 ]</h5>
        <p class="mb-5">
          本飯店繪圖湯屋房型提供加人服務（含軟墊、備品、早餐、溫泉SPA券），<br>
          每加一人NT$600（春節期間不適用）。
        </p>
        <h5 class="text-info">[ 其他注意事項 ]</h5>
        <p class="mb-5">
          為維護住宿品質，室內空間全面禁菸，禁止攜帶貓狗等寵物入住，如經查獲加收清潔費5000元。<br>
          為維護公共及個人安全，禁止在房間內烹煮食物，或攜帶瓦斯、電磁爐等同性質用具，敬請房客務必配合。<br>
          客房地面為木質地板，請勿擅自移動房內傢俱，如發現自行搬動客房家具造成木質地面損傷，需付損毁費用。<br>
          房型擺設僅供參考，以實體房間為主。<br>
          免費停車場（僅供免費停車，不負保管之責）。<br>
          行政本館及雙幕川館內衛浴設備皆為一般熱水，如需使用溫泉需至戶外大眾池或改訂繪圖湯屋房型。
        </p>

        <h3 class="text-right border-bottom border-info">官網訂房規範</h3>
        <p class="mb-5">- 僅適用官網訂房，專案如有特殊需求，依專案為主</p>

        <h5 class="text-info">[ 線上訂房須知 ]</h5>
        <p class="mb-5">
          線上訂房交易價格均已含營業稅及服務費，若您選擇線上刷卡，交易成功後將由您的信用卡帳戶直接扣款。<br>
          線上訂房不接受國民旅遊卡刷卡訂房，若需使用國民旅遊卡訂房請直接電洽櫃台辦理。
        </p>

        <h5 class="text-info">[ 延遲入住手續 ]</h5>
        <p class="mb-5">
          若您在住宿當日，因塞車或其他的因素有所耽擱，無法在當日下午六點以前辦理住房手續，請您先以電話聯繫，否則飯店將視為您當日取消訂房，恕不退費。
        </p>

        <h5 class="text-info">[ 更改入住日期 ]</h5>
        <p class="mb-5">
          訂房後如欲更改訂房日期，請電話聯絡協助處理。<br>
          同一筆訂單限更改一次，且更改後的訂單恕不接受退房，否則視同取消訂房，依取消訂房規範處理。<br>
          如更改後訂單金額大於原訂單金額，旅客需現場另行支付差額；如更改後金額小於原訂單金額，恕不退還差額。
        </p>

        <h5 class="text-info">[ 取消訂房 ]</h5>
        <p class="mb-5">
          取消訂房將依以下規範酌收定金，請特別注意：<br>
          住宿日 當日 取消訂房，扣定金總金額100%<br>
          住宿日 1 天前（不含當日）取消訂房，扣定金總金額80%<br>
          住宿日 2~3 天前（不含當日）取消訂房，扣定金總金額70%<br>
          住宿日 4~6 天前（不含當日）取消訂房，扣定金總金額60%<br>
          住宿日 7~9 天前（不含當日）取消訂房，扣定金總金額50%<br>
          住宿日 10~13 天前（不含當日）取消訂房，扣定金總金額30%<br>
          住宿日 14
          天前（不含當日）取消訂房，扣除匯款手續費後，剩餘定金退還。<br>
          線上訂房若有需求取消，請直接與我們「電話」聯繫進行取消訂房。<br>
          若您使用信用卡付款，我們將由系統進行刷退動作；若您使用臨櫃匯款或ATM轉帳，請您傳真訂房者之任一銀行存摺封面至089-515026。
        </p>

        <h5 class="text-info">[ 特殊因素之退房處理 ]</h5>
        <p class="mb-5">
          若因天然災害等不可抗拒之因素（如地震、颱風等，以飯店所在地縣市政府公告為準）無法如期前往住宿<br>
          請於原訂住宿日３日（含當日）內與飯店之訂房中心連絡改期（得保留6個月）或是辦理退費。
        </p>
      </div>
    </article>
  </section>


  <section id="linkme" class="pt-5 bg-dark text-light">
    <header class="container text-center">
      <h2 class="text-info pb-3">歡迎聯絡我</h2>
    </header>
    <article class="bg-secondary py-5 text-center">
      <!-- footerInfo -->


      <div class="intro-box">
        <a class="intro-em" href="https://codepen.io/b41019"><i class="fab fa-codepen fa-3x"></i><br>codepen</a>
        <a class="intro-em" href="https://github.com/b41019"><i class="fab fa-github fa-3x"></i><br>github</a>
        <a class="intro-em" href=""><i class="fas fa-at fa-3x"></i><br>E-mail</a>
        <a class="intro-em" id="phone" href=""><i class="fas fa-phone-square fa-3x"></i><br>0912912902</a>
      </div>


    </article>
  </section>


  <footer class="bg-dark text-muted py-3 text-center">
    <small>
      2021 copyright &copy; <span class="text-warning">WEC digital</span>. all rights reserved
    </small>
    <div id="scrolltop" class="position-fixed">
      <a class="btn btn-info text-light" href="#lokislider"><i class="fas fa-angle-double-up fa-2x"></i></a>
    </div>
  </footer>
  <script src="plugins/custom.js"></script>
</body>

</html>