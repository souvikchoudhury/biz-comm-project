<style>
.body{
  margin: 0px;
}
.outer{
  display: inline-block;
  position: relative;
  height: auto;
  width: 100%;
  /*border: 1px solid black;*/
}

.box{
  margin: 1%;
  display: inline-block;
  position: relative;
  height: auto;
  width: 90%;
/*  border: 1px solid black;*/
  padding: 2%;
}

.list{
  padding: 1%;
  float: left;
  border: 1px solid black;
  display: inline-block;
  position: relative;
  overflow: scroll;
  height: 500px;
  width: 30%;
  font-size: 20px;
}

.inner{
  margin-left: 10px;
  float: left;
  /*border: 1px solid black;*/
  display: inline-block;
  position: relative;
  padding: 1%;
  height: 500px;
	}
  a{
    text-decoration: none;
    font-size: 20px;
  }
#pr{
  display: inline-grid;
}
#cb{
  height: 30px;
  width: 30px;
  display: inline-block;
  float: right;
}
#sb{
  width: 100%;
  height: 10%;
  font-size: 20px;
}
#sub{
  width:400px;
  height: 50px;
  font-size: 20px;
  margin-left: 20%;
}

</style>
<body>
  <div class="outer">

  <div class="box">
    <form action="test1.php" method="post">
    <div class="list">
	<?php
  	require('mysqli_conn.php');
	$query="SELECT * FROM user_demo";
		if($query_run = mysqli_query($dbcon,$query))
			{
			//  echo "y";

  				while($queryrow = mysqli_fetch_assoc($query_run))
  			{
    				  $id = $queryrow['user_id'];
     				 $username = $queryrow['username'];
      				$email = $queryrow['email'];
    				//echo 'id of '.$username.' is '.$id.' and has email id '.$email.'</br>';
    				echo'<p id="pr"><a href="#" id="em">'.$username.'</a>     '.$email.'<input type="checkbox" id="cb" name="check_list[]" value='.$email.'></p></br><hr>';
 			 }
			}else {
 				 {
 					 echo "n";
				}
					}
 	?>
 	</div>
 	<div class="inner">
  <input type="text" name="subject" placeholder="Subject..." id="sb" maxlength="50" required/></br></br></br>
  <textarea type="textarea" name="message" placeholder="Enter your message here" rows="20" cols="100" maxlength="200" required></textarea></br></br></br>
	 <input type="submit" name="submit" value="Submit" id="sub"/>
	 </div>
 </form>
 </div>
 </div>
</body>
