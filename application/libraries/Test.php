<?php
class Test
{
	public function abcd()
	{
		$ci = & get_instance();
		$ci->load->helper('array');
		echo "ABC function of test library";
	}
	


}
?>