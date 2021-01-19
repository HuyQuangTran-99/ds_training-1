<!-- dựng trang chi tiết tin -->
<div class="container-fluid container-content">
	<div class="row row-content">
		<div class="col-8 content content-heading">
			{foreach from=$getContent item=t}
			<h3 class="title-heading">{$t.title}</h3>
			<div class="content-title">
				<p>{$t.content}</p>
			</div>
			{/foreach}
		</div>
		<div class="col-4 content-menu">
			<div class="banner-menu">
				<h2 class="banner-title text-center mt-2">Tin tức liên quan</h2>
				<div class="accordion-menu">
					<ul class="accordion">
						{foreach from=$get item=v}
						<li>
							<a class="toggle" href="?mod=home&site=getContent&id={$v.id}">{$v.title}</a>
						</li>
						{/foreach}
					</ul>
				</div>


			</div>
		</div>
	</div>
</div>
