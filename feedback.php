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
					<h1 class="title-block font-italic">Оставьте свой отзыв!</h1>
					<p>Мы очень заинтересованы, чтобы каждый клиент остался нами доволен и вернулся к нам! Поэтому мы всегда идем на встречу нашим гостям. Если у вас оставлись впечатления, поделитесь ими!</p>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-12">
					<div class="mt-10">
						<p class="speech"><span>Алексей:</span> Был 3 дня) Очень близко к метро, добрый персонал</p>
						<p class="speech"><span>Макс:</span> Зазжал накануне, было негде переночевать. Очень порадовала встреча на вокзале - не пришлось добираться самому. Теперь всегда знаю не только с кем, но и где можно переспать в Москве.</p>
						<p class="speech"><span>Люда:</span> Расположение - идеальное! Метро практически у тебя в комнате. Шаговая доступность до всех основных достопримечательностей. Пообедать ходили в МУ-МУ (Тверская, 17) - удачный вариант для семьи, вкусно и по карману! Во всех отзывах уже отмечалось - во дворе куча разных кафешек, очень комфортно и уютно, как то даже по-европейски что-ли.</p>
						<p class="speech"><span>Стасик:</span> Отличное местоположение. Рядом метро, центр. Спасибо девочкам рассказали где-что находиться. Очень отзывчивый персонал. Все чисто.</p>
					</div>
				</div>
				
				<div class="clearfix"></div>
				
				<div class="col-md-12 text-xs-center">
					<ul class="pagination">
						<li class="page-item active"><a class="page-link" href="#">1</a></li> 
						<li class="page-item"><a class="page-link" href="#">2</a></li> 
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><span> • • • </span></li>
						<li class="page-item"><a class="page-link" href="#">22</a></li>
					</ul>
				</div>
				
				<div class="clearfix"></div>
				
				<div class="col-md-12 text-xs-center">
					<div class="line"></div>
					<div class="row mt-40 mb-40">
						<form class="feedback">
							<div class="col-md-3">
								<input type="text" class="form-control" id="" placeholder="Ваше имя">
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control" id="" placeholder="Проверочный код">
							</div>
							<div class="col-md-2">
								капча
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12 mt-20">
								<textarea class="form-control" id="" placeholder="Текст Вашего отзыва"></textarea>
								<button type="submit" class="feedback-send" name="" value="">
									<img class="no-hover" src="assets/img/feedback-send.png">
									<img class="hover" src="assets/img/feedback-send-hover.png">
									<br>Отправить
								</button>
							</div>
						</form>
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