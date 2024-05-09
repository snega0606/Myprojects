<style>
    .dbresult,
    .dbresult td,
    .dbresult th {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 8px;
    }

    .dbresult {
        width: 1000px;
        margin: auto;
    }

    .dbresult tr:nth-child(odd) {
        background-color: #b2d0d6;
    }

    .dbresult tr:nth-child(even) {
        background-color: lightcyan;
    }

    .fcc-btn {
        background-color: green;
        color: white;
        background: green;
        color: #fff;
        padding: 9px 20px;
        margin: 40px;
        width: 65%;
        border-radius: 200px;
        margin-top: 10px;
        cursor: pointer;
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1><strong>Projects</strong></h1>
        <a href="profile.php" class="fcc-btn">Back</a>
    </center><br>

    <?php
    $link = mysqli_connect('localhost', 'root', '', 'company');
    if (!$link) {
        die('Connection error' . mysqli_connect_error());
    }

    $query = "SELECT rollno,name,department,incharge,year,title,language,description,file FROM records";

    $result = mysqli_query($link, $query);
    $numrow = mysqli_num_rows($result);

    if ($numrow > 0) {
        echo '<table class="dbresult">';
        echo '<tr>';
        echo '<th>Rollno</th>';
        echo '<th>Name</th>';
        echo '<th>Department</th>';
        echo '<th>Incharge</th>';
        echo '<th>Year</th>';
        echo '<th>Title</th>';
        echo '<th>Language</th>';
        echo '<th>Documentaion</th>';
        echo '<th>Operations</th>';
        echo '</tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            $file_path = "upload/" . $row['description'];

            $rollno = $row['rollno'];
            echo '<tr>';
            echo '<td>' . $row['rollno'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['department'] . '</td>';
            echo '<td>' . $row['incharge'] . '</td>';
            echo '<td>' . $row['year'] . '</td>';
            echo '<td>' . $row['title'] . '</td>';
            echo '<td>' . $row['language'] . '</td>';
            echo '<td>' . $row['file'] . '</td>';
            echo '<td>';
            echo '<a href="delete.php?rollno=' . $rollno . '"><button>Delete</button></a>';
            echo '<a href="download.php?rollno=' . $rollno . '"><button>Download</button></a>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Records Not Found';
    }
    ?>

</body>

</html>
