<?php 
$path = 'Form2stage_uploads/';

$Fields = array(
	'file_1' => array('name' => 'Устав', 'uploaded' => true),
	'file_2' => array('name' => 'Расчетный счет', 'uploaded' => false),
	'file_3' => array('name' => 'Паспорт ответственного', 'uploaded' => true),
	'file_4' => array('name' => 'ИНН ответственного', 'uploaded' => false)
);

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

<!DOCTYPE html>
<html class="hystmodal__opened" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Контактные данные</title>
	<link rel="stylesheet" type="text/css" href="upload_st.css">
</head>
<body>
	<div class="form">
		<div class="form-wrapper">
			<div class="form-state-container">
				<div class="form-content">
					<div class="form-state-container">
						<div class="form-success">
							<div class="form-success-inner">
								<div class="form-success-icon">
									<img src="Form2stage_img/Success.svg" alt="успешно">
								</div>
								<div class="form-success-tex">
									<p>Спасибо, ваше сообщение отправлено</p>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>