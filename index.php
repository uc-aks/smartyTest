<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign('myOption',array(1001=>'Akash',1002=>'Veer',1003=>'Raheem'));
$smarty->assign('myoption',1002);

$arr = [10,20,30];
$smarty->assign('var',$arr);
$str = "this is second example";
$smarty->assign('str',$str);

$table = 5;
$smarty->assign('num',$table);

$str2 = 'This is an example of';
$smarty->assign('str2',$str2);

$smarty->assign('Contacts',
	array('fax' => '555-222-9876',
		'email' => 'megha@ucertify.com',
		'phone' => array('home' => '555-444-3333',
			'cell' => '555-111-1234'
		)
	),
	array('fax' => '555-222-8876',
		'email' => 'pete.gupta@ucertify.com',
		'phone' => array('home' => '555-444-8888',
			'cell' => '555-111-9999'
		)
	)
);

$our_culture = array(
    array(
        "point_one" => "To be the best in the world.",
    ),
    array(
        "point_two" => "We produce results.",
    ),
    array(
        "point_three" => "We keep our word - We do what we say we will do.",
    ),
    array(
        "point_four" => "Coach, mentor and help the team grow."
    )
    );

$smarty->assign('myCheck',array('Akash','Veer','Raheem'));


$smarty->assign('our_culture',$our_culture);


$smarty->display('index.tpl');
?>