<? foreach($posts as $post):?>
	<div class="span8">

		<div>
			<h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a></h1>
			<p><?=$post['post_text']?></p>
			<span class="badge badge-success">Posted <?=$post['post_created']?></span>
			<span class="badge label pull-right">By <?=$post['username']?></span>
			<?foreach ($tags[$post['post_id']] as $tag):?>
				<a href="<?=BASE_URL?>tags/view/<?=$tag?>"><span class="label" style="background-color: #5bc0de"><?=$tag?></span></a>
			<?endforeach?>
		</div>
		<hr>
	</div>
<? endforeach?>
