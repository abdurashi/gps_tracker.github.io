<?php
//// �������  utf --> win-1251
function utftowin($s)
{
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(B0)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(90)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(B1)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(91)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(B2)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(92)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(B3)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(93)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(B4)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(94)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(B5)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(95)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(x91)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(x81)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(B6)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(96)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(B7)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(97)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(B8)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(98)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(B9)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(99)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(BA)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(x9A)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(BB)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(x9B)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(BC)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(x9C)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(BD)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(x9D)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(BE)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(x9E)),"�",$s);
    $s=str_replace(chr(hexdec(D0)).chr(hexdec(BF)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(x9F)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(80)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(A0)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(81)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(A1)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(82)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(A2)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(83)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(A3)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(84)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(A4)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(85)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(A5)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(86)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(A6)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(87)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(A7)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(88)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(A8)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(89)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(A9)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(x8A)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(AA)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(x8B)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(AB)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(x8C)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(AC)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(x8D)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(AD)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(x8E)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(AE)),"�",$s);
    $s=str_replace(chr(hexdec(D1)).chr(hexdec(x8F)),"�",$s);  $s=str_replace(chr(hexdec(D0)).chr(hexdec(AF)),"�",$s);
return $s;
}

// ������ �������
//1,2..k1,k2,k3,k4..n-1,n
//  arg1 - ���. �������� 
//  arg2 - ���-�� �������
//  arg2 - ���-�� k
function doarray1($arg1,$arg2,$arg3)
{
$y=array();
    if($arg2<=($arg3+4)) // ��� �����
      {
      for($j=0;$j<$arg2;$j++)
        $y[$j]=$j+1;
      }
    else
      {
      if($arg1<=$arg3+2)  // 11121....11111
         {
         for($j=0;$j<($arg3+2);$j++)
           $y[$j]=$j+1;
         $y[$j]="...";$j++;  
         $y[$j]=$arg2-1;$j++;  
         $y[$j]=$arg2;  
         }
      elseif($arg1>($arg2-$arg3-2))  //  1111.....11211
         {
         $y[0]=1;  
         $y[1]=2;  
         $y[2]="...";  
         for($j=3;$j<($arg3+5);$j++)
           $y[$j]=$arg2-$arg3+$j-4;
         }
      else  // 11..112111...11
         {
         $y[0]=1;  
         $y[1]=2;  
         $y[2]="...";  
         for($j=3;$j<=($arg3+3);$j++)
           $y[$j]=$arg1+$j-4;
         $y[$j]="...";$j++;  
         $y[$j]=$arg2-1;$j++;  
         $y[$j]=$arg2;  
         }
      }
    return $y;
}
// ������ �� ; \r \n
function filter1($arg1)
  {

  $arg1=str_replace("\r","",$arg1);
  $arg1=str_replace("\n","",$arg1);
  $arg1=str_replace(";","",$arg1);
  $arg1=ltrim(utftowin($arg1));

  return $arg1;
  }

?>
