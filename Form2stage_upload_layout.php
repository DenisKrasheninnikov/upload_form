<!DOCTYPE html>
<html class="hystmodal__opened" lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Контактные данные</title>
	<!-- <link rel="stylesheet" type="text/css" href="upload_st.css"> -->
	<style type="text/css">
		.form {
			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
			font-family: var(--b24-font-family);
			line-height: 18px;
		}

		.form-wrapper {
			border-bottom: 5px solid var(--b24-primary-color);
		}

		.form-state-container .form-success {
			background-color: #a0be47;
		}

		.form * {
			-webkit-box-sizing: border-box;
			box-sizing: border-box;
			outline: 0;
		}

		.form-state-container .form-success {
			position: absolute;
			top: 0;
			left: 0;
			bottom: -5px;
			right: 0;
			background-color: #fff;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: end;
			-ms-flex-align: end;
			align-items: flex-end;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			padding-bottom: 15px;
			z-index: 15;
		}

		.form-success-inner {
			max-width: 330px;
			text-align: center;
		}

		.form-success-icon {
			display: inline-block;
			margin: 0 0 26px 0;
			width: 169px;
			height: 169px;
			background-repeat: no-repeat;
		}

		.form-success-text {
			display: block;
			margin: 0 0 27px;
			font: 20px/30px "Helvetica Neue",Helvetica,Arial,sans-serif;
			font: 20px/30px var(--b24-font-family);
			color: #000;
			text-align: center;
			opacity: .8;
		}

		.form-success-text p {
			margin: 0;
		}

		.form-padding-side {
			padding-left: 31px;
			padding-right: 31px;
		}

		.form-content {
			padding: 14px 31px;
		}

		.form-state-container {
			position: absolute;
			top: 0;
			left: 0;
			bottom: -5px;
			right: 0;
			background-color: #fff;
		}
	</style>
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