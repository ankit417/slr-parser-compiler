
<?php
$db = 'compiler';
$con=mysqli_connect("localhost","root","","$db");


?>

<?php
class stack
{
	public $item = 15;
	public $size = array();
	public $point = 0;

	public function push($data)
	{
		if($this -> point>=$this-> item)
		{
			echo "stack overflow";
		}
		else{
			$this->size[$this->point] = $data;
			$this->point++;
		}
	}
	public function pop()
	{
		if(empty($this->size))
		{
			echo "empty can't be popped";
		}
		else{
			array_pop($this->size);
		}
	}

}






$str = "0qsaasdab$";
$arr =str_split($str);
$length= strlen($str);
$newst = new stack();
for($i=0;$i<$length;$i++)
{
	${"value" . $i} = $arr[$i];
	echo ${"value" . $i};
	
	$newst -> push("${"value" . $i}");
	
	
	echo "<br/>";
}
echo "VALUE1=" .${"value" . 0};
echo "VALUE2=" .${"value" . 1};
echo "VALUE3=" .${"value" . 2};
echo "VALUE4=" .${"value" . 3};
echo "VALUE5=" .${"value" . 4};
echo "VALUE6=" .${"value" . 5};

	print_r($newst ->size);
	echo "<br/>";
	
	$stack= new stack();
	$stack -> push(${"value" . 0});
	$stack -> push(${"value" . 1});

    $top1 = $stack->size[0];
    $top2 = $stack->size[1];
    echo $top1;
    echo $top2;


    
	print_r($stack->size);
	echo "<br/>";


		$query = "SELECT * FROM ptable WHERE state='$top1' AND production='$top2'";
		$query1=mysqli_query($con,$query);
		$row=mysqli_fetch_array($query1,MYSQLI_ASSOC);
		$action =$row['action'];
		if($action=='NULL')
		{
			echo "ERROR";
			exit();
		}
		else{
			if($action!=='S2')
			{
				echo "ERROR";
			}
			else
			{
				$stack -> push("2");
				$top3 = $stack->size[2];



			}
			
			
			
		}
		
