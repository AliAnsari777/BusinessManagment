<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../login.php');
?>
<!DOCTYPE html>
<html dir="rtl" lang="en-US"><head><!-- Created by Artisteer v4.1.0.60046 -->
   <meta charset="utf-8">
   <title>Bargains</title>
   <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

   <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
   <link rel="stylesheet" href="style.css" media="screen">
   <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
   <link rel="stylesheet" href="style.responsive.css" media="all">

   <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
   <script src="jquery.js"></script>
   <script src="script.js"></script>
   <script src="script.responsive.js"></script>
   <script src="DataTable.min.js"></script>

   <style>
      .art-content .art-postcontent-0 .layout-item-0 { margin-top: 10px;margin-bottom: 0px;  }
      .art-content .art-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:1px;border-color:#4396C7; color: #737373; background: #EFF2F5; border-spacing: 10px 0px; border-collapse: separate;  }
      .art-content .art-postcontent-0 .layout-item-2 { color: #E2E8EE; background: ; padding: 0px; vertical-align: top;  }
      .art-content .art-postcontent-0 .layout-item-3 { margin-top: 10px;margin-bottom: 10px;  }
      .art-content .art-postcontent-0 .layout-item-4 { border-spacing: 10px 0px; border-collapse: separate;  }
      .art-content .art-postcontent-0 .layout-item-5 { color: #000000; background: ; padding: 0px;  }
      .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
      .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

      .art-article th { font-size: 15px; background-color: #7f94ab; color: #fff} 
      .art-article td { font-size: 13px; font-family: tahoma; vertical-align: middle}

      tr:nth-child(even){background-color : #bed3e4}
      tr:nth-child(odd){background-color : #e1eefb}
      
      .art-postcontent a, .art-postcontent a:link {font-size: 16px; text-decoration: none; color: #000000}
      .art-postcontent a, .art-postcontent a:hover{color: blue}

      .dataTables_filter label{visibility: hidden; position: relative; }
      .dataTables_filter:before{visibility: visible;  font-family: Tahoma; font-size: 16px; font-weight: bold;
       color: rgb(0, 0, 0); content: "جستجو"}
       .dataTables_filter input{visibility: visible;  border: 1px solid #009efb; height: 30px;margin-bottom: 1%}
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
                     <article class="art-post art-article" style="height: 88%">                 
                        <div class="art-postcontent art-postcontent-0 clearfix">  
                           <div class="art-content-layout-wrapper layout-item-0 ">
                              <div class="art-content-layout layout-item-1">
                                 <!--Header of the page -->
                                 <div class="art-content-layout-row">
                                    <div class="art-layout-cell layout-item-2" style="width: 10%" >
                                       <ul>
                                          <li>
                                             <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                لیست معاملات
                                             </span>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="art-layout-cell layout-item-2" style="width: 22%" >
                                       
                                    </div>
                                    <div class="art-layout-cell layout-item-2" style="width: 33%" >
                                       <p style="text-align: left; margin-left: 20px;">
                                          <span style="color: rgb(115, 115, 115); line-height: 16px;">&nbsp;
                                             <a href="buy.php" class="art-button">خرید</a>&nbsp;
                                             <a href="sell.php" class="art-button">فروش</a>&nbsp;
                                          </span>
                                       </p>
                                    </div>
                                 </div> <!-- End of Header -->
                              </div>
                           </div>
                           <div class="art-content-layout-wrapper layout-item-3 ">
                              <div class="art-content-layout layout-item-4">
                                 <div class="art-content-layout-row">
                                    <!--Content of the page -->
                                    <div  class="art-layout-cell layout-item-5 print" style="width: 100%; height: 380px" >
                                       <table id="bargains" style="width: 98.5%">
                                          <thead>
                                             <tr>
                                                <th width="20px">ردیف</th>
                                                <th width="68px">نام معامله دار</th>
                                                <th width="85px">تفصیلات</th>
                                                <th width="80px">نام گدام</th>
                                                <th width="70px">قیمت فی تن</th>
                                                <th width="40px">تعداد موتر</th>
                                                <th width="48px">تعداد بوجی</th>
                                                <th width="50px">مجموع به کیلو</th>
                                                <th width="70px">باقی مانده خرید</th>
                                                <th width="45px">کسرات</th>
                                                <th width="70px">مجموع مبلغ معامله</th>
                                                <th width="60px">نوع معامله</th>
                                                <th width="81px">تاریخ</th>
                                                <th width="40px">مفاد</th>
                                                <th width="40px">آی دی خرید</th>
                                                <th width="135px">تنظیمات</th>
                                             </tr>
                                          </thead>
                                       
                                          <?php 
                                             require_once "../back end/php/sell&buyClass.php";
                                             $display = new Trade();
                                             $display->DisplayTrades();
                                          ?>
                                       
                                       </table>
                                       <div class="noPrint" align="center" style="position: relative;margin-top: 7px;bottom: -10px; width: 100%">
                                          <?php
                                             $status = new Trade();
                                             $status->BudgetStatus();
                                          ?>
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
   <script type="text/javascript" src="../back end/JQuery/sell&buy.js"></script>
</body>
</html>