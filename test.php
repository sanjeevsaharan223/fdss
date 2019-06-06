<?php

session_start();
if(isset($_SESSION['login']))
{

    include 'main2.php';

    include 'connect.php';
    echo $_SESSION['applicationNo'];
    $query = "SELECT * FROM `state` WHERE `applicationNo` = '".$_SESSION['applicationNo']."'";
    $result = mysqli_query($link,$query);
    $row=mysqli_fetch_array($result);
    echo $row['control'];

}

else{
    header('Location:login.php');
}





?>
<div class="container">
	<div class="card">
    <div class="card-header">Part- 1</div>

    <div class="card-body">
        <p class="mb-0">
            Fill all details step by step
        </p>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Progress</th>
                <th>Action</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            
                       <tr>
                <td>Personal Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>Incomplete</td>
            </tr>

            <tr>
                <td>Contact Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>Incomplete</td>
            </tr>

            <tr>
                <td>Educational Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>Incomplete</td>
            </tr>

            <tr>
                <td>Documents Upload</td>
                <td><button type="button" class="btn btn-primary disabled">Fill</button></td>
                <td>Incomplete</td>
            </tr>

        </tbody>
    </table>

    <div class="card-footer">
        Card Footer
    </div>
</div>

</div>