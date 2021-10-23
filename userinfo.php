<?php
	if(isset($_POST['signup'])){
       
    $name = filter_input(INPUT_POST, 'name');
    $address = filter_input(INPUT_POST, 'address');
    $phone = filter_input(INPUT_POST, 'phone');
	$email = filter_input(INPUT_POST, 'email');
	$buy = filter_input(INPUT_POST, 'buy');
	
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "plants";
			// Create connection
			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
			if (mysqli_connect_error()){
				die('Connect Error ('. mysqli_connect_errno() .') '
				. mysqli_connect_error());
			}
			else{
      
                        $sql = "INSERT INTO userinfo (name, address, phone, email, buy)
                        values ('$name','$address','$phone','$email','$buy')";
                        if ($conn->query($sql)){
                            echo "<script>
                                alert('Submitted successfully');
                                window.location.href='index.php';
                            </script>";
                        }
                        else{
                            echo "Error: ". $sql ."
                            ". $conn->error;
                        }
			$conn->close();
			}
		}
		
?>

<div class="box">


  <h2>REGISTER</h2>
  <link rel="stylesheet" href="css/common_reg.css">
  <div>
	
	<form method="post" action="">
			 
            <div class="inputBox" >
                <input type="text" name="name" required onkeyup="this.setAttribute('value', this.value);" value="">
                <label>Full name </label>
            </div>
            <div class="inputBox" >
                    <input type="userid" name="address" required onkeyup="this.setAttribute('value', this.value);" value="">
                    <label>Address </label>
            </div>
            <div class="inputBox" >
                    <input type="userid" name="phone" required onkeyup="this.setAttribute('value', this.value);" value="">
                    <label>Phone </label>
            </div>
            <div class="inputBox" >
                    <input type="userid" name="email" required onkeyup="this.setAttribute('value', this.value);" value="">
                    <label>Email </label>
            </div>
            

            <label for="Semester">Buy/Sell</label>
            <select name="buy" id="semester">
                <option value="Buy">Buy</option>
                <option value="Sell">Sell</option>
                
            </select>
        
            
            <div class="inp" align="center" style="padding-right: 0px">
                <input type="submit" name="signup" value="SUBMIT" align="center" >
            </div>
            
			
			
		</div>
	</form>
</div>

<style>
    
body {
  margin: 0;
  padding:0;
  background-color: #000000;
  background-size: cover;
  color: #fff;
  font-family: sans-serif;
}

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 25rem;
  padding: 2.5rem;
  box-sizing: border-box;
  background: rgba(159, 169, 172, 0.6);
  border-radius: 0.625rem;
}


.box h2 {
  margin: 0 0 1.875rem;;
  padding: bottom ;
  color: rgb(253, 253, 253);
  text-align: center ;
}

.box .inputBox {
  position: relative;
}

.box .inputBox input {
  width: 100%;
  padding: 0.6rem 0;
  font-size: 1rem;
  /* color: rgb(46, 45, 45); */
  letter-spacing: 0.062rem;
  margin-bottom: 1.875rem;
  border: none;
  border-bottom: 0.065rem solid #fff;
  outline: none;
  background: transparent;
}

.box .inputBox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.9rem 0;
  font-size: 1rem;
  /* color: rgb(8, 8, 8); */
  pointer-events: none;
  transition: 0.5s;
}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label,
.box .inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 0;
  color: #fff;
  font-size: 0.75rem;
}

a:link, a:visited {
  background-color: #000000;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}


</style>