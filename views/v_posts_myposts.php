<div class="repeatedBodyContent">
	<?php foreach($myposts as $post): ?>
		<div class="followedPosts">
			<article>
				<h1><strong><?=$post['first_name']?> <?=$post['last_name']?></strong> <?=$post['email']?></h1>
				<p class="postContent"><?=$post['content']?></p>
				<p class="dateTime">
					<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
							<?=Time::display($post['created'])?>
					</time>
				</p>
			</article>
		</div>
	<?php endforeach; ?>
</div>