<?php
   session_start();
   if(!isset($_SESSION['userId']))
      header('location: ../login.php');

   if(isset($_GET['id']))
   {
      // 'htmlentities' is used for sanitizing the super global variables.
      // it converts all characters into html entities and prevent exploit attack.
      // these informations are come from customer page which calls displayCustomer function from customerClass.php
      $bargainsID =  htmlentities($_GET['id']);
      $customerName = htmlentities($_GET['name']);
      $goodsID = htmlentities($_GET['G_ID']);
      $stockID = htmlentities($_GET['S_ID']);
      $buyID = htmlentities($_GET['buy_ID']);
   }
?>
<!DOCTYPE html>
<html dir="rtl" lang="en-US"><head><!-- Created by Artisteer v4.1.0.60046 -->
   <meta charset="utf-8">
   <title>Confirm Trade Delete</title>
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
      .art-content .art-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;
         border-left-style:solid;border-width:1px;border-color:#4396C7; color: #737373; background: #EFF2F5; border-spacing: 10px 0px;
         border-collapse: separate;}
      .art-content .art-postcontent-0 .layout-item-2 { color: #E2E8EE; background: ; padding: 0px; vertical-align: top;  }
      .art-content .art-postcontent-0 .layout-item-3 { margin-top: 10px;margin-bottom: 10px;  }
      .art-content .art-postcontent-0 .layout-item-4 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px;border-color:#4396C7; color: #737373; background: #E5EBE6; border-spacing: 10px 0px; border-collapse: separate;  }
      .art-content .art-postcontent-0 .layout-item-5 { color: #E2E8EE; background: ; padding: 0px;  }
      .art-content .art-postcontent-0 .layout-item-6 { color: #737373; background: #E5EBE6; border-spacing: 10px 0px; border-collapse: separate;  }
      .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
      .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
      .art-article .heading {border: solid 1px black; font-size: 14px; font-family: tahoma; background-color: #d7ffff; color: #000000} 
      .art-article .data {border: solid 1px black; font-size: 14px; font-family: tahoma; background-color: #ffffe1; color: #000000}
      .in {text-indent: 10px;}
      button{font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0)}
      .art-postcontent a, .art-postcontent a:link {text-decoration: none; color: black}
      .art-postcontent a, .art-postcontent a:hover{color: red}
      .text {font-size:24px; color: #000000}
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
            <li><a href="settings.php" >تعاریف</a></li>
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
                              <div class="art-content-layout layout-item-1">
                                 <!--Header of the page -->
                                 <div class="art-content-layout-row">
                                    <div class="art-layout-cell layout-item-2" style="width: 100%" >
                                       <ul>
                                          <li>
                                             <span style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: rgb(0, 0, 0); 
                                            line-height: normal;">
                                                فورم حذف معامله
                                             </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div> <!-- End of Header -->
                              </div>
                              <div align="center" style="border : 0; margin: 10px">
                                 <div align="center" class="art-layout-cell layout-item-5" style="width: 100%" >
                                    <h1 style="text-align: center; color: #fbb103; font-size: 28px">هشدار!</h1>
                                    <p class="text">
                                      آیا میخواهید معامله <span style="color:rgba(255,0,0,1)"><?php echo $customerName;?> 
                                      </span> را از لیست معاملات خود حذف کنید؟
                                    </p>
                                    <p class="text" style="color: blue">با حذف این معامله از لیست معاملات تمام اطلاعت مربوط به این معامله حذف خواهد شد!</p>
                                    <p class="text">
                                      <a id="ok" href="../back end/php/deleteTrade.php?id=<?php echo $bargainsID ?>&G_ID=<?php echo $goodsID ?>&S_ID=<?php echo $stockID ?>&buy_ID=<?php echo $buyID; ?>">بلی</a>
                                      &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp; &nbsp;<a href="#" id="cancel">خیر</a>
                                    </p>
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
   <script type="text/javascript">
      $("#ok").on("click", function(e){
        if(confirm("با حذف تمام اطلاعات مربوط به این معامله موافق هستید؟"))
        {
            
        }
        else
        {
          e.preventDefault(); 
        }
      });

      $("#cancel").on("click", function(){
         location="sell&buy.php";
      });
   </script>
</html>