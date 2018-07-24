<?php
	function show($string)
	{
		echo $string;
	}

	function div($add="")
	{
		echo '<div '.$add.'>';
	}
	function div_end()
	{
		echo '</div>';
	}

	function html($add="")
	{
		echo '<html '.$add.'>';
	}
	function html_end()
	{
		echo '</html>';
	}

	function body($add="")
	{
		echo '<body '.$add.'>';
	}
	function body_end()
	{
		echo '</body>';
	}

	function head($add="")
	{
		echo '<head '.$add.'>';
	}
	function head_end()
	{
		echo '</head>';
	}

	function table($add="")
	{
		echo '<table '.$add.'>';
	}
	function table_end()
	{
		echo '</table>';
	}

	function th($add="")
	{
		echo '<th '.$add.'>';
	}
	function th_end()
	{
		echo '</th>';
	}

	function tr($add="")
	{
		echo '<tr '.$add.'>';
	}
	function tr_end()
	{
		echo '</tr>';
	}

	function td($add="")
	{
		echo '<td '.$add.'>';
	}
	function td_end()
	{
		echo '</td>';
	}

	function a($add="")
	{
		echo '<a '.$add.'>';
	}
	function a_end()
	{
		echo '</a>';
	}

	function p($add="")
	{
		echo '<p '.$add.'>';
	}
	function p_end()
	{
		echo '</p>';
	}

	function form($add="")
	{
		echo '<form '.$add.'>';
	}
	function form_end()
	{
		echo '</form>';
	}

?>