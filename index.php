<?php
session_start();

  function string_to_ascii($string)
  {
    $ascii = NULL;
   
    for ($i = 0; $i < strlen($string); $i++)
    {
      $ascii = ord($string[$i]);
    }
    $result = $ascii * $ascii *$ascii *$ascii;
    return($result);
  }

  function hash_serial($serial)
  {
    $hash_value =  ceil(pow((log10($serial) * 7), 2) * $serial);
    return $hash_value;
  }

  if(!file_exists("C:\\Windows\\System32\\Drivers\\kse.txt"))
  {
    $serial = "348fa45ed4f3";
    $result = string_to_ascii($serial);
  }
  else
  {
    $serial = "348fa45ed4f3";
    $result = string_to_ascii($serial);
    $hash = hash_serial($result);
    
    $address = "C:\\Windows\\System32\\Drivers\\kse.txt";
    $handle = fopen($address, "r");
    $contents = fgets($handle);
    fclose($handle);
    if($contents == $hash)
    {
      $_SESSION['checking'] = "pass";
      header('location:  login.php');
    }
    else
    {
      header('location:  illegalCopy.php');
    }

  }
?>

<!DOCTYPE html>
<html dir="rtl" lang="en-US"><head>
   <meta charset="utf-8">
   <title>Activation</title>
   <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

   <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
   <link rel="stylesheet" href="Front End/style.css" media="screen">
   <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
   <link rel="stylesheet" href="Front End/style.responsive.css" media="all">

   <link rel="shortcut icon" href="Front End/favicon.png" type="image/x-icon">
   <script src="Front End/jquery.js"></script>
   <script src="Front End/script.js"></script>
   <script src="Front End/script.responsive.js"></script>


   <style>
     .art-content .art-postcontent-0 .layout-item-0 { margin-top: 10px;margin-bottom: 0px;  }
     .art-content .art-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:1px;border-color:#4396C7; color: #737373; background: #EFF2F5; border-spacing: 10px 0px; border-collapse: separate;  }
     .art-content .art-postcontent-0 .layout-item-2 { color: #E2E8EE; padding: 0px; vertical-align: top;  }
     .art-content .art-postcontent-0 .layout-item-3 { margin-top: 10px;margin-bottom: 10px;  }
     .art-content .art-postcontent-0 .layout-item-4 { border-spacing: 10px 0px; border-collapse: separate;  }
     .art-content .art-postcontent-0 .layout-item-5 { color: #E2E8EE; background: ; padding: 0px;  }
     .ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
     .ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
     
   </style>
</head>
<body>
   <div id="art-main">
      <div class="art-sheet clearfix">
         <div class="art-layout-wrapper">
            <div class="art-content-layout">
               <div class="art-content-layout-row">
                  <div class="art-layout-cell art-content">
                     <article class="art-post art-article" style="height: 100%">
                      <p style="font-size: 42px; font-weight:bolder; color:#009efb; text-align:center; margin-top:5%">نرم افزار حسابرسی انصار</p> 
                        <div class="art-postcontent art-postcontent-0 clearfix">
                           <div class="art-content-layout-wrapper layout-item-0">
                              <div class="art-content-layout layout-item-1" style="width:40em; height:20em; margin-right:30%; margin-top:8%">
                                 <div class="art-content-layout-row">
                                    <div class="art-layout-cell layout-item-2" style="vertical-align: middle; " >
                                       <div align="center">
                                          <form action="checkRegister.php" method="post">
                                             <table align="center">
                                                <tr>
                                                   <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal">
                                                      <label  dir="ltr"for="serial_number">سریال نمبر</label>
                                                   </td>
                                                   <td>
                                                      <input type="text" id="serial_number" name="serial_number" size="30" 
                                                      value="<?php echo $result; ?>">
                                                   </td>
                                                 </tr>
                                                 <tr>
                                                   <td style="font-family: Tahoma; font-size: 16px; font-weight: bold; color: black; line-height: normal">
                                                      <label dir="ltr" for="code">کد فعال سازی</label>
                                                   </td>
                                                   <td>
                                                      <input type="text" id="code" name="code" size="30">
                                                   </td>
                                                 </tr>
                                                 <tr>
                                                   <td colspan="2" style="text-align:center">
                                                      <button style="height: 40px; width: 80px; font-size: 2em;" type="submit">تایید</button>
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
</html>