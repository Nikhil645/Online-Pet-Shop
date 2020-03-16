<?php
    $SName = $_POST['Name'];
    $Dropdate = $_POST['Dropdate'];
    $Pickupdate = $_POST['Pickupdate'];
    $Petcategory = $_POST['Petcategory'];
    $Breed = $_POST['Breed'];
    $Petname = $_POST['Petname'];
    $Petage = $_POST['Petage'];
    $Description = $_POST['Description'];
    $Contactno = $_POST['Contactno'];
    $Address = $_POST['Address'];

    $conn = new mysqli('localhost','root','','Petshop');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into Petcare(Name, Dropdate, Pickupdate, Petcategory, Breed, Petname, Petage, Description, Contactno, Address)
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssisss",$SName, $Dropdate, $Pickupdate, $Petcategory, $Breed, $Petname, $Petage, $Description, $Contactno, $Address);
        $stmt->execute();
        ?>
        <script>
            alert("Registered Successfully")
            window.location.replace('home.html')
        </script>
        <?php
            // $to = "nikhil.ingale99@gmail.com";
            // $subject = "New customer for Petcare-Service";
            // $message = "New Customer applied for Pet-care Service \n Customer_name: " .$SName;

            // mail($to,$subject,$message);
            include "classes/class.phpmailer.php"; // include the class name
            $mail = new PHPMailer(); // create a new object
            $mail->IsSMTP();         // enable SMTP
            $mail->SMTPDebug = 1;    // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true;  // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587  465
            $mail->IsHTML(true);
            $mail->Username = "nikhil.ingale99@gmail.com";
            $mail->Password = "gunner645445";
            $mail->SetFrom("nikhil.ingale99@@gmail.com");
            $mail->Subject = "New Customer applied for Pet-care Service ";
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $body = "New Customer applied for Pet-care Service ";
            
            $mail->Body = $body;
            
            $mail->AddAddress("kadampiyush662@gmail.com") ;
                                                        
                    
                       if(!$mail->Send())
                         {
                            echo "Mailer Error: " . $mail->ErrorInfo;
                         }
                         else
                        {
                            echo"<h1><center>Mail Sent </h1></center>"; 
                        }

            $stmt->close();
            $conn->close();
    }
?>