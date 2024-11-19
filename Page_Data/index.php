<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Page.css">
    <title>جدول الأسئلة والإجابات</title>
</head>

<body>
    <h1>إحـصـائـيـة الاسـتـبـيـان</h1>
    <div class="main">
        <table>
            <thead>
                <tr>
                    <th>الأسئلة</th>
                    <!-- <th>الاجمالي</th> -->
                    <th>غير موافق بشدة</th>
                    <th>غير موافق </th>
                    <th>موافق إلى حدٍ ما</th>
                    <th>موافق</th>
                    <th>موافق بشدة</th>
                    <!-- <th>الأسئلة</th> -->
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td colspan="6"></td>
                </tr>
                <tr>
                    <td colspan="6" class="td">المجال الاول : القيادة الاخلاقيه</td>
                </tr>
                <?php
                    include('../connect.php');
                    for($i=1;$i<=33;$i++){
                        $s1=mysqli_query($con,"select count(q$i) from data where q$i=1");
                        $s2=mysqli_query($con,"select count(q$i) from data where q$i=2");
                        $s3=mysqli_query($con,"select count(q$i) from data where q$i=3");
                        $s4=mysqli_query($con,"select count(q$i) from data where q$i=4");
                        $s5=mysqli_query($con,"select count(q$i) from data where q$i=5");
                        $m1_1=mysqli_fetch_array($s1);
                        $m1_2=mysqli_fetch_array($s2);
                        $m1_3=mysqli_fetch_array($s3);
                        $m1_4=mysqli_fetch_array($s4);
                        $m1_5=mysqli_fetch_array($s5);
                        echo "<tr>
                        <td style='background-color: #f2f2f2;'>Q $i  </td>
                        <td>$m1_1[0]</td>
                        <td>$m1_2[0]</td>
                        <td>$m1_3[0]</td>
                        <td>$m1_4[0]</td>
                        <td>$m1_5[0]</td></tr>";
                    }

                ?>
                <!-- ---------------------------------------------------- -->
                <tr>
                    <td colspan="6"></td>
                </tr>
                <tr>
                    <td colspan="6" class="td">المجال الثاني : الولاء التنظيمي</td>
                </tr>
                <?php
                    $i2=33;
                    for($i=1;$i<=20;$i++){
                        $i2=$i2+1; 
                        $s1=mysqli_query($con,"select count(q$i2) from data where q$i2=1");
                        $s2=mysqli_query($con,"select count(q$i2) from data where q$i2=2");
                        $s3=mysqli_query($con,"select count(q$i2) from data where q$i2=3");
                        $s4=mysqli_query($con,"select count(q$i2) from data where q$i2=4");
                        $s5=mysqli_query($con,"select count(q$i2) from data where q$i2=5");
                        $m1_1=mysqli_fetch_array($s1);
                        $m1_2=mysqli_fetch_array($s2);
                        $m1_3=mysqli_fetch_array($s3);
                        $m1_4=mysqli_fetch_array($s4);
                        $m1_5=mysqli_fetch_array($s5);
                        echo "<tr>
                        <td style='background-color: #f2f2f2;'>Q $i  </td>
                        <td>$m1_1[0]</td>
                        <td>$m1_2[0]</td>
                        <td>$m1_3[0]</td>
                        <td>$m1_4[0]</td>
                        <td>$m1_5[0]</td></tr>";
                    }


                ?>
 
                
                <!-- ---------------------------------------------------- -->
                <tr>
                    <td colspan="6"></td>
                </tr>
                <tr>
                    <td colspan="6" class="td">المجال الثالث : الاداء الوظيفي للموظفين</td>
                </tr>
                <?php
                    $i2=33;
                    for($i=1;$i<=23;$i++){
                        $i2=$i2+1;
                        $s1=mysqli_query($con,"select count(q$i2) from data where q$i2=1");
                        $s2=mysqli_query($con,"select count(q$i2) from data where q$i2=2");
                        $s3=mysqli_query($con,"select count(q$i2) from data where q$i2=3");
                        $s4=mysqli_query($con,"select count(q$i2) from data where q$i2=4");
                        $s5=mysqli_query($con,"select count(q$i2) from data where q$i2=5");
                        $m1_1=mysqli_fetch_array($s1);
                        $m1_2=mysqli_fetch_array($s2);
                        $m1_3=mysqli_fetch_array($s3);
                        $m1_4=mysqli_fetch_array($s4);
                        $m1_5=mysqli_fetch_array($s5);
                        echo "<tr>
                        <td style='background-color: #f2f2f2;'>Q $i  </td>
                        <td>$m1_1[0]</td>
                        <td>$m1_2[0]</td>
                        <td>$m1_3[0]</td>
                        <td>$m1_4[0]</td>
                        <td>$m1_5[0]</td></tr>";
                    }


                ?>
 
                

            </tbody>
        </table>
    </div>
    <footer>
        <h2>Copyright © 2024 Helmi&Ayman All rights reserved.</h2>
        <button id="button"></button>
        <script>
            let button = document.getElementById('button');
            button.onclick = function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        </script>
    </footer>
</body>

</html>