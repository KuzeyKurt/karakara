<DOCTYPE html>

<head>


<?php 
    $title = "Контакты";
    require_once "parts/head.php" ?>

</head>

<html>

<body class="" id="top" style="" cz-shortcut-listen="true">
		<div class="main">
<!--==============================header=================================-->
	<?php require_once "parts/header.php"; ?>
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_12">
						<h3>Мы на карте</h3>
						<div class="map">
							<figure>
							<iframe src="https://yandex.ru/map-widget/v1/?scroll=false&amp;um=constructor%3AOi1Ir4lwWDCqwanuJ2AKu1hFLqC8VtG0" frameborder="0" allowfullscreen="true" width="1200px" height="300px" style="display: block;"></iframe>
								<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe> -->
							</figure>
						</div>
					</div>
					<div class="grid_5">
						<h3>Контакты</h3>
						<div class="map">
							<div class="text1 color2">По всем вопросам, можно обращаться по телефону.</div>
						<!--     <p>Don’t forget, 24/7 support is available for TemplateMonster’s <span class="color1"><a href="#" rel="nofollow">premium themes</a></span> only. Free ones lack this privilege.</p>
						<p>Use <span class="color1"><a href="#" rel="nofollow">Template Tuning</a></span> services if you need any help in customization of your freebie.</p> -->
							<address>
								<dl>
									<dt>Karadag <span class="color1">T</span>ravel <br>
										297320, г. Феодосия.
									</dt>
									<dd><span>Тел.:</span> +7 (978) 862 61 11</dd>
									<!-- <dd><span>FAX:</span> +1 800 889 9898</dd> -->
									<dd>E-mail: <a href="#" class="color1">info@KaradagTravel.ru</a></dd>
								</dl>
							</address>
						</div>
					</div>
					<div class="grid_6 prefix_1">
						<h3>Форма для связи</h3>
						<form id="form">
							<div class="success_wrapper">
								<div class="success-message">Contact form submitted</div>
							</div>
							<label class="name">
								<input type="text" data-constraints="@Required @JustLetters" id="regula-generated-114541">
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid name.</span>
							<span class="_placeholder" style="left: 0px; top: 0px; width: 132px; height: 31px;">Имя:</span></label>
							<label class="email">
								<input type="text" data-constraints="@Required @Email" id="regula-generated-556864">
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid email.</span>
							<span class="_placeholder" style="left: 0px; top: 0px; width: 132px; height: 31px;">E-mail:</span></label>
							<label class="phone">
								<input type="text" data-constraints="@Required @JustNumbers" id="regula-generated-545456">
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid phone.</span>
							<span class="_placeholder" style="left: 0px; top: 0px; width: 132px; height: 31px;">Телефон:</span></label>
							<label class="message">
								<textarea data-constraints="@Required @Length(min=20,max=999999)" id="regula-generated-763726"></textarea>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*The message is too short.</span>
							<span class="_placeholder" style="left: 0px; top: 0px; width: 482px; height: 221px;">Сообщение:</span></label>
							<div>
								<div class="clear"></div>
								<div class="btns">
									<a href="#" data-type="submit" class="btn">Отправить</a>
									<a href="#" data-type="reset" class="btn">Очистить</a>
								</div>
							</div>
						</form>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<?php require_once "parts/footer.php" ?>
	
<a href="#" id="toTop" style="margin-right: 0px; right: 10px; display: none;"><span id="toTopHover"></span></a>
</body>

</html>