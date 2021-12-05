<?php
    $name = "Search Results";
    $heading = "<h1>Search Results</h1>";
    include('includes/header.php');
    include ('includes/disclaimer.php');
    include ('includes/jumbotron.php');

    require("/home/rottenco/db-creds.php");
    $cnxn = mysqli_connect($host, $user, $password, $database)
    or die ("Connected to Database!");
?>
<p class="row justify-content-center">
    <input id="homeButton" type=button onClick="parent.location='index.php'"
           value='Go Back to FAQ Page'>
</p>

<!--keywords-->

        <?php
        $search = $_GET['search'];
        echo "<h2>You searched:</h2>";
        echo "<h3><text-align: center>'$search'</h3>";
        ?>
<table id="results" class="display" style="width:80%">
        <thead>
        <tr>
            <th>Question</th>
            <th>Answer</th>
        </tr>
        </thead>
        <tbody>


        <?php
        $sql = "SELECT * FROM faq WHERE question LIKE '%$search%' OR answer LIKE '%$search%'";
        $result = mysqli_query($cnxn, $sql);
        foreach($result as $row) {
            $question = $row['question'];
            $answer = $row['answer'];
            echo "
            <tr>
                <td>$question</td>
                <td>$answer</td>
            <tr>";
        }
        ?>
        </tbody>
    </table>



            <!-- Start of Footer -->
            <!-- Footer -->
<?php
include('includes/footer.php');
?>

</body>
</html>