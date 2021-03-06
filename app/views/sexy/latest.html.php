<ul class="latest-list large-block-grid-4">
<?php foreach( $sexies as $sexy ) : ?>
	<?php $imageUrl = '/images/' . $sexy->fileName ?>
	<li>
		<a href="/<?= $sexy->_id ?>">
			<div class="img-container" style="background-image:url(<?= $imageUrl ?>)">
				<img src="<?= $imageUrl ?>" />
			</div>
			<div class="row">
				<div class="large-6 columns">
					<?php $comments = $sexy->commentCount; ?>
					<p><?= $comments ?>
					<?php if ($comments == 1 ) : ?>
					 comment
					<?php else : ?>
					 comments
					<?php endif ?></p>
				</div>
				<div class="large-6 columns">
					<abbr class="date timeago" title="<?= date('c',$sexy->createdAt->sec) ?>"><?= date('F m, o',$sexy->createdAt->sec) ?></abbr>
				</div>
			</div>
		</a>
	</li>
<?php endforeach ?>
</ul>

<div class="pagination text-center">
<?= $this->pagination->create($sexies, $options) ?>
		<?= $this->pagination->pre(); ?>
		<?= $this->pagination->pages(); ?>
		<?= $this->pagination->post(); ?>
		<?= $this->pagination->end(); ?>
</div>