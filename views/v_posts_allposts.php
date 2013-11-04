<div class="repeatedBodyContent">
	<form id="newPostForm" method='post' action='/posts/p_add'>
    <input type="text" name='content' id='content' placeholder="Start barking!" size="65"> <input type='submit' id="newPost" value='New post'>
	</form> 
	<?php foreach($allposts as $post): ?>
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