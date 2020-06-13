<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../login.php');
?>
<!DOCTYPE html>
<html dir="rtl" lang="en-US"><head><!-- Created by Artisteer v4.1.0.60046 -->
   <meta charset="utf-8">
   <title>Payments and Receipt</title>
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

      .design:nth-child(even){background-color : #bed3e4}
      .design:nth-child(odd){background-color : #e1eefb}

      .in{text-indent: 10px}
      .art-postcontent a, .art-postcontent a:link {font-size: 16px; text-decoration: none; color: #000000}
      .art-postcontent a, .art-postcontent a:hover{color: blue}
      .art-content .art-postcontent-0 .layout-item-0 {margin-top: 0px}
      .art-content .art-postcontent-0 .layout-item-1 {background-color: #b7c5ce}


      #customer, #goods_name, #total_trade, #payment, #date, #reminder, #sign {text-indent: 10px; border: none; background-color: #dbdfe4;
       font-size: 16px; font-family: tahoma; font-weight: bold; width: 100px; color: #000000 !important; }
      .print {float: left; width: 55%; margin-top: -35%; border: 4px double #000000; padding: 15px}
      #payInstallments{float: left; width: 60%; margin-top: -33%; margin-bottom: 2%}
      #recieveInstallments{float: left; width: 60%; margin-top: -33%; margin-bottom: 2%}
      #bankList{float: left; width: 60%; margin-top: 6%; margin-bottom: 2%}
      .art-article .installment_th {font-size: 14px;font-weight: bolder; font-family: tahoma;background-color: #7f94ab; color: #fff;text-align: center;} 
      .art-article .installment_td {font-size: 14px; font-family: tahoma; vertical-align: middle; color: #000 }

   </style>
</head>
<body>
   <div id="art-main">
      <nav class="art-nav">
         <ul class="art-hmenu">
            <li><a href="customer.php">معامله داران</a></li>
            <li><a href="sell&buy.php">خرید و فروش</a></li>
            <li><a href="payment&receipt.php" class="active">پرداخت و دریافت</a></li>
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
                                                     پرداخت قسط
                                                   </span>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#page2">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                      دریافت قسط
                                                   </span>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="#page3">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                      بانک
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
                                                <br />
                                                <form id="payment_form" action="../back end/php/newInstallment.php" method="post" 
                                                   style="display: inline;">
                                                   <table  style="margin: 1%">
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal">
                                                            <label  dir="ltr" for="customer_name4pay">نام معامله دار</label>
                                                         </td>
                                                         <td>
                                                            <select class="in" id="customer_name4pay" name="customer_name" style="width: 100%;
                                                             height: 130%">
                                                             <option selected="selected" value=""></option>
                                                            <?php
                                                               require_once ("../back end/php/paymentsClass.php");
                                                               $customerName = new payment();
                                                               $customerName->CustomerList4Payment();
                                                            ?>
                                                            </select>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="total_price">مجموع مبلغ معاملات</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" readonly="" class="in" id="total_price" name="total_price"
                                                             size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label dir="ltr" for="payed_price">مبلغ پرداخت شده</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" readonly="" class="in" id="payed_price" name="payed_price" 
                                                            size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label dir="ltr" for="reminder_price">مبلغ باقی مانده</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" readonly="" class="in" id="reminder_price" 
                                                            name="reminder_price" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="payment_price">مبلغ پرداختی</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="payment_price" name="payment_price" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal">
                                                            <label  dir="ltr" for="note">از درک</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="note" name="note" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="installment_date">تاریخ پرداخت قسط</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="installment_date" name="installment_date"
                                                             size="21"
                                                            value="<?php 
                                                                  require_once("../back end/php/jalaliDate.php");
                                                                  $jalaliDate = new jDateTime(false, true, 'Asia/Kabul');
                                                                  $jDate = $jalaliDate->date("Y/m/d");
                                                                  echo $jDate;
                                                                  ?>">
                                                         </td>
                                                         <td><input type="text" hidden="" name="sellOrBuy" value="پرداخت"></input></td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="2" style="text-align:center">
                                                            <button id="create" style="height: 40px; width: 80px; font-size: 18px;" 
                                                            type="submit">تایید</button>
                                                            <button class="cancel" style="height: 40px; width: 80px; font-size: 18px;"
                                                             type="button">انصراف</button>
                                                            <button id="print" style="height: 40px; width: 80px; font-size: 18px"
                                                             type="button">چاپ رسید</button>
                                                         </td>
                                                      </tr>
                                                   </table>
                                                </form>
                                                <div id="payInstallments">
                                                   <table style="width: 90%">
                                                      <thead>
                                                        <tr>
                                                          <th class="installment_th" width="10%">ردیف</th>
                                                          <th class="installment_th" width="20%">مبلغ پرداختی</th>
                                                          <th class="installment_th" width="30%">از درک</th>
                                                          <th class="installment_th" width="20%">تاریخ</th>
                                                          <th class="installment_th" width="20%">تنظیمات</th>
                                                        </tr>
                                                      </thead>
                                                   </table>
                                                   <div id="payInstallment" style="height: 360px; overflow-y: scroll; width: 93%">                         
                                                   </div>
                                                </div>
                                                <div class="print" hidden="true">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                         <h1 style="text-align: center; color: #000000">برگه رسید پرداخت قسط</h1><br />
                                                         محترم <input type="text" id="customer" style="width: 160px">
                                                         از بابت معاملاتی که مجموع مبلغ باقی مانده آن <input type="text" id="total_trade"> 
                                                          دالر است, مبلغ <input type="text" id="payment"> 
                                                          دالر را در تاریخ
                                                          <input type="text" id="date" style="width: 120px"> 
                                                          دریافت کرد و مبلغ <input type="text" id="reminder"> دالر از مجموع معاملات باقی مانده است.<br /><br />
                                                          امضاء ثمرالدین &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                          امضاء <input type="text" id="sign">
                                                          <br /><br /><br />
                                                   </span>
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
                                                <form action="../back end/php/newInstallment.php" method="post" style="display: inline;">
                                                   <table style="margin: 1%; margin-top: 27px">
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal">
                                                            <label  dir="ltr" for="customer_name4recieve">نام معامله دار</label>
                                                         </td>
                                                         <td>
                                                            <select class="in" id="customer_name4recieve" name="customer_name" 
                                                             style="width: 100%; height: 130%">
                                                             <option selected="selected" value=""></option>
                                                            <?php
                                                               require_once ("../back end/php/paymentsClass.php");
                                                               $customerName = new payment();
                                                               $customerName->CustomerList4Recieve();
                                                            ?>
                                                            </select>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal">
                                                            <label  dir="ltr" for="total_price">مجموع مبلغ معاملات</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" readonly="" class="in" id="sell_total_price" 
                                                            name="total_price" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal">
                                                            <label dir="ltr" for="payed_price">مبلغ پرداخت شده</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" readonly="" class="in" id="sell_payed_price"
                                                             name="payed_price" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label dir="ltr" for="reminder_price">مبلغ باقی مانده</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" readonly="" class="in" id="sell_reminder_price"
                                                             name="reminder_price" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal">
                                                            <label  dir="ltr" for="payment_price">مبلغ پرداختی</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="sell_payment_price" name="payment_price"
                                                             size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal">
                                                            <label  dir="ltr" for="note">از درک</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="sell_note" name="note" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="installment_date">تاریخ پرداخت قسط</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="sell_installment_date" 
                                                            name="installment_date" size="21"
                                                            value="<?php 
                                                                  require_once("../back end/php/jalaliDate.php");
                                                                  $jalaliDate = new jDateTime(false, true, 'Asia/Kabul');
                                                                  $jDate = $jalaliDate->date("Y/m/d");
                                                                  echo $jDate;
                                                                  ?>">
                                                         </td>
                                                          <td><input type="text" hidden="" name="sellOrBuy" value="دریافت"></input></td>
                                                      </tr>
                                                      <tr>
                                                         <td colspan="2" style="text-align:center">
                                                            <button id="sell_create" style="height: 40px; width: 80px; font-size: 18px;"
                                                             type="submit">تایید</button>
                                                            <button class="cancel" style="height: 40px; width: 80px; font-size: 18px;"
                                                             type="button">انصراف</button>
                                                             <button id="sell_print" style="height: 40px; width: 80px; font-size: 18px"
                                                              type="button">چاپ رسید</button>
                                                         </td>
                                                      </tr>
                                                   </table>
                                                </form>
                                                <div id="recieveInstallments">
                                                   <table style="width: 90%">
                                                      <thead>
                                                        <tr>
                                                          <th class="installment_th" width="10%">ردیف</th>
                                                          <th class="installment_th" width="20%">مبلغ دریافتی</th>
                                                          <th class="installment_th" width="30%">از درک</th>
                                                          <th class="installment_th" width="20%">تاریخ</th>
                                                          <th class="installment_th" width="20%">تنظیمات</th>
                                                        </tr>
                                                      </thead>
                                                   </table>
                                                   <div id="recieveInstallment" style="height: 360px; overflow-y: scroll; width: 93%">
                                                     
                                                   </div>
                                                </div>
                                                <div class="sell_print" hidden="true">
                                                   <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal;">
                                                         <h1 style="text-align: center; color: #000000">برگه رسید دریافت قسط</h1><br />
                                                         محترم <input type="text" id="sell_customer" style="width: 160px">
                                                         از بابت معاملاتی که مجموع مبلغ باقی مانده آن <input type="text" id="sell_total_trade"> 
                                                          دالر است, مبلغ <input type="text" id="sell_payment"> 
                                                          دالر را در تاریخ
                                                          <input type="text" id="sell_date" style="width: 120px"> 
                                                          پرداخت کرد و مبلغ <input type="text" id="sell_reminder"> دالر از مجموع معاملات باقی مانده است.<br /><br />
                                                          امضاء ثمرالدین &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                          امضاء <input type="text" id="sell_sign">
                                                          <br /><br /><br />
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="page3">
                                    <div class="art-content-layout-wrapper layout-item-0">
                                       <div class="art-content-layout layout-item-1">
                                          <div class="art-content-layout-row">
                                             <div class="art-layout-cell layout-item-2" style="width: 100%" >
                                                <form action="../back end/php/addBank.php" method="post">
                                                   <table align="center" style="margin-top: 6%; margin-bottom: 3%; float: right;">
                                                      <input type="hidden" id="bargainID" name="bargainID" >
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="pay_or_receive">برداشت یا پرداخت</label>
                                                         </td>
                                                         <td>
                                                            <select class="in" id="pay_or_recieve" name="pay_or_recieve" style="width: 100%;
                                                             height: 130%">
                                                               <option value="پرداخت">پرداخت</option>
                                                               <option value="برداشت">برداشت</option>
                                                             </select>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="payment_price">مبلغ</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="bank_payment_price" name="payment_price" 
                                                            size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; 
                                                         line-height: normal">
                                                            <label  dir="ltr" for="note">از درک</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="note" name="note" size="21">
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black;
                                                          line-height: normal">
                                                            <label  dir="ltr" for="bank_date">تاریخ افزود به بانک</label>
                                                         </td>
                                                         <td>
                                                            <input type="text" class="in" id="bank_installment_date" name="bank_date" size="21"
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
                                                            <button id="bank_create" style="height: 40px; width: 80px; font-size: 18px;"
                                                             type="submit">تایید</button>
                                                            <button class="cancel" style="height: 40px; width: 80px; font-size: 18px;"
                                                             type="button">انصراف</button>
                                                         </td>
                                                      </tr>
                                                   </table>
                                                </form>
                                                <div id="bankList">
                                                   <table style="width: 90%">
                                                      <thead>
                                                        <tr>
                                                          <th class="installment_th" width="10%">ردیف</th>
                                                          <th class="installment_th" width="15%">پرداخت</th>
                                                          <th class="installment_th" width="15%">دریافت</th>
                                                          <th class="installment_th" width="25%">از درک</th>
                                                          <th class="installment_th" width="15%">تاریخ</th>
                                                          <th class="installment_th" width="20%">تنظیمات</th>
                                                        </tr>
                                                      </thead>
                                                   </table>
                                                   <div id="bankDetail" style="height: 330px; overflow-y: scroll; width: 93%">
                                                      <?php 
                                                         require_once ("../back end/php/paymentsClass.php");
                                                         $bank = new payment();
                                                         $bank->BankEntries();
                                                      ?>
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
   
</body>
<script src="jquery.js"></script>
<script src="script.js"></script>
<script src="script.responsive.js"></script>
<script src="../back end/JQuery/Print/jQuery.print.js"></script>
<script src="jquery-ui-1.12.1.custom blue design/jquery-ui.js"></script>
<script type="text/javascript" src="../back end/JQuery/installment.js"></script>
</html>