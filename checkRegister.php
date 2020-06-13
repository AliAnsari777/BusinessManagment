<?php

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

  if(isset($_POST['code']))
  {
    $serial = "348fa45ed4f3";
    $result = string_to_ascii($serial);
    $hash = hash_serial($result);
    if($hash == $_POST['code'])
    {
      $address = "C:\\Windows\\System32\\Drivers\\kse.txt";
      $handle = fopen($address, "w") or die("file can't create");
      fwrite($handle, $hash);
      fclose($handle);
      $_SESSION['checking'] = "pass";
      echo "<script type='text/javascript' >
        location = 'login.php'
        alert('کد فعال سازی تایید شد.');
        </script>";
    }
    else
    {
      echo "<script type='text/javascript' >
        location = 'index.php'
        alert('کد فعال سازی اشتباه است!');
        </script>";
    }
  }
?>