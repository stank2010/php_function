<?php
	include "gen_function.php";

	
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

	html();
		body();
			show('table<br>');
			table('border="1"');
				foreach($A as $a)
				{
					th();
						show($a);
					th_end();
				}
				
				tr();
					each_all('td',$data_1);
				tr_end();
				
				tr();
					each_all('td',$data_2);
				tr_end();
				
			table_end();
		body_end();
	html_end();
?>
