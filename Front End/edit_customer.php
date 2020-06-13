<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../login.php');

   if(isset($_GET['id']))
   {
      // 'htmlentities' is used for sanitizing the super global variables.
      // it converts all characters into html entities and prevent exploit attack.
      // these informations are come from customer page which calls displayCustomer function from customerClass.php
      $customerId =  htmlentities($_GET['id']);
      $customerName =  htmlentities($_GET['name']);
      $customerLastName = htmlentities($_GET['lastName']);
   }
?>
<!DOCTYPE html>
<html dir="rtl" lang="en-US"><head>
   <meta charset="utf-8">
   <title>Edit Customer</title>
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
     .art-content .art-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;
         border-left-style:solid;border-width:1px;border-color:#4396C7; color: #737373; background: #EFF2F5; border-spacing: 10px 0px;
         border-collapse: separate; }
     .art-content .art-postcontent-0 .layout-item-2 { color: #E2E8EE; background: ; padding: 0px; vertical-align: top;  }
     .art-content .art-postcontent-0 .layout-item-3 { }
     .art-content .art-postcontent-0 .layout-item-4 { border-spacing: 10px 0px; border-collapse: separate;  }
     .art-content .art-postcontent-0 .layout-item-5 { color: #000000; background: ; padding: 0px;  }
     .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
     .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
     .art-article th { font-size: 14px; font-family: tahoma; text-align: left;} 
     input[type = text] {text-indent: 10px; font-family: Tahoma; font-size: 14px; font-weight: bold; color: rgb(0, 0, 0); line-height: normal}
   </style>
</head>
<body>
   <div id="art-main">
      <nav class="art-nav">
         <ul class="art-hmenu">
            <li><a href="customer.php" class="active">معامله داران</a></li>
            <li><a href="sell&buy.php">خرید و فروش</a></li>
            <li><a href="payment&receipt.php">پرداخت و دریافت</a></li>
            <li><a href="cost.php">مصارف</a></li>
            <li><a href="report.php">گزارشات</a></li>
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
                                                مشخصات معامله دار : <?php echo $customerName . " " .$customerLastName ?>
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
                                    <div align="center" class="art-layout-cell layout-item-5" style="width: 100%" >
                                       <?php
                                          require_once("../back end/php/customerClass.php");
                                          $editCustomer = new Customers();
                                          $editCustomer->EditCustomer($customerId);
                                       ?>
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
<script type="text/javascript" src="../back end/JQuery/customer.js"></script>
</html>