<?php

$heading = 'Название компании';
$description = 'Форма заполнения параметров заданияФорма заполнения параметров заданияФорма заполнения параметров задания';

$Fields = array(
	'file_1' => array('name' => 'Устав', 'uploaded' => true),
	'file_2' => array('name' => 'Расчетный счет', 'uploaded' => false),
	'file_3' => array('name' => 'Паспорт ответственного', 'uploaded' => true),
	'file_4' => array('name' => 'ИНН ответственного', 'uploaded' => false),
);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Контактные данные</title>
	<link rel="stylesheet" type="text/css" href="Form2stage_style.css">
</head>
<body>
	<div class="form">
		<div class="form-content">
			<div class="form-wrapper">
				<form name="form" method="post" action="Form2stage_upload_layout.php" enctype="multipart/form-data" >
					<div id="myModal" class="form-zvonok"> 
						<div id="myModal1" class="form-zvonok1">
							<div class="form-header">
								<div class="form-header-title">
									<h2> <?php echo $heading; ?> </h2>
								</div>
								<div class="form-header-description">
									<p> <?php echo $description; ?> </p>
								</div>
							</div>	
							<hr class="hr_up">

							<?php foreach ($Fields as $key => $file)  {?>
								<?php if ($file['uploaded']): { ?>
									<div class="form-field">
										<div class="control-file">
											<div class="control-container">
												<?php echo $file['name']; ?> <br><br>
												<input type="file" class="filed" name="my_file[]" />
											</div>
										</div>
									</div>
									<br>
								<?php } else: { ?>
									<div class="form-field">
										<div class="control-file">
											<div class="control-container">
												<?php echo $file['name']; ?> <br><br> <span class="alert"> (Файл уже загружен)</span><br> 
												<!-- <input type="file" class="filed" name="my_file[]" disabled /> -->
											</div>
										</div>
									</div>
									<br>
								<?php } ?>
							<?php endif ?>
							<?php
						} ?>
						<br>
						<div class="field-agreement">
							<div class="control-desc">
								<input type="checkbox" id="myBtn" required><label><span class="form-field-agreement">Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных</span> <span class="chbx">*</span></label>
							</div>
						</div>
						<br>
						<br>
						<button type="submit" class="uploadBtn" name="submit" >Отправить</button>
						<hr class="hr_down">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</script>
</html>