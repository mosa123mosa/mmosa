
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css"rel="stylesheet">
    <link href="link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">"
    <style>
        body{
            background-color: whitesmoke;
            font-family: 'Tajawal', sans-serif; 
        }
        #mother{
            width: 100 ;
            font-size: 20px;
        }
        main{
           float: left;
           border: 1px solid  gray; 
           padding: 5px ;
           
        }
        input{
            padding: 2px;
            border: 2px solid black;
            text-align: center;
            font-size: 10px ;
            font-family: 'Tajawal', sans-serif;
        }
        aside{
            text-align: center;
            width: 300;
            float: right;
            border: 1px solid black ;
            padding: 10px;
            font-size: 20px;
            background-color: silver;
            color: white;

        }
        #tbl{
            width: 890px;
            font-size: 20 px;

        }
        #tbl th{
            background-color: silver;
            color: black;
            font-size: 20px;
            padding: 10px;

        }
        aside button{
            width: 190px;
            padding: 8px;
            margin-top: 17px;
            font-size: 17px;
            font-family: 'Tajawal', sans-serif;
            font-weight: bold;
        }
    </style>
</head>
<body dir='rtl'>
    <?php
    #الأتصال مع قاعدة البيانات 
    $host='localhost';
    $user='root';
    $pass='';
    $db='student';
   
    # button variable  --
    $id='';
    $name='';
    $address='';
    if(isset($_POST['id'])){
        $id=$_POST['id'];
    }
    if(isset($_POST['name'])){
        $name =$_POST['name'] ; 
    }
    if(isset($_POST['address'])){
        $address=$_POST['address'];
    }
    
    ?>
 <div id='mother'>
 <form method='POST'>
  <!--  لوحة التحكم -->   
<aside>
<div  id='div'>
<img src='https://www.ptcdb.edu.ps/ar/wp-content/uploads/2020/08/%D8%AA%D9%86%D8%B2%D9%8A%D9%84.png' alt='كلية'width="150">
<h3> لوحة المدير</h3>
<label>رقم الطالب:</label>
<input type='text' name='id' id='id'><br>
<label>أسم الطالب:</label>
<input type='taxt' name='name' id='name'><br>
<label>عنوان الطالب:</label>
<input type='text' name='address' id='address'><br>
<button name='add'> أضافة طالب</button>
<button name='del'> حذف </button>

</div>
</aside>
<!--   عرض بيانات الطلاب  -->
<main>
<table id='tbl'>
<tr>
   <th>الرقم التسلسلى</th>
   <th>اسم الطالب</th>
   <th>عنوان الطالب</th>
</tr>

</table>
</main>
 </form>    
 </div>   
</body>
</html>