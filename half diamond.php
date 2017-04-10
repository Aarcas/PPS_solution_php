 <?php
				$var = 5;
				$nvar = 5;
				$nrow =1;
			for ($row =1 ; $row <=$var ;$row++)
			{
				echo "<br/>";
				
				for ($col =1 ; $col <=$row ;$col++)
				{
					echo "*";
				}
			}
			for ($nrow =1 ; $nrow <=$nvar ;$nrow++)
			{
				echo "<br/>";
				for ($col =5 ; $col >=$nrow ;$col--)
				{
					echo "*";
				}
				
			}
			
			?>