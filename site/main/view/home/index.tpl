<!-- xây dựng trang chủ -->
<div class="index" style="height:100vh;">
<section class="banner-header">
	<div class="container-fluid container-menu">
		<div class="row row-content">
			<div class="col-4 menu-left">
				<div class="banner-menu">
					<h2 class="banner-title text-center mt-2">TIN TỨC SỰ KIỆN</h2>

					<div class="accordion-menu">
						<ul class="accordion">
							{foreach from=$get item=v }
							<li>
								<a class="toggle" href="?mod=home&site=getContent&id={$v.id}">{$v.title}</a>
							</li>
							{/foreach}
						</ul>
					</div>


				</div>
			</div>
			<div class="col-8 menu-right">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="..\ds_training\site\upload\images\daisan1.jpeg" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="..\ds_training\site\upload\images\daisan1.jpeg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="..\ds_training\site\upload\images\daisan1.jpeg" alt="Third slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</div>




	</section>

</div>

<script>

/// changeLink

function changeLink(id) {

	// location.href = '?mod=home&site=getlist&taxonomy_id=' + id;
	 location.href = '?mod=home&site=getContent&taxonomy_id=' + id;
}


$('.toggle').click(function(e) {
	e.preventDefault();

	var $this = $(this);

	if ($this.next().hasClass('show')) {
			$this.next().removeClass('show');
			$this.next().slideUp(350);
	} else {
			$this.parent().parent().find('li .inner').removeClass('show');
			$this.parent().parent().find('li .inner').slideUp(350);
			$this.next().toggleClass('show');
			$this.next().slideToggle(350);
	}
});


// slide menu

let slides = document.querySelectorAll('.slide'),
    dots = document.querySelectorAll('.dot'),
    next = document.querySelector('.next'),
    prev = document.querySelector('.prev');

slides.forEach(function(slide, index) {
    slide.style.left = `${index * 100}%`;
});

var counter = 0;

next.addEventListener('click', function () {
    counter++;
    carousel();
    console.log(counter);
});

prev.addEventListener('click', function () {
    counter--;
    carousel();
    console.log(counter);
});

function carousel() {
    if (counter == slides.length) {
        counter = 0;
    }
    if (counter < 0) {
        counter = slides.length - 1;
    }

    slides.forEach(function(slide){
      slide.style.transform = `translateX(-${counter * 100}%)`;
    });
}
////

</script>
