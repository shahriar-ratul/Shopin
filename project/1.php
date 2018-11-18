
<html>
    <head>
        <title>student</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <div class="wrapper"> 
          <header>
                <nav>
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="1.php">Results</a></li>
                        <li><a href="2.php">Third Page</a></li>
                        <li><a href="3.php">Fourth Page</a></li>
                    </ul>
                </nav>    
            </header>
		<?php
				session_start();
				$server='localhost';
				$username='root';
				$password='';
				$db='dbms1';
				$conn=new mysqli($server,$username,$password,$db);
				$sql1 = "SELECT * FROM result";

				$data=$conn->query($sql1);
					
						
				if(!$data) {
						die("database query failed");
				}
					echo "<table width=600px border=2 cellpadding=1 cellspacing=1 float=center>
						<tr>
							<td>Subject</td>
							<td>grade</td>
						</tr>
					";
				if($data->num_rows >0){
					while($row=$data->fetch_assoc())
					{
						if ($row['s_id']==$_SESSION['id']){
							
						echo"<tr>
								<td>".$row['sub']."</td>
								<td>".$row['grade']."</td>
							</tr>
							</table>";
						}
					}
				}
									
		?>

            <div class="row">
                
            </div>
            
            
        </div>
        
    </body>
</html>
