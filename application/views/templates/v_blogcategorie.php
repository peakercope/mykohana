<h2>Categories</h2>
<ul>
<? foreach ($blogcategories as $one){?>
	<li>
		<?=$one->name;?>
		<ul>
		<?foreach($one -> blogposts->find_all() as $post){?>
			<li><?=$post->title?></li>
		<?}?>
		</ul>
	</li>
<?}?>
</ul>