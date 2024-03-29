<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>

    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .nav {
            background-color: rgb(25, 27, 27);
        }

        body {
            background: url('image/Rect_Light.svg');
            height: 100vh;
        }

        .section_heading {
            text-align: center;
            padding-top: 14px;
            color: white;
        }

        .section_heading span:nth-child(2) {
            display: block;
            margin: 6px auto;
            width: 70px;
            height: 4px;
            border-radius: 10px;
            background: rgba(102, 51, 153, 0.637);
        }

        .heading {
            text-align: center;
            color: white;
            padding: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
        }

        .table {
            width: 80%;
            margin: 0px auto;
            position: absolute;
            font-size: 18px;
            border: 1px black;
            left: 9.8%;
            top: 20%;
            border-collapse: collapse;
        }

        thead {
            text-align: center;
            opacity: 1;
            background-color: black;
        }

        td {
            background-color: white;
            font-weight: bold;
            border: 1px;
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-weight: 500;
        }

        tr {
            background-color: white;
            opacity: 0.6;
        }

        tr:hover {
            background-color: white;
            color: black;
            opacity: 1;
        }

        button {
            border: none;
            background: #00FFFF;
            border-radius: 15px;
            width: 150px;
            font-size: 90%;
            transition-duration: 0.4s;
            cursor: pointer;
        }
    </style>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bank of Sparks</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-mihir ">
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link active" aria-current="page" href="#">View customers</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="history.php">Transaction History</a>
                    </li>
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="#">Contact Us</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <?php
    include 'config.php';
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn,$sql);
    ?>



    <div class="table-responsive-sm">
        <table class="table table-hover table-sm table-striped table-condensed table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer NAME</th>
                    <th>Account Number</th>
                    <th>Phone Number</th>
                    <th>BALANCE(in Rs.)</th>
                    <th>TRANSFER MONEY</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($rows=mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td class="py-2">
                        <?php echo $rows['Id'] ?>
                    </td>
                    <td class="py-2">
                        <?php echo $rows['Name']?>
                    </td>
                    <td class="py-2">
                        <?php echo $rows['Account_no']?>
                    </td>
                    <td class="py-2">
                        <?php echo $rows['Phone_no']?>
                    </td>
                    <td class="py-2">
                        <?php echo $rows['Balance']?>
                    </td>
                    <td class="text-center"><a href="transfer.php?Account_no= <?php echo $rows['Account_no'] ;?>">
                            <button type="button" class="button">Transfer</button></a></td>
                </tr>
                <?php
                }
            ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj "
        crossorigin="anonymous "></script>

    

</body>

</html>