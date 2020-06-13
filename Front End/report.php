<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../login.php');
?>
<!DOCTYPE html>
<html dir="rtl" lang="en-US"><head><!-- Created by Artisteer v4.1.0.60046 -->
   <meta charset="utf-8">
   <title>Report</title>
   <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

   <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
   <link rel="stylesheet" href="style.css" media="screen">
   <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
   <link rel="stylesheet" href="style.responsive.css" media="all">
   <link rel="stylesheet" href="jquery-ui-1.12.1.custom blue design/jquery-ui.css">

   <link rel="shortcut icon" href="favicon.png" type="image/x-icon">


   <style>
      .art-content .art-postcontent-0 .layout-item-0 { margin-top: 10px;margin-bottom: 0px;  }
      .art-content .art-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:1px;border-color:#b7c5ce; color: #737373; background: #EFF2F5; border-spacing: 10px 0px; border-collapse: separate;  background-color: #b7c5ce; margin-top: -10px; height: 70px}
      .art-content .art-postcontent-0 .layout-item-2 { color: #E2E8EE; background: ; padding: 0px; vertical-align: top;  }
      .art-content .art-postcontent-0 .layout-item-3 { margin-top: 10px;margin-bottom: 10px;  }
      .art-content .art-postcontent-0 .layout-item-4 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-color:#4396C7; color: #737373; background: #E5EBE6; border-spacing: 10px 0px; border-collapse: separate;  }
      .art-content .art-postcontent-0 .layout-item-5 { color: #000000; background: ; padding: 0px;  }
      .art-content .art-postcontent-0 .layout-item-6 { color: #737373; background: #E5EBE6; border-spacing: 10px 0px; border-collapse: separate;  }
      .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
      .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
      .art-article th {font-size: 14px; font-family: tahoma; font-weight: bolder; background-color: #7f94ab; color: #fff;} 
      .art-article td {font-size: 14px; font-family: tahoma; color: #000000}
      .art-postcontent  button:hover{color: #000000; box-shadow : 0 0 20px #ffffff}
      .art-postcontent  button{color: #000000}

      tr:nth-child(even){background-color : #bed3e4}
      tr:nth-child(odd){background-color : #e1eefb}
   </style>
</head>
<body>
   <div id="art-main">
      <nav class="art-nav">
         <ul class="art-hmenu">
            <li><a href="customer.php">معامله داران</a></li>
            <li><a href="sell&buy.php">خرید و فروش</a></li>
            <li><a href="payment&receipt.php">پرداخت و دریافت</a></li>
            <li><a href="cost.php">مصارف</a></li>
            <li><a href="report.php" class="active">گزارشات</a></li>
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
                              <div id="tabs" style="border : 0; margin: 10px">
                                 <div class="art-content-layout" style="margin-right: 10px">
                                    <div class="art-content-layout-row">
                                       <div class="art-layout-cell layout-item-2" style="width: 100%" >                                    
                                          <ul>
                                             <li>
                                                <a href="#page1">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                      معاملات معامله دار
                                                   </span>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#page2">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                      داد و گرفت معامله دار
                                                   </span>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#page3">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                      مفاد روزانه
                                                   </span>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#page4" id="monthlyProfit">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                      مفاد ماهانه
                                                   </span>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#page5"  id="stock">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                      موجودی گدام ها
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
                                          <div class="art-content-layout-row" style="display: inline;">
                                             <div class="art-layout-cell layout-item-2" style="width: 100%" >
                                                <br />
                                                <label  style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal" dir="ltr" for="customer_name">نام معامله دار</label>&nbsp; &nbsp;
                                                <select class="in" id="customer_name" name="customer_name" style="width: 15%;">
                                                    <?php
                                                      require_once ("../back end/php/paymentsClass.php");
                                                      $customerName = new payment();
                                                      $customerName->CustomerList();
                                                   ?>
                                                </select>
                                                <div  class="art-layout-cell layout-item-5" style="width: 1200px; height: 420px" >
                                                   <table style="width: 98.5%">
                                                      <thead>
                                                         <tr>
                                                            <th width="70px">نام معامله دار</th>
                                                            <th width="90px">تفصیلات</th>
                                                            <th width="90px">نام گدام</th>
                                                            <th width="60px">قیمت فی تن</th>
                                                            <th width="45px">تعداد موتر</th>
                                                            <th width="60px">تعداد بوجی</th>
                                                            <th width="100px">مجموع به کیلو</th>
                                                            <th width="60px">کسرات</th>
                                                            <th width="100px">مجموع مبلغ معامله</th>
                                                            <th width="90px">
                                                               نوع معامله
                                                               <select id="filter" style="margin-top: 4px">
                                                                  <option value=""></option>
                                                                  <option value="خرید">خرید</option>
                                                                  <option value="فروش">فروش</option>
                                                               </select>
                                                            </th>
                                                            <th width="80px">تاریخ</th>
                                                            <th width="83px">حسابی</th>
                                                         </tr>
                                                      </thead>
                                                   </table>
                                                   <div id="displayTrades" style="height: 78%; overflow-y: scroll;">
                                                      
                                                   </div>
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
                                                <label  style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                 line-height: normal" dir="ltr" for="customer_name">نام معامله دار</label>&nbsp; &nbsp;
                                                <select class="in" id="installment_customer_name" name="customer_name" style="width: 15%;">
                                                    <?php
                                                      $customerName->CustomerList();
                                                   ?>
                                                </select>
                                                <div  class="art-layout-cell layout-item-5" style="width: 850px; height: 420px" >
                                                   <table style="width: 100%">
                                                      <thead>
                                                         <tr>
                                                            <th width="69px%">ردیف</th>
                                                            <th width="150px">
                                                               دریافت یا پرداخت
                                                               <select id="filterInstallment" style="margin-top: 4px">
                                                                     <option value=""></option>
                                                                     <option value="پرداخت">پرداخت</option>
                                                                     <option value="دریافت">دریافت</option>
                                                                  </select>
                                                               </th>
                                                            <th width="126px">مبلغ قسط</th>
                                                            <th width="300px">از درک</th>
                                                            <th width="113px">تاریخ</th>
                                                            <th width="130px">حسابی</th>
                                                         </tr>
                                                      </thead>
                                                   </table>
                                                   <div id="displayInstallments" style="height: 78%; overflow-y: scroll;">
                                                      
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="page3">
                                    <div class="art-content-layout-wrapper layout-item-0">
                                       <div class="art-content-layout layout-item-1">
                                          <div class="art-content-layout-row" style="display: inline;">
                                             <div class="art-layout-cell layout-item-2" style="width: 100%" >
                                                <div  class="art-layout-cell layout-item-5" style="width: 100%; height: 464px" >
                                                   <br />
                                                   <table  style="width: 210%">
                                                      <thead>
                                                         <tr>
                                                            <th width="1%">ردیف</th>
                                                            <th width="20%">تاریخ</th>
                                                            <th width="20%">مصارف</th>
                                                            <th width="20%">مفاد</th>
                                                            <th width="20%">نتیجه</th>
                                                         </tr>
                                                      </thead>
                                                   </table>
                                                   <div id="displayProfit" style="height: 87%; overflow-y: auto; width: 210%">
                                                      <?php 
                                                         require_once ("../back end/php/sell&buyClass.php");
                                                         $listProfit = new Trade();
                                                         $listProfit->DisplayProfit();
                                                      ?>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="page4">
                                    <div class="art-content-layout-wrapper layout-item-0">
                                       <div class="art-content-layout layout-item-1">
                                          <div class="art-content-layout-row" style="display: inline;">
                                             <div class="art-layout-cell layout-item-2" style="width: 100%" >
                                                <div  class="art-layout-cell layout-item-5" style="width: 100%; height: 464px" >
                                                <br />
                                                   <table  style="width: 210%">
                                                      <thead>
                                                         <tr>
                                                            <th width="1%">ردیف</th>
                                                            <th width="19.5%">تاریخ</th>
                                                            <th width="20%">مصارف</th>
                                                            <th width="20%">مفاد</th>
                                                            <th width="20%">نتیجه</th>
                                                         </tr>
                                                      </thead>
                                                   </table>
                                                   <div id="displayMonthlyProfit" style="height: 87%; overflow-y: auto; width: 210%">
                                                      
                                                   </div>
                                                </div>                                           
                                             </div>
                                          </div>
                                       </div>                                           
                                    </div>
                                 </div>
                                 <div id="page5">
                                    <div class="art-content-layout-wrapper layout-item-0">
                                       <div class="art-content-layout layout-item-1">
                                          <div class="art-content-layout-row" style="display: inline;">
                                             <div class="art-layout-cell layout-item-2" style="width: 100%" >
                                                <div  class="art-layout-cell layout-item-5" style="width: 100%; height: 464px" >
                                                <br />
                                                   <div id="stockSupply">

                                                   </div>
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
<script src="jquery.js"></script>
<script src="script.js"></script>
<script src="script.responsive.js"></script>
<script src="jquery-ui-1.12.1.custom blue design/jquery-ui.js"></script>
<script type="text/javascript" src="../back end/jquery/report.js"></script>
<script type="text/javascript">
   $( "#tabs" ).tabs();
</script>
</body>
</html>