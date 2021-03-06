<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="bankstyle.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position:fixed;z-index:1000;width:100%;top:0">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand" style="margin-left:31vw"><i class="fa fa-bank"></i> IndiaBank</a>
                
            <div class="navbar-nav" style="margin-right:25vw">
                    <a href="transfer.php" class="nav-item nav-link" style="color:white"><i class="fa fa-inr" style="margin-right:1vw"></i>Transfer</a>
                    <a href="transaction.php" class="nav-item nav-link" style="margin-left:5vw;color:white"><i class="fa fa-credit-card" style="margin-right:1vw"></i>Transactions</a>
            </div>
        </div>
    </nav> 
    <div style="height:900px;overflow-y:scroll;overflow-x:hidden">
    <h2 style="text-align:center;margin-bottom:8vh;color:black;">Transactions history</h2>
    <div class="trc">
      <table>
        <tr>
          <th>ID</th>
          <th>Sender</th>
          <th>Receiver</th>
          <th>Amount</th>
        </tr>
        <?php
	$conn = new mysqli('localhost','root','','banktest');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "SELECT id,Sender,Receiver,Amount FROM ledger";
    $result = $conn->query($sql);

    if($result-> num_rows > 0){
      $i = 1;
      while(($row = $result-> fetch_assoc())){
      if($row["Sender"]!=NULL){
      echo"<tr>
           <td>".$i."</td>
           <td>".$row["Sender"]."</td>
           <td>".$row["Receiver"]."</td>
           <td>".$row["Amount"]."</td>
           </tr>";}
           $i++;}
    }
    $conn-> query($sql);
		$conn->close();
	}
?>
      </table>
</div>
</div>
    <div style="text-align:center;margin-top:10px"><a href="transfer.php"><button> Transfer </button></a></div>
    <div class="footer1">
   
   <div class="row1">
       <ul>
           <a href="https://www.facebook.com/aditya.chari.357/"><i class="fa fa-facebook"></i></a>
           <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
           <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><i class="fa fa-youtube"></i></a>
           <a href="https://twitter.com/elonmusk/with_replies"><i class="fa fa-twitter"></i></a>
       </ul>
       </div>
   
   <div class="row1">
   <ul>
   <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Contact us</a></li>
   <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Our Services</a></li>
   <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Privacy Policy</a></li>
   <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Terms & Conditions</a></li>
   <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Career</a></li>
   </ul>
   </div>
   
   <div class="row1">
   <center style="color:grey">INDIA BANK Copyright ?? 2022 INDIABANK - All rights reserved ||</center>
   </div>
</div>
</div>
  </body>
</html>
