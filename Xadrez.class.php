<?php

    class Xadrez{
        public $colums = 5;

        public function createTable(){
            $tableWidth = $this->colums * 35; 

            echo "<table width='$tableWidth' cellspacing='0px' border='1px'";

            for($i=1;$i<=$this->colums;$i++)
            {
	            echo "<tr>";
	            for($j=1;$j<=$this->colums;$j++)
	            {
		            $total=$i+$j;
		            if($total%2==0)
		            {
		            	echo "<td height=35px width=35px bgcolor=#FFFFFF></td>";
		            }
		            else
		            {
		            	echo "<td height=35px width=35px bgcolor=#000000></td>";
		            }
	            }
	            echo "</tr>";
            }

            echo "</table>";
        }
    }

?>