<? foreach($posts as $post):?>
<div class="span8">
	<h1><?=$post['post_subject']?></h1>
	<p><?=$post['post_text']?></p>
	<div>
		<span class="badge badge-success">Posted <?=$post['post_created']?></span><div class="pull-right"><span class="label"><?=$post['user_id']?></span> </div>
	</div>

</div>
<?php endforeach?>