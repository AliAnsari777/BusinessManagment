<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../login.php');
?>
<!DOCTYPE html>
<html dir="rtl" lang="en-US"><head><!-- Created by Artisteer v4.1.0.60046 -->
   <meta charset="utf-8">
   <title>Settings</title>
   <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

   <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
   <link rel="stylesheet" href="style.css" media="screen">
   <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
   <link rel="stylesheet" href="style.responsive.css" media="all">
   <link rel="stylesheet" href="jquery-ui-1.12.1.custom blue design/jquery-ui.css">

   <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
   <script src="jquery.js"></script>
   <script src="script.js"></script>
   <script src="script.responsive.js"></script>
   <script src="jquery-ui-1.12.1.custom blue design/jquery-ui.js"></script>

   <style>
      .art-content .art-postcontent-0 .layout-item-0 { margin-top: 10px;margin-bottom: 0px;  }
      .art-content .art-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:1px;border-color:#b7c5ce; color: #737373; background: #EFF2F5; border-spacing: 10px 0px; border-collapse: separate;  background-color: #b7c5ce; margin-top: -10px; height: 70px}
      .art-content .art-postcontent-0 .layout-item-2 { color: #E2E8EE; background: ; padding: 0px; vertical-align: top;  }
      .art-content .art-postcontent-0 .layout-item-3 { margin-top: 10px;margin-bottom: 10px;  }
      .art-content .art-postcontent-0 .layout-item-4 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-color:#4396C7; color: #737373; background: #E5EBE6; border-spacing: 10px 0px; border-collapse: separate;  }
      .art-content .art-postcontent-0 .layout-item-5 { color: #E2E8EE; background: ; padding: 0px;  }
      .art-content .art-postcontent-0 .layout-item-6 { color: #737373; background: #E5EBE6; border-spacing: 10px 0px; border-collapse: separate;  }
      .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
      .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
      .art-article .heading {font-size: 14px; font-weight: bolder; font-family: tahoma; background-color: #7f94ab; color: #fff;} 
      .art-article .data {font-size: 14px; font-family: tahoma; color: #000}
      .in {text-indent: 10px;}
      .art-postcontent a, .art-postcontent a:link {text-decoration: none; color: black}
      .art-postcontent a, .art-postcontent a:hover{color: blue}
      .art-article th{font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal;text-align: left;}
      .design:nth-child(even){background-color : #bed3e4}
      .design:nth-child(odd){background-color : #e1eefb}
   </style>
</head>
<body>
   <div id="art-main">
      <nav class="art-nav">
         <ul class="art-hmenu">
            <li><a href="customer.php">معامله داران</a></li>
            <li><a href="sell&buy.php" >خرید و فروش</a></li>
            <li><a href="payment&receipt.php">پرداخت و دریافت</a></li>
            <li><a href="cost.php">مصارف</a></li>
            <li><a href="report.php" >گزارشات</a></li>
            <li><a href="settings.php" class="active">تعاریف</a></li>
         </ul>
         <a href="../back end/php/logout.php" style="float: left; margin-right: 10px"><img height="32" width="32" src="logout.ico"></a>
         <a href="../back end/php/logout.php" style="font-size: 18px; color: #ffffff; float: left; text-decoration: none;" >خروج</a> 
      </nav>
      <div class="art-sheet clearfix">
         <div class="art-layout-wrapper">
            <div class="art-content-layout">
               <div class="art-content-layout-row">
                  <div class="art-layout-cell art-content" >
                     <article class="art-post art-article">
                        <div class="art-postcontent art-postcontent-0 clearfix">
                           <div class="art-content-layout-wrapper layout-item-0">
                              <div id="tabs" style="border : 0; margin: 10px">
                                 <div class="art-content-layout" style="margin-right: 10px">
                                    <div class="art-content-layout-row">
                                       <!--Content of the page -->
                                       <div class="art-layout-cell layout-item-2" style="width: 100%" >
                                          <ul>
                                             <li>
                                                <a href="#customer">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">مشتری</span>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#goods">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">جنس</span>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#stock">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">گدام</span>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="customer">
                                    <div class="art-content-layout-wrapper layout-item-0">
                                       <div class="art-content-layout layout-item-1">
                                          <div class="art-content-layout-row">
                                             <div class="art-layout-cell layout-item-2" style="width: 100%" >
                                                <div align="center">
                                                   <form id="customerForm" action="../back end/php/newCustomer.php" method="post">
                                                      <table align="center" style="margin-top: 3%; margin-bottom: 3%">
                                                         <tr>
                                                            <th>
                                                               <label  dir="ltr" for="customer_name">نام</label>
                                                            </th>
                                                            <td>
                                                               <input type="text" class="in" id="customer_name" name="customer_name" size="21">
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <th>
                                                               <label  dir="ltr" for="last_name">تخلص</label>
                                                            </th>
                                                            <td>
                                                               <input type="text" class="in" id="last_name" name="last_name" size="21">
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <th>
                                                               <label  dir="ltr" for="first_tel">نمبر تماس 1</label>
                                                            </th>
                                                            <td>
                                                               <input type="text" pattern="[0-9]{10,10}" class="in" id="first_tel" name="first_tel" size="21">
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <th>
                                                               <label dir="ltr" for="second_tel">نمبر تماس 2</label>
                                                            </th>
                                                            <td>
                                                               <input type="text" class="in" id="second_tel" name="second_tel" size="21">
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <th>
                                                               <label  dir="ltr" for="address">آدرس</label>
                                                            </th>
                                                            <td>
                                                               <input type="text" class="in" id="address" name="address" size="21">
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td colspan="2" style="text-align:center">
                                                               <button id="create_customer" style="height: 40px; width: 80px; font-size: 2em;" type="submit">تایید</button>
                                                               <button id="cancel_customer" style="height: 40px; width: 80px; font-size: 2em;" type="button">انصراف</button>
                                                            </td>
                                                          </tr>
                                                      </table>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="goods">
                                    <div class="art-content-layout-wrapper layout-item-3">
                                       <div class="art-content-layout layout-item-1">
                                          <div class="art-content-layout-row">
                                             <div class="art-layout-cell layout-item-5" style="width: 100%" >
                                                <div align="center" style="height: 420px">
                                                   <form id="goodsName" action="../back end/php/newGoods.php" method="post">
                                                      <table align="center" style="margin-top: 3%; margin-bottom: 3%">
                                                         <tr>
                                                            <th>
                                                               <label  dir="ltr" for="goods_name">نام جنس</label>
                                                            </th>
                                                            <td>
                                                               <input type="text" class="in" id="goods_name" name="goods_name" size="21">
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <td colspan="2" style="text-align:center">
                                                               <button id="create_goods" style="height: 40px; width: 80px; font-size: 2em;" type="submit">تایید</button>
                                                               <button id="cancel_goods" style="height: 40px; width: 80px; font-size: 2em;" type="button">انصراف</button>
                                                            </td>
                                                         </tr>
                                                      </table>
                                                   </form>                                                  
                                                   <table style="width: 33%">
                                                      <thead>
                                                         <tr>
                                                            <th style="width: 10%; text-align: center;" class="heading">ردیف</th>
                                                            <th style="width: 50%; text-align: center;" class="heading">نام جنس</th>
                                                            <th style="width: 40%; text-align: center;" class="heading">تنظیمات</th>
                                                         </tr>
                                                      </thead>
                                                   </table>
                                                   <div style="height: 53%; width: 33%; overflow-y: auto;">
                                                      <table width="99%">
                                                         <tbody>
                                                         <?php
                                                            require_once ("../back end/php/goodsClass.php");
                                                            $goodsList = new Goods();
                                                            $goodsList->displayGoods();
                                                         ?>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="stock">
                                    <div class="art-content-layout-wrapper layout-item-3">
                                       <div class="art-content-layout layout-item-1">
                                          <div class="art-content-layout-row">
                                             <div class="art-layout-cell layout-item-5" style="width: 100%" >
                                                <div align="center" style="height: 453px">
                                                   <form id="stockName" action="../back end/php/newStock.php" method="post">
                                                      <table align="center" >
                                                         <tr>
                                                            <th>
                                                               <label  dir="ltr" for="stock_name">نام گدام</label>
                                                            </th>
                                                            <td>
                                                               <input type="text" class="in" id="stock_name" name="stock_name" size="21">
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <th>
                                                               <label  dir="ltr" for="staff_name">نام مسئول گدام</label>
                                                            </th>
                                                            <td>
                                                               <input type="text" class="in" id="staff_name" name="staff_name" size="21">
                                                            </td>
                                                         </tr>
                                                         <tr>
                                                            <th>
                                                               <label  dir="ltr" for="firstTel">نمبر تماس 1</label>
                                                            </th>
                                                            <td>
                                                               <input type="text" class="in" id="firstTel" name="firstTel" size="21">
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <th>
                                                               <label  dir="ltr" for="secondTel">نمبر تماس 2</label>
                                                            </th>
                                                            <td>
                                                               <input type="text" class="in" id="secondTel" name="secondTel" size="21">
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <th>
                                                               <label dir="ltr" for="startDate">تاریخ شروع کار</label>
                                                            </th>
                                                            <td>
                                                               <input type="text" class="in" id="start_date" name="start_date" size="21"
                                                               value="<?php 
                                                                           require_once("../back end/php/jalaliDate.php");
                                                                           $jalaliDate = new jDateTime(false, true, 'Asia/Kabul');
                                                                           $jDate = $jalaliDate->date("Y/m/d");
                                                                           echo $jDate;
                                                                        ?>" >
                                                            </td>
                                                         </tr>
                                                          <tr>
                                                            <td colspan="2" style="text-align:center">
                                                               <button id="create_stock" style="height: 40px; width: 80px; font-size: 2em;" type="submit">تایید</button>
                                                               <button id="cancel_stock" style="height: 40px; width: 80px; font-size: 2em;" type="button">انصراف</button>
                                                            </td>
                                                          </tr>
                                                      </table>
                                                   </form>
                                                   
                                                      <table style="width: 75%">
                                                         <thead>
                                                            <th class="heading" style="width: 1%; text-align: center;">ردیف</th>
                                                            <th class="heading" style="width: 5%; text-align: center;">نام گدام</th>
                                                            <th class="heading" style="width: 5%; text-align: center;">مسئول گدام</th>
                                                            <th class="heading" style="width: 5%; text-align: center;">نمبر تماس 1</th>
                                                            <th class="heading" style="width: 5%; text-align: center;">نمبر تماس 2</th>
                                                            <th class="heading" style="width: 5%; text-align: center;">تاریخ شروع کار</th>
                                                            <th class="heading" style="width: 10%; text-align: center;">تنظیمات</th>
                                                         </thead>
                                                      </table>
                                                   
                                                   <div style="width: 75%; height: 120px; overflow-y: auto;">
                                                      <table>
                                                         <tbody>
                                                         <?php
                                                            require_once ("../back end/php/stockClass.php");
                                                            $list = new Stocks();
                                                            $list->DisplayStocks();
                                                         ?>
                                                         </tbody>
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
   <script type="text/javascript">
      $( "#tabs" ).tabs();
   </script>
   <script type="text/javascript" src="../back end/jquery/settings.js"></script>
</body>
</html>