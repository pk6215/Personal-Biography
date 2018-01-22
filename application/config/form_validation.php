
<?php
$config = [
		/*'store_article1'=>[
									[
										'field'=>'articletitle',
										'label'=>'Artile Title',
										'rules'=>'required|alpha',
									],
									[
										'field'=>'articlebody',
										'label'=>'Article Body',
										'rules'=>'required'

									]
							],*/
		'admin_login1'=>	[
									[
										'field'=>'username',
										'label'=>'User Name',
										'rules'=>'required|trim'
									],
									[
										'field'=>'password',
										'label'=>'Password',
										'rules'=>'required'

									]
							],
		'testvalidation'=>	[
								'field'=>'first_name',
								'label'=>'User First Name',
								'rules'=>'required|alpha'
							],
							[
								'field'=>'last_name',
								'label'=>'User Last Name',
								'rules'=>'required|alpha'

							]					

];
	
?>