<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../login.php');
?>
<!DOCTYPE html>
<html dir="rtl" lang="en-US"><head><!-- Created by Artisteer v4.1.0.60046 -->
   <meta charset="utf-8">
   <title>Buy</title>
   <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

   <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
   <link rel="stylesheet" href="style.css" media="screen">
   <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
   <link rel="stylesheet" href="style.responsive.css" media="all">

   <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
   <script src="jquery.js"></script>
   <script src="script.js"></script>
   <script src="DataTable.min.js"></script>
   <script src="script.responsive.js"></script>


   <style>
      .art-content .art-postcontent-0 .layout-item-0 { margin-top: 10px;margin-bottom: 0px;  }
      .art-content .art-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:1px;border-color:#4396C7; color: #737373; background: #EFF2F5; border-spacing: 10px 0px; border-collapse: separate;  }
      .art-content .art-postcontent-0 .layout-item-2 { color: #E2E8EE; background: ; padding: 0px; vertical-align: top;  }
      .art-content .art-postcontent-0 .layout-item-3 { margin-top: 10px;margin-bottom: 10px;  }
      .art-content .art-postcontent-0 .layout-item-4 { border-spacing: 10px 0px; border-collapse: separate;  }
      .art-content .art-postcontent-0 .layout-item-5 { color: #000000; background: ; padding: 0px;  }
      .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
      .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
      .art-article th{text-align: left; font-family: Tahoma; font-size: 1.2em; font-weight: bold; width: 100px;}
      input{text-indent: 10px}
      select {width: 100%; height: 100%; border: 1px solid #009efb}
      .art-article table{margin-top: 5%; margin-bottom: 5%; border-collapse: inherit}
      input[type = text] {text-indent: 10px; font-family: Tahoma; font-size: 14px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal}
   </style>
</head>
<body>
   <div id="art-main">
      <nav class="art-nav">
         <ul class="art-hmenu">
            <li><a href="customer.php">معامله داران</a></li>
            <li><a href="sell&buy.php" class="active">خرید و فروش</a></li>
            <li><a href="payment&receipt.php">پرداخت و دریافت</a></li>
            <li><a href="cost.php">مصارف</a></li>
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
                     <article class="art-post art-article">                 
                        <div class="art-postcontent art-postcontent-0 clearfix">  
                           <div class="art-content-layout-wrapper layout-item-0">
                              <div class="art-content-layout layout-item-1">
                                 <!--Header of the page -->
                                 <div class="art-content-layout-row">
                                    <div class="art-layout-cell layout-item-2" style="width: 100%" >
                                       <ul>
                                          <li>
                                             <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                فورم خرید جنس
                                             </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div> <!-- End of Header -->
                              </div>
                           </div>
                           <div class="art-content-layout-wrapper layout-item-3">
                              <div class="art-content-layout layout-item-4">
                                 <div class="art-content-layout-row">
                                    <!--Content of the page -->
                                    <div class="art-layout-cell layout-item-5" style="width: 100%" >
                                       <form action="../back end/php/newTrade.php" method="post">
                                          <table>
                                          <tr>
                                             <th></th>
                                             <td></td>

                                             <th></th>
                                             <td></td>
                                             <th></th>
                                             <td></td>
                                             <th></th>
                                             <td style="font-size: 14px"> روز /&nbsp; ماه /&nbsp; سال</td>
                                          </tr>
                                             <tr style="height: 44px">
                                                <th>نام معامله دار</th>
                                                <td>
                                                   <select id="autoCustomer" name="autoCustomer">
                                                   <?php
                                                      require_once "../back end/php/sell&buyClass.php";
                                                      $customerList = new Trade();
                                                      $customerList->CustomerList();
                                                   ?>
                                                   </select>
                                                </td>

                                                <th>تفصیلات</th>
                                                <td>
                                                   <select id="goodsID" name="goodsID" >
                                                      <?php 
                                                         require_once "../back end/php/sell&buyClass.php";
                                                         $goodsList = new Trade();
                                                         $goodsList->GoodsList();
                                                      ?>
                                                   </select>
                                                </td>

                                                <th>گدام</th>
                                                <td>
                                                   <select id="stockID" name="stockID">
                                                      <?php 
                                                         require_once "../back end/php/sell&buyClass.php";
                                                         $stockList = new Trade();
                                                         $stockList->StockList();
                                                      ?>
                                                   </select>
                                                </td>

                                                <th>تاریخ</th>
                                                <td>
                                                   <input type="text" id="tradeDate" name="tradeDate" size="18" value="<?php 
                                                         require_once("../back end/php/jalaliDate.php");
                                                         $jalaliDate = new jDateTime(false, true, 'Asia/Kabul');
                                                         $jDate = $jalaliDate->date("Y/m/d");
                                                         echo $jDate;
                                                      ?>">
                                                </td>
                                             </tr>
                                             <tr>
                                                <th>تعداد موتر</th>
                                                <td><input type="text" id="noOfCars" name="noOfCars" size="18"></td>

                                                <th>تعداد بوجی</th>
                                                <td><input type="text" class="sack" id="sack" name="sack" size="18"></td>
                                                
                                                <th>مجموع به کیلو</th>
                                                <td><input type="text" class="kilo" id="weithInKilo" name="weithInKilo" size="18"></td>
                                                
                                                <th>کسرات</th>
                                                <td><input type="text" class="sack" id="wastage" name="wastage" size="18"></td>
                                             </tr>
                                             <tr>
                                                <th>قیمت فی تن</th>
                                                <td><input type="text" class="sack" id="priceInTon" name="priceInTon" size="18"></td>

                                                <th>مجموع مبلغ معامله</th>
                                                <td><input type="text" id="totalPrice" name="totalPrice" readonly="" size="18"></td>

                                                <th>مجموع مبلغ پرداختی</th>
                                                <td><input type="text" class="sack" id="paymentAmount" name="paymentAmount" size="18"></td>

                                                <th>مجموع مبلغ باقی مانده</th>
                                                <td><input type="text" id="reminderAmount" name="reminderAmount" readonly="" size="18"></td>
                                             </tr>
                                             <tr>
                                                
                                                <th></th>
                                                <td></td>

                                                <th></th>
                                                <td><input type="text" hidden="" id="buyID" name="buyID" value=""></td>

                                                <th></th>
                                                <td><input type="text" hidden="" id="profit" name="profit" value=""></td>

                                                <th></th>
                                                <td><input type="text" hidden=""  id="buyOrSell" name="buyOrSell" value="خرید"></td>
                                             </tr>
                                             <tr>
                                                <td colspan="8" style="text-align: center;">
                                                   <button style="height: 40px; width: 80px; font-size: 18px;" id="newTrade" type="submit">ثبت معامله</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                   <button style="height: 40px; width: 80px; font-size: 18px;" id="cancel" type="button">انصراف</button>
                                                </td>
                                             </tr>
                                          </table>
                                       </form>
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
<script type="text/javascript" src="../back end/JQuery/sell&buy.js"></script>
</body>
</html>