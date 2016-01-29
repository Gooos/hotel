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
					<h1 class="title-block font-italic">Добраться очень просто</h1>
					<p>Мини-отель расположен по адресу <b>Москва, Страстной б-р, д. 4, стр. 3</b>. Это в двух минутах пешком от станций метро Тверская, Пушкинская и Чеховская. Удобнее всего выходить будет со станци метро Чеховская, первый вагон из центра, из стеклянных дверей налево. Так же предлагаем посмотреть фото-схему.</p>
					<div class="map"><script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=0YXvrw8nfkzVwsJz8Dkw5-QtatNZnVJ6&width=100%&height=260"></script></div>
					<div class="line"></div>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-12">
					<div class="mt-20">
						<h1 class="title-block font-italic hand">Наведите на картинку</h1>
						<div class="pathway-container">
							<div class="pathway">
								<div class="zoom-path">
									<img class="stretches" src="assets/img/pathway/pathway-1.png">
									<div class="path-discription"><span>Это описание к картинке</span></div>
								</div>
							</div>
							<div class="pathway">
								<div class="zoom-path">
									<img class="stretches" src="assets/img/pathway/pathway-2.png">
									<div class="path-discription"><span>После жилого здания&nbsp;<br>&nbsp;поверните налево</span></div>
								</div>
							</div>
							<div class="pathway">
								<div class="zoom-path">
									<img class="stretches" src="assets/img/pathway/pathway-3.png">
									<div class="path-discription"><span>Идите прямо, прямо, прямо</span></div>
								</div>
							</div>
							<div class="pathway">
								<div class="zoom-path">
									<img class="stretches" src="assets/img/pathway/pathway-4.png">
									<div class="path-discription"><span>Поверните за угол&nbsp;<br>&nbsp;и идите прямо</span></div>
								</div>
							</div>
							<div class="pathway">
								<div class="zoom-path">
									<img class="stretches" src="assets/img/pathway/pathway-5.png">
									<div class="path-discription"><span>Идите прямо, потом&nbsp;<br>&nbsp;поверните налево</span></div>
								</div>
							</div>
							<div class="clearfix"></div>
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