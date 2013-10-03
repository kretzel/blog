
	<div class="span8">

		<div>
			<h1><?=$post['post_subject']?></h1>
			<p><?=$post['post_text']?></p>
			<span class="badge badge-success">Posted <?=$post['post_created']?></span>
			<span class="badge label pull-right">By <?=$post['username']?></span>
		</div>
		<hr>
	</div>
	<?foreach ($tags as $tag):?>
		<a href="<?=BASE_URL?>tags/view/<?=$tag['tag_name']?>"><span class="label label-info"><?=$tag['tag_name']?></span></a>
	<?endforeach?>

	<!-- begin htmlcommentbox.com -->
	<div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Widget</a> is loading comments...</div>
	<link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
	<script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=(hcb_user.PAGE || ""+window.location), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16734&num=5");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
	<!-- end htmlcommentbox.com -->