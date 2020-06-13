<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../login.php');

    if(isset($_GET['id']))
    {
      $B_ID = htmlentities($_GET['id']);
      $goods = htmlentities($_GET['goods']);
      $customer = htmlentities($_GET['customer']);
      $tradeDate = htmlentities($_GET['Tdate']);
      $C_ID = htmlentities($_GET['C_ID']);
    }
    else
    {
      $B_ID = 0;
      $goods = "";
      $customer = "";
      $tradeDate = "";
      $C_ID = 0;
    }
?>
<!DOCTYPE html>
<html dir="rtl" lang="en-US"><head><!-- Created by Artisteer v4.1.0.60046 -->
   <meta charset="utf-8">
   <title>Costs</title>
   <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

   <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
   <link rel="stylesheet" href="style.css" media="screen">
   <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
   <link rel="stylesheet" href="style.responsive.css" media="all">

   <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
   <link rel="stylesheet" href="jquery-ui-1.12.1.custom blue design/jquery-ui.css">

   <style>
      .art-content .art-postcontent-0 .layout-item-0 { margin-top: 10px;margin-bottom: 0px;  }
      .art-content .art-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:1px;border-color:#b7c5ce; color: #737373; background: #EFF2F5; border-spacing: 10px 0px; border-collapse: separate;  }
      .art-content .art-postcontent-0 .layout-item-2 { color: #E2E8EE; background: ; padding: 0px; vertical-align: top;  }
      .art-content .art-postcontent-0 .layout-item-3 { margin-top: 10px;margin-bottom: 10px;  }
      .art-content .art-postcontent-0 .layout-item-4 { border-spacing: 10px 0px; border-collapse: separate;  }
      .art-content .art-postcontent-0 .layout-item-5 { color: #000000; background: ; padding: 0px;  }
      .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
      .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

      
      .in{text-indent: 10px}
      .art-postcontent a, .art-postcontent a:link {font-size: 16px; text-decoration: none; color: #000000}
      .art-postcontent a, .art-postcontent a:hover{color: blue}
      .art-content .art-postcontent-0 .layout-item-0 {margin-top: 0px}
      .art-content .art-postcontent-0 .layout-item-1 {background-color: #b7c5ce}

      .design:nth-child(even){background-color : #bed3e4}
      .design:nth-child(odd){background-color : #e1eefb}

      #generalCost{float: left; width: 65%; margin-top: -29%; margin-bottom: 2%}
      #specificCostTable{float: left; width: 66%; margin-top: -38%; margin-bottom: 2%}

      .art-article .installment_th {font-size: 14px;font-weight: bolder; font-family: tahoma;background-color: #7f94ab; color: #fff;text-align: center;} 
      .art-article .installment_td {font-size: 14px; font-family: tahoma; vertical-align: middle; color: #000 }

      .dataTables_filter label{visibility: hidden; position: relative; }
      .dataTables_filter:before{visibility: visible;  font-family: Tahoma; font-size: 16px; font-weight: bold;
        color: rgb(0, 0, 0); content: "جستجو"}
      .dataTables_filter input{visibility: visible;  border: 1px solid #009efb; height: 30px; margin-bottom: 5px; margin-top: 5px}

       textarea {text-indent: 10px; font-family: Tahoma; font-size: 14px; color: rgb(0, 0, 0); line-height: normal; resize: none;}
   </style>
</head>
<body>
   <div id="art-main">
      <nav class="art-nav">
         <ul class="art-hmenu">
            <li><a href="customer.php">معامله داران</a></li>
            <li><a href="sell&buy.php">خرید و فروش</a></li>
            <li><a href="payment&receipt.php">پرداخت و دریافت</a></li>
            <li><a href="cost.php"  class="active">مصارف</a></li>
            <li><a href="report.php" >گزارشات</a></li>
            <li><a href="settings.php">تعاریف</a></li>
         </ul>
         <a href="../back end/php/logout.php" style="float: left; margin-right: 10px"><img height="32" width="32" src="logout.ico"></a>
         <a href="../back end/php/logout.php" style="font-size: 18px; color: #ffffff; float: left; text-decoration: none;" >خروج</a> 
      </nav>
      <div class="art-sheet clearfix">
         <div class="art-layout-wrapper">
            <div class="art-content-layout">
               <div class="art-content-layout-row">
                  <div class="art-layout-cell art-content">
                     <article class="art-post art-article" style="height: 99%">                 
                        <div class="art-postcontent art-postcontent-0 clearfix">  
                           <div class="art-content-layout-wrapper layout-item-0 ">
                              <div id="tabs" style="border : 0; margin: 10px">
                                 <div class="art-content-layout" style="margin-right: 10px">
                                    <div class="art-content-layout-row">
                                       <div class="art-layout-cell layout-item-2" style="width: 100%" >                                    
                                          <ul>
                                             <li>
                                                <a href="#page1">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                     مصارف اختصاصی
                                                   </span>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#page2">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                      مصارف عمومی
                                                   </span>
                                                </a>
                                             </li>
                                          </ul>                                          
                                       </div>
                                    </div>
                                 </div>
                                 <div id="page1">
                                    <div class="art-content-layout-wrapper layout-item-0">
                                       <div class="art-content-layout layout-item-1">
                                          <div class="art-content-layout-row">
                                             <div class="art-layout-cell layout-item-2" style="width: 100%" >
                                                <form id="specific_cost" action="../back end/php/newSpecificCost.php" method="post" style="display: inline;">
                                                  <input hidden="" type="text" id="B_ID" name="B_ID" value="<?php echo $B_ID; ?>">
                                                  <input hidden="" type="text" id="goods" name="goods" value="<?php echo $goods; ?>">
                                                  <input hidden="" type="text" id="customer" name="customer" 
                                                  value="<?php echo $customer; ?>">
                                                  <input hidden="" type="text" id="Tdate" name="Tdate" value="<?php echo $tradeDate; ?>">
                                                  <input hidden="" type="text" id="C_ID" name="C_ID" value="<?php echo $C_ID; ?>">
                                                  <input hidden="" type="text" id="totalCost" name="totalCost" value="">
                                                   <table style="margin: 1%; margin-top: 27px">
                                                      <tr>
                                                         <td >
                                                          <a href="sell&buy.php" class="art-button">انتخاب معامله</a>
                                                         </td>
                                                         <td style=" color: black; line-height: normal">
                                                          <textarea type="text" class="in" rows="2" cols="23"><?php echo "معامله ". $goods. " با  " .$customer . " در " . $tradeDate ?>
                                                          </textarea>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="costType">تفصیلات</label>
                                                         </td>
                                                         <td>
                                                            <textarea type="text" id="costType" class="in" name="costType" 
                                                            rows="3" cols="23"></textarea>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal">
                                                            <label dir="ltr" for="afgPrice">مبلغ به افغانی</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="afgPrice" name="afgPrice" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label dir="ltr" for="exchangeRate">نرخ تبادله به دار</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="exchangeRate" name="exchangeRate" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="usdPrice">مبلغ به دالر</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="usdPrice" name="usdPrice" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="specificDate">تاریخ</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="specificDate" name="specificDate" size="21"
                                                            value="<?php 
                                                                  require_once("../back end/php/jalaliDate.php");
                                                                  $jalaliDate = new jDateTime(false, true, 'Asia/Kabul');
                                                                  $jDate = $jalaliDate->date("Y/m/d");
                                                                  echo $jDate;
                                                                  ?>">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="2" style="text-align:center">
                                                            <button id="specificCreate" style="height: 40px; width: 80px; font-size: 18px;"
                                                             type="submit">تایید</button>
                                                         </td>
                                                      </tr>
                                                   </table>
                                                </form>
                                                <div id="specificCostTable">
                                                  <h1 style="color: #000">فورم ثبت مصارف مربوط به معامله :<span style="color: #fff"> <?php echo $goods. " با  " .$customer . " در ". $tradeDate ?></span></h1>
                                                 
                                                   <table id="specificCost" style="width: 90%">
                                                      <thead>
                                                        <tr>
                                                          <th class="installment_th" width="10px">ردیف</th>
                                                          <th class="installment_th" width="70px">معامله</th>
                                                          <th class="installment_th" width="170px">تفصیلات</th>
                                                          <th class="installment_th" width="25px">مبلغ به افغانی</th>
                                                          <th class="installment_th" width="25px">نرخ تبادله</th>
                                                          <th class="installment_th" width="40px">مبلغ به دالر</th>
                                                          <th class="installment_th" width="70px">تاریخ</th>
                                                          <th class="installment_th" width="70px">تنظیمات</th>
                                                        </tr>
                                                      </thead>
                                                      <?php
                                                        require_once "../back end/php/costsClass.php";
                                                        $specificCost = new Costs();
                                                        $specificCost->DisplaySpecificCost($B_ID);
                                                      ?>
                                                   </table>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="page2">
                                    <div class="art-content-layout-wrapper layout-item-0">
                                       <div class="art-content-layout layout-item-1">
                                          <div class="art-content-layout-row">
                                             <div class="art-layout-cell layout-item-2" style="width: 100%" >
                                                <br />
                                                <form id="general_cost" action="../back end/php/newGeneralCost.php" method="post" 
                                                   style="display: inline;">
                                                   <table  style="margin: 1%">
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="note">تفصیلات</label>
                                                         </td>
                                                         <td>
                                                            <textarea  class="in" type="text" id="note" name="note" rows="3" cols="23"></textarea>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label dir="ltr" for="afg">مبلغ به افغانی</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="afg" name="afg" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label dir="ltr" for="exchange_rate">نرخ تبادله به دالر</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="exchange_rate" name="exchange_rate" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label dir="ltr" for="usd">مبلغ به دالر</label>
                                                         </td>
                                                         <td>
                                                            <input readonly="" type="text" class="in" id="usd" name="usd" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="date">تاریخ</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="date" name="date" size="21"
                                                            value="<?php 
                                                                  require_once("../back end/php/jalaliDate.php");
                                                                  $jalaliDate = new jDateTime(false, true, 'Asia/Kabul');
                                                                  $jDate = $jalaliDate->date("Y/m/d");
                                                                  echo $jDate;
                                                                  ?>">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="2" style="text-align:center">
                                                            <button id="generalCreate" style="height: 40px; width: 80px; font-size: 18px;" 
                                                            type="submit">تایید</button>
                                                         </td>
                                                      </tr>
                                                   </table>
                                                </form>
                                                <div id="generalCost">
                                                   <table id="costList" style="width: 90%">
                                                      <thead>
                                                        <tr>
                                                          <th class="installment_th" width="10px">ردیف</th>
                                                          <th class="installment_th" width="210px">تفصیلات</th>
                                                          <th class="installment_th" width="60px">مبلغ به افغانی</th>
                                                          <th class="installment_th" width="50px">نرخ تبادله</th>
                                                          <th class="installment_th" width="60px">مبلغ به دالر</th>
                                                          <th class="installment_th" width="71px">تاریخ</th>
                                                          <th class="installment_th" width="110px">تنظیمات</th>
                                                        </tr>
                                                      </thead>
                                                      <?php
                                                        require_once "../back end/php/costsClass.php";
                                                        $generalCost = new Costs();
                                                        $generalCost->DisplayGeneralCost();
                                                      ?>
                                                   </table>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer class="art-footer">
         <div class="art-footer-inner">
            <p>Copyright © 2016, Bit Mappers. All Rights Reserved.</p>
         </div>
      </footer>
   </div>
</body>
<script src="jquery.js"></script>
<script src="script.js"></script>
<script src="script.responsive.js"></script>
<script src="../back end/JQuery/Print/jQuery.print.js"></script>
<script src="jquery-ui-1.12.1.custom blue design/jquery-ui.js"></script>
<script type="text/javascript" src="../back end/JQuery/cost.js"></script>
<script src="DataTable.min.js"></script>
</html>