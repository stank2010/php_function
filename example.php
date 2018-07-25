<?php
	include "html_function.php";

	
	$A = array("name","class","talk","detail");
	$data_1 = array("stank","p1","hello","-");
	$data_2 = array("bear","p2","hong hong","animal");

	function each_all($tag='',$arr=array())
	{
		foreach($arr as $a)
		{
			echo '<'.$tag.'>';
			echo $a;
			echo '</'.$tag.'>';
		}
	}

	h_html();
		h_body();
			h_print('table<br>');
			h_table('border="1"');
				foreach($A as $a)
				{
					h_th();
						h_print($a);
					h_th_end();
				}
				
				h_tr();
					each_all('td',$data_1);
				h_tr_end();
				
				h_tr();
					each_all('td',$data_2);
				h_tr_end();
				
			h_table_end();
		h_body_end();
	h_html_end();
?>
