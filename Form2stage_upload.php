<?php
  // echo '<pre>';
 // print_r($_REQUEST);
print_r($_POST);
foreach($_POST['test'] as $key=>$f) {
	$Fields[$key] = $f;
}  
// print_r($Fields);
$path = 'Form2stage_uploads/';

//  $Fields1 = array(
// 	'file_1' => array('name' => 'Устав', 'uploaded' => true),
// 	'file_2' => array('name' => 'Расчетный счет', 'uploaded' => false),
// 	'file_3' => array('name' => 'Паспорт ответственного', 'uploaded' => true),
// 	'file_4' => array('name' => 'ИНН ответственного', 'uploaded' => false),
// );
// print_r($Fields);
// exit;

// оставляет только те элементы массива, которые загрузили
function arrayFields($var) {
	return $var['uploaded'] == true ? $var : false;
}

// echo '<pre>';
$Fields_new = array_values(array_filter($Fields, "arrayFields"));
// echo '<pre>';
// $Fields_new = array_values($Fields_new);
// print_r($Fields_new);
// print_r($_FILES);
// exit;
// echo '</pre>';
// exit();
// print_r(array_filter($Fields, "lessThanFour"));
// echo '</pre>';
$ii = 0;
foreach($_FILES['my_file']['name'] as $key=>$f) {
	print_r($k .'=>'. $f);
	if (!$_FILES['my_file']['error'][$key]) {
		if (is_uploaded_file($_FILES['my_file']['tmp_name'][$key])) {
			//print_r($path . $Fields_new[$k]['name']);
			//print_r($Fields_new[$k]['name']);
			if (move_uploaded_file($_FILES['my_file']['tmp_name'][$key], $path . $Fields_new[$ii]['name'].'.txt')) {
				// echo 'Файл: '.$_FILES['my_file']['name'][$k].' загружен.<br />';
			} 
		}
	}
	$ii=$ii+1;
}
?>

<!DOCTYPE html>
<html class="hystmodal__opened" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Контактные данные</title>
	<link rel="stylesheet" type="text/css" href="Form2stage_upload_st.css">
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