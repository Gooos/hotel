<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("head.php"); ?>
  </head>

  <body>

	<div class="page-wrap">
	<?php include("navbar.php"); ?>
		
	<?php include("contact_block.php"); ?>

		<!-- Баннер -->
		<div class="container" style="display:none">
			<div class="col-md-12 text-lg-center">
				<div class="row mt-25">
					<a href="/"><img class="stretches" src="assets/img/banner.jpg"></a>	  
				</div>
			</div>
		</div>
		<!-- Контент -->
		<div class="container">
			<div class="row mt-25">
				<div class="col-md-12">
					<h1 class="title-block font-italic">Услуги в Omar Hayam</h1>
					<p>Наши гости могут бесплатно пользоваться большим списком услуг, а за отдельную плату, он может быть расширен.</p>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-8 mt-10" style="border-right:1px solid #d7d3ce">
					<div class="servise servise-green">Бесплатные услуги</div>
					<div class="mt-10">
						<div class="servise-item"><img class="center-block" src="assets/img/servise-kitchen.png" alt="">Общая<br>кухня</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-hairdryer.png" alt="">Фен</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-guide.png" alt="">Путеводитель</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-reseption.png" alt="">Стойка регистрации<br>24 часа</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-baggage-room.png" alt="">Камера хранения багажа</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-slippers.png" alt="">Одноразовые тапочки</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-nonsmoking.png" alt="">Некурящие номера</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-tv.png" alt="">Телевизоры<br>в номерах</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-multilanguage.png" alt="">Мультиязычный персонал Rus\Eng\Spain</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-bedding.png" alt="">Чистое постельное бельё</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-heating.png" alt="">Отопление, горячая вода</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-soap.png" alt="">Мыло,<br>шампунь и гель для душа</div>
					</div>
				</div>
				<div class="col-md-4 mt-10">
					<div class="servise servise-red">Платные услуги</div>
					<div class="mt-10">
						<div class="servise-item"><img class="center-block" src="assets/img/servise-transfer.png" alt="">Трансфер</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-meet.png" alt="">Встреча<br>на вокзале<br>или аэропорту</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-washing.png" alt="">Стирка<br>и глажка</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-excursion.png" alt="">Экскурсии</div>
						<div class="servise-item"><img class="center-block" src="assets/img/servise-registration.png" alt="">Регистрация</div>
					</div>
				</div>
				
				<div class="clearfix"></div>
				
				<div id="carousel-omar-hayam" class="carousel slide mt-40" data-ride="carousel">
					 <!-- Indicators -->
					 <ol class="carousel-indicators">
						<li data-target="#carousel-omar-hayam" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-omar-hayam" data-slide-to="1"></li>
						<li data-target="#carousel-omar-hayam" data-slide-to="2"></li>
						<li data-target="#carousel-omar-hayam" data-slide-to="3"></li>
						<li data-target="#carousel-omar-hayam" data-slide-to="4"></li>
						<li data-target="#carousel-omar-hayam" data-slide-to="5"></li>
					 </ol>

					 <!-- Wrapper for slides -->
					 <div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
						  <img src="assets/img/slide/slide-1.jpg" alt="...">
						</div>
						<div class="carousel-item">
						  <img src="assets/img/slide/slide-2.jpg" alt="...">
						</div>
						<div class="carousel-item">
						  <img src="assets/img/slide/slide-3.jpg" alt="...">
						</div>
						<div class="carousel-item">
						  <img src="assets/img/slide/slide-4.jpg" alt="...">
						</div>
						<div class="carousel-item">
						  <img src="assets/img/slide/slide-5.jpg" alt="...">
						</div>
					 </div>
				</div>
				
			</div>
		</div>
	</div>
	
<?php include("footer.php"); ?>
<?php include("popup.php"); ?>
	
<!-- Modal -->
	<div class="modal fade" id="image-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<img class="stretches center-block" src="" alt="">
				</div>
			</div>
		</div>
	</div>
<!-- /.modal -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
	 <script src="assets/js/bootstrap.min.js"></script> 
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="assets/js/ie10-viewport-bug-workaround.js"></script> -->
	
    <!-- Jquery plugins JavaScript
    ================================================== -->
	<script src="assets/js/jquery.imagemapster.js"></script>
	<script src="assets/js/jquery.maskedinput.js"></script>


    <!-- Custom JavaScript
    ================================================== -->
	<script type="text/javascript">
		$(document).ready(function(){
			var image = $('#floor-map');

			image.mapster({
				mapKey: 'room',
				scaleMap: true,
				isSelectable: false,
				fill : true, 
				altImage : 'assets/img/floor-map-alt.png',
				fillColor: '76af3b',
				fillOpacity: 1,
				onClick: function (e) {
					$('#parent_popup').show();
				},
				/*showToolTip: true,*/
				/*areas: <?php echo $found ?>*/
				areas: [
					{
						key: 'room1',
						staticState: false,
						includeKeys: 'num1',
						/*toolTip: '<b>1801</b><br>рубль за сутки'*/
					},
					{
						key: 'room2',
						staticState: false,
						includeKeys: 'num2',
						/*toolTip: '<b>1802</b><br>рубля за сутки'*/
					},
					{
						key: 'room3',
						staticState: false,
						includeKeys: 'num3',
						/*toolTip: '<b>1803</b><br>рубля за сутки'*/
					},
					{
						key: 'room4',
						staticState: false,
						includeKeys: 'num4',
						/*toolTip: '<b>1804</b><br>рубля за сутки'*/
					},
					{
						key: 'room5',
						staticState: false,
						includeKeys: 'num5',
						/*toolTip: '<b>1800</b><br>рублей за сутки'*/
					}
					]
			});
			 
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			for (var i = 1; i <= 5; i++) {
				(function(i){
					$('[room="room'+i+'"]').hover(function(){
						$(".price"+i).toggle();
					});
					$('[room="room'+i+'"]').click(function(){
						$('.phone-form').attr('id', 'order'+i);
					});
				})(i);	
			}
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.thumb').click(function(){
				$('.thumb').removeClass('active');
				$(this).attr('data-image-id');
				$(this).addClass('active');
				$('.singl-img').removeClass('show');
				$('#img' + $(this).attr('data-image-id')).addClass('show');
			});
		});
	</script>
	<script type="text/javascript">
		$(function() {     
			$('a.thumbnail').click(function(e) {
				e.preventDefault();
				$('#image-modal .modal-body img').attr('src', $(this).attr('href'));
				$("#image-modal").modal('show');
			});
			$('#image-modal .modal-body img').on('click', function() {
				$("#image-modal").modal('hide')
			});
		});
	</script>
		<script type="text/javascript">
		$(document).ready(function(){
			$('.order-room').click(function(){
				$('#parent_popup').show();
				return false;
			});
		});
	</script>
	<script type="text/javascript">	
		$(function() {
			
			$('#parent_popup, .close-pop-up').click(function(){
				$('#parent_popup').hide();
				return false;
			});
			$('.windowContainer').click(function(e) {
				e.stopPropagation();
			});
			$('.phone-send').click(function(){
				$('#step1').hide();
				$('#step2').show();
				return false;
			});
		});
	</script>
	<script type="text/javascript">
		jQuery(function($){
		   $("#phone").mask("+9 (999) 999-9999",{completed:function(){}});
		});
	</script>
	<script type="text/javascript">
		$('.carousel-omar-hayam').carousel({
			interval: 2000
		})
</script>
  </body>
</html>