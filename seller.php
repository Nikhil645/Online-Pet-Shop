<?php
    $SName = $_POST['SName'];
    $Contactno = $_POST['Contactno'];
    $SPrice = $_POST['Price'];
    $Petcategory = $_POST['Petcategory'];
    $Breed = $_POST['Breed'];
    $Petname = $_POST['Petname'];
    $Petage = $_POST['Petage'];
    $Description = $_POST['Description'];
    $Address = '';
    if(isset($_POST['Address'])){
        $Address .= $_POST['Address'];
    }
    if(isset($_POST['Address1'])){
        //add a space before
        $Address .= ' ' .$_POST['Address1'];
    }
    if(isset($_POST['Address2'])){
        //add a space before
        $Address .= ' ' . $_POST['Address2'];
    }
    if(isset($_POST['Address3'])){
        //add a space before
        $Address .= ' ' . $_POST['Address3'];
    }
    if(isset($_POST['Address4'])){
        //add a space before
        $Address .= ' ' . $_POST['Address4'];
    }

    $conn = new mysqli('localhost','root','','Petshop');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into Sellers(SName, Contactno, Price, Petcategory, Breed, Petname, Petage, Description, Address)
            values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssiss",$SName, $Contactno, $SPrice, $Petcategory, $Breed, $Petname, $Petage, $Description, $Address);
        $stmt->execute();
        ?>
        <script>
            alert("Registered Successfully")
            window.location.replace('home.html')
        </script>
        <?php
            $stmt->close();
            $conn->close();
    }
?>