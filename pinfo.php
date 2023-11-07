<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

// $name = "не определено";
// $age = "не определено";

// if (isset($_POST["name"])) {
//     //$name = htmlentities($_POST["name"]);
//     $name = strip_tags($_POST["name"]);
// }
// if (isset($_POST["age"])) {
//     $age = htmlentities($_POST["age"]);
// }


// echo "Имя: $name <br> Age: $age";


// ********************************************** 


// if (isset($_POST["users"])) {
//     $users = $_POST["users"];

//     echo "В массивe " . count($users) . " элементов <br>";
//     foreach ($users as $user) {
//         echo "$user<br>";
//     }



//     // $secondElement = $_POST["users"]["second"];
//     // echo "$secondElement";
// }


// ********************************************** 

// if (isset($_POST["language"])) {
//     $language = $_POST["language"];
//     foreach ($language as $item) {
//         echo "$item<br>";
//     }
// }


// ********************************************** 


if (isset($_POST["course"])) {
    $course = $_POST["course"];
    echo $course;
}

?>

<body>

    <!-- <form method="POST">
        <p>Name: <input type="text" name="name" /></p>
        <p>Age: <input type="number" name="age" /></p>
        <input type="submit" value="Отправить" />
    </form> -->


    <!-- ********************************************** -->


    <!-- <form method="POST">
        <p>User1: <input type="text" name="users[]" /></p>
        <p>User2: <input type="text" name="users[]" /></p>
        <p>User3: <input type="text" name="users[]" /></p>
         <p>User4: <input type="text" name="users[second]" /></p> -->
    <!-- <input type="submit" value="Отправить" />
    </form>  -->



    <!-- ********************************************** -->

    <!-- 
    <form method="POST">
        <p>ASP.NET <input type="checkbox" name="language[]" value="ASP.NET" /></p>
        <p>Node.js <input type="checkbox" name="language[]" value="Node.js" /></p>
        <p>PHP <input type="checkbox" name="language[]" value="PHP" /></p>
        <input type="submit" value="Отправить" />
    </form> -->


    <!-- ********************************************** -->

    <form method="POST">
        <select name="course" size="1">
            <option value="ASP.NET">ASP.NET</option>
            <option value="PHP">PHP</option>
            <option value="C#">C#</option>
        </select>

        <input type="submit" value="Отправить" />
    </form>

</body>

</html>