print_r($stack->size);
echo "<br/>";
$query2 = "SELECT * FROM ptable WHERE state='$top3' AND production='${"value" . 2}'";
$query3 = mysqli_query($con, $query2);
$row1=mysqli_fetch_array($query3,MYSQLI_ASSOC);
$action1 = $row1['action'];
if($action1=='NULL')
	{
			echo "ERROR";
			
			exit();
		}
		else{
			if($action1=='S4')
			{
				$stack ->push("${"value" . 2}");
				$stack -> push("4");
				print_r($stack->size);
	echo "<br/>";
				
				if($action1)
				{
					

					$top4 = $stack->size[4];
					$query4 = "SELECT * FROM ptable WHERE state='$top4' AND production='${"value" . 3}'";
					$query5 = mysqli_query($con, $query4);
					$row2=mysqli_fetch_array($query5,MYSQLI_ASSOC);
					$action2 = $row2['action'];
					if($action2=='NULL')
					{
						echo "ERROR";
						exit();
					}
					else{
						$stack -> pop();
						$stack -> pop();
						$stack -> push("A");
						$top5 = $stack->size[5];
						
					print_r($stack->size);	
					echo "<br/>";
						$query6 = "SELECT * FROM ptable WHERE state='$top3' AND production='$top5'";
						$query7 = mysqli_query($con, $query6);
						$row3=mysqli_fetch_array($query7,MYSQLI_ASSOC);
						$action3 = $row3['action'];
						if($action3=='NULL')
						{
							echo " ERROR";
							exit();
							
						}
						else{
							$stack -> push("3");
print_r($stack->size);
echo "<br/>";
						$query8 = "SELECT * FROM ptable WHERE state='3' AND production='${"value" . 3}'";
						$query9 = mysqli_query($con, $query8);
						$row4=mysqli_fetch_array($query9,MYSQLI_ASSOC);
						$action4 = $row4['action'];
						if($action4=='NULL')
						{
							echo "ERROR";
						}
						else if($action4=='S7')
						{
							$stack -> push("${"value" . 3}");
							$stack ->push("7");
							print_r($stack->size);
							echo "<br/>";
							$top6 =$stack->size[8];

							// echo $top6;
							// echo ${"value" . 0};
							//  echo ${"value" . 1};
							//  echo ${"value" . 2};
							//  echo ${"value" . 3};
							// echo ${"value" . 4};
							//  echo ${"value" . 5};
							$query10 = "SELECT * FROM ptable WHERE state='7' AND production='${"value" . 4}'";
							$query11 = mysqli_query($con, $query10);
							$row5=mysqli_fetch_array($query11,MYSQLI_ASSOC);
							$action5 = $row5['action'];
							//$raction5=$row5['production'];
							//echo $raction5;
							
								if($action5=='NULL')
								{
									echo "ERROR";
									exit();
								}

								else{
									$stack -> pop();
									$stack -> pop();
									$stack ->push("B");

									print_r($stack->size);
									echo "<br/>";
									$query12 ="SELECT * FROM ptable WHERE state='3' AND PRODUCTION='B'";
									$query13 = mysqli_query($con, $query12);
									$row6=mysqli_fetch_array($query13,MYSQLI_ASSOC);
									$action6 = $row6['action'];
									if($action6 =='NULL')
									{
										echo "ERROR";
									}
									else
									{
										$stack -> PUSH("6");
								print_r($stack->size);
									echo "<br/>";

										$query14 ="SELECT * FROM ptable WHERE state='6' AND PRODUCTION='${"value" . 4}'";
									$query15 = mysqli_query($con, $query14);
									$row7=mysqli_fetch_array($query15,MYSQLI_ASSOC);
									$action7 = $row7['action'];

									if($action7=='NULL')
									{
										echo "ERROR";
									}
									else if( $action7 == 'S10')
									{
										$stack -> push("${"value" . 4}");
										$stack -> push ("10");

										echo "<br/>";
								print_r($stack->size);

										$query16 = "SELECT * FROM ptable WHERE state='10' AND PRODUCTION ='${"value" . 4}'";
										$query17 = mysqli_query($con, $query16);
										$row8=mysqli_fetch_array($query17,MYSQLI_ASSOC);
										$action8 = $row8['action'];
										if($action8=='NULL')
										{
											echo "ERROR";
											exit();
										}
										else{
											$stack -> pop();
											$stack -> pop();
											$stack -> push("C");
											print_r($stack->size);
echo "<br/>";
											$query18 ="SELECT * FROM ptable WHERE state='6' AND PRODUCTION='C'";
											$query19 = mysqli_query($con, $query18);
										$row9=mysqli_fetch_array($query19,MYSQLI_ASSOC);
										$action9 = $row9['action'];
										if($action9 =='NULL')
										{
											echo "ERROR";
										}
										else
										{
											$stack ->push("9");
											print_r($stack->size);
echo "<br/>";
											$query20 ="SELECT * FROM ptable WHERE state='9' AND PRODUCTION='${"value" . 5}'";
											$query21 = mysqli_query($con, $query20);
										$row10=mysqli_fetch_array($query21,MYSQLI_ASSOC);
										$action10 = $row10['action'];
										if($action10 =='NULL')
										{
											echo "ERROR";
											exit();
										}
										else{
											$stack -> pop();
											$stack -> pop();
											$stack -> pop();
											$stack -> pop();
											$stack -> pop();
											$stack -> pop();
											$stack -> pop();
											$stack -> pop();
											$stack -> push("S");
											print_r($stack->size);
echo "<br/>";
											$query21 ="SELECT * FROM ptable WHERE state='0' AND PRODUCTION='S'";
											$query22 = mysqli_query($con, $query21);
											$row11=mysqli_fetch_array($query22,MYSQLI_ASSOC);
											$action11 = $row11['action'];
											if($action11 == 'NULL')
											{
												echo "ERROR";
											
											}
												else 
												 {
											$stack -> push("1");
											print_r($stack->size);
echo "<br/>";
											$query22 ="SELECT * FROM ptable WHERE state='1' AND PRODUCTION='${"value" . 5}'";
											$query23 = mysqli_query($con, $query22);
											$row12=mysqli_fetch_array($query23,MYSQLI_ASSOC);
											$action12 = $row12['action'];
											if($action12 == 'ACCEPT')
											{
												echo "YOUR string is ACCEPTED";
											}
											else{
												echo "ERROR";
												exit();
											}


											//300
										}

										//278
									}


										//265
									}



										//250
									}
									//234
								}
									
								


									//219
								}


								//203
							}
						


						}
						else
						{
							$stack->push("B");
							$stack->push("6");
							print_r($stack->size);

							$query9 = "SELECT * FROM ptable WHERE state='6' AND production='${"value" . 3}'";
							$query10 = mysqli_query($con, $query9);
						$row3=mysqli_fetch_array($query5,MYSQLI_ASSOC);
						$action3 = $row3['action'];

						if($action3 == 'R7')
						{
							echo "ERROR";//check again
						}
						else if($action3 =='S10')
						{
							$stack -> push("${"value" . 3}");
							$stack->push('10');
							

							$query10 ="SELECT * FROM ptable WHERE state='10' AND production='${"value" . 4}'";
							$query11 = mysqli_query($con, $query10);
						$row4=mysqli_fetch_array($query11,MYSQLI_ASSOC);
						$action4 =$row4['action'];
						if($action4=='NULL')
						{
							echo "ERROR";
							exit();
						}
						else{
							$stack->pop();
							$stack->pop();
							$stack->push("C");
							$stack->push("9");
							print_r($stack->size);
							echo "ERROR";
						}
						}

						}




						}



					}















				}
			}
			else if($action1=='S5')
				{
					$stack ->push("${"value" . 2}");
					$stack -> push("5");
					if(${"value" . 3}=='a')
					{
						echo "ERROR";
					}
					
				}
				else{
					echo "error";
				}
			}
		

print_r($stack->size);



?>