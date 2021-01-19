<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-18 10:11:45
  from 'C:\xampp\htdocs\ds_training\site\main\view\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6004fc71a64993_29553672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c524f16f14047073bd8a7b136cbd329c5fcb0944' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ds_training\\site\\main\\view\\home\\index.tpl',
      1 => 1610939494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6004fc71a64993_29553672 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="index" style="height:100vh;">
<section class="banner-header">
	<div class="container-fluid container-menu">
		<div class="row row-content">
			<div class="col-4 menu-left">
				<div class="banner-menu">
					<h2 class="banner-title text-center mt-2">TIN TỨC SỰ KIỆN</h2>

					<div class="accordion-menu">
						<ul class="accordion">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['get']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
							<li>
								<a class="toggle" href="?mod=home&site=getContent&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
							</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

<?php echo '<script'; ?>
>

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
    slide.style.left = `$<?php echo 'index'*100;?>
%`;
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
      slide.style.transform = `translateX(-$<?php echo 'counter'*100;?>
%)`;
    });
}
////

<?php echo '</script'; ?>
>
<?php }
}
