
<?php
// k?t n?i csdl
$connect=mysqli_connect('localhost','root','','benhvien'); //or die ('Không th? k?t n?i d?n database');
if (!$connect)
  {
  echo "K?t n?i không thành công";
  }
else
{
    mysqli_set_charset($connect,'utf8');
}
?>