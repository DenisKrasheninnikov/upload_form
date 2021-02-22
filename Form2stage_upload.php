<?php 
$path = 'Form2stage_uploads/';

require_once 'Form2stage.php';
// оставляет только те элементы массива, которые загрузили
function arrayFields($var) {
	return $var['uploaded'] == true ? $var : false;
}

// echo '<pre>';
$Fields_new = array_values(array_filter($Fields, "arrayFields"));
// echo '<pre>';
// $Fields_new = array_values($Fields_new);
// print_r($Fields_new);
// echo '</pre>';
// exit();
// print_r(array_filter($Fields, "lessThanFour"));
// echo '</pre>';

foreach($_FILES['my_file']['name'] as $k=>$f) {
	//print_r($k .'=>'. $f);
	if (!$_FILES['my_file']['error'][$k]) {
		if (is_uploaded_file($_FILES['my_file']['tmp_name'][$k])) {
			//print_r($path . $Fields_new[$k]['name']);
			//print_r($Fields_new[$k]['name']);
			if (move_uploaded_file($_FILES['my_file']['tmp_name'][$k], $path . $Fields_new[$k]['name'].'.txt')) {
				// echo 'Файл: '.$_FILES['my_file']['name'][$k].' загружен.<br />';
			} 
		}
	}
}
?>