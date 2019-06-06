<?php
session_start();

include 'connect.php';
echo $_SESSION['applicationNo'];
$query = "SELECT * FROM `state` WHERE `applicationNo` = '".$_SESSION['applicationNo']."'";
$result = mysqli_query($link,$query);
$row=mysqli_fetch_array($result);
$status = $row['control'];
echo $status;
$output ="";
switch ($status) {
    case "0":
        $output .='<tr>
                <td>Personal Details</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#personaldetails">Launch demo modal</button>
                </td>
                <td>Incomplete</td>
            </tr>

            <tr>
                <td>Contact Details</td>
                <td><button type="button" class="btn btn-primary disabled">Fill</button></td>
                <td>Incomplete</td>
            </tr>

            <tr>
                <td>Educational Details</td>
                <td><button type="button" class="btn btn-primary disabled">Fill</button></td>
                <td>Incomplete</td>
            </tr>

            <tr>
                <td>Documents Upload</td>
                <td><button type="button" class="btn btn-primary disabled">Fill</button></td>
                <td>Incomplete</td>
            </tr>';

        echo $output;
        break;
    case "1":
        $output .='<tr>
                <td>Personal Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>complete</td>
            </tr>

            <tr>
                <td>Contact Details</td>
                <td><td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactdetails">Launch demo modal</button></td>
                <td>Incomplete</td>
            </tr>

            <tr>
                <td>Educational Details</td>
                <td><button type="button" class="btn btn-primary disabled">Fill</button></td>
                <td>Incomplete</td>
            </tr>

            <tr>
                <td>Documents Upload</td>
                <td><button type="button" class="btn btn-primary disabled">Fill</button></td>
                <td>Incomplete</td>
            </tr>';
        echo $output;
        break;
    case "2":
        $output .='<tr>
                <td>Personal Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>complete</td>
            </tr>

            <tr>
                <td>Contact Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>complete</td>
            </tr>

            <tr>
                <td>Educational Details</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#educationdetails">Launch demo modal</button></td>
                <td>Incomplete</td>
            </tr>

            <tr>
                <td>Documents Upload</td>
                <td><button type="button" class="btn btn-primary disabled">Fill</button></td>
                <td>Incomplete</td>
            </tr>';
        echo $output;
        break;
    case "3":
        $output .= '<tr>
                <td>Personal Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>complete</td>
            </tr>

            <tr>
                <td>Contact Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>complete</td>
            </tr>

            <tr>
                <td>Educational Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>complete</td>
            </tr>

            <tr>
                <td>Documents Upload</td>
                <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#educationdetails">Launch demo modal</button></td>
                <td>Incomplete</td>
            </tr>';
        echo $output;
        break;
    case "4":
        $output .= '<tr>
                <td>Personal Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>complete</td>
            </tr>

            <tr>
                <td>Contact Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>complete</td>
            </tr>

            <tr>
                <td>Educational Details</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>complete</td>
            </tr>

            <tr>
                <td>Documents Upload</td>
                <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-primary">Modify</button>
                </td>
                <td>complete</td>
            </tr>';
        echo $output;
        break;
    
}




?>