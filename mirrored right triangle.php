 <?php 
			$v = 5;
			$s = 1;
			for ($row = 1 ;$row <= 5; $row++)
			{
				echo "<br/>";
				for ($space = 1; $space<=$v;$space++ )
				{
					echo "&nbsp&nbsp";
				}
				for ($star = 1; $star <=$s; $star++ )
				{
					echo "*";
				}
				$v--;
				$s = $s +1;
			}
			
?>