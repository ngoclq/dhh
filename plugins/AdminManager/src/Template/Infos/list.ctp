<script type="text/javascript" language="javascript">
	/* <![CDATA[ */
	var _action_news_category = "<?= $this->Url->build([ 'controller' => 'NewsCategory', 'action' => 'actionAjax', '_method' => 'GET', 'plugin' => 'AdminManager']); ?>";
	/* ]]> */
</script>
<?= $this->Html->script('AdminManager.NewsCategory.js', ['inline' => 'false']) ?>

<div class="row">
	<div class="columns large-12">
		<h1>Blog News</h1>
		<table>
			<tr>
				<th width="40px">__('NO_NUMBER')</th>
				<th width="300px">__('TITLE') . '(' . __('VIETNAMESE') . ')'</th>
				<th width="300px">__('TITLE') . '(' . __('JAPANESE') . ')'</th>
				<th width="130px">__('CREATED')</th>
				<th width="200px"></th>
			</tr>

			<?php foreach ($news as $newsInfo):
					$styleForHide = 'items-id-' . $newsInfo->id;
					$styleForShow = 'items-id-' . $newsInfo->id;
				if ($newsInfo->display_flag) {
					$styleForShow .= ' items_hiden';
				} else {
					$styleForHide .= ' items_hiden';
				}

			?>
			<tr id="id-<?= $newsInfo->id ?>">
				<td>
					<?= $this->Html->link($newsInfo->id, [ 'controller' => 'NewsCategory', 'action' => 'edit', '_method' => 'GET', 'plugin' => 'AdminManager', $newsInfo->id]) ?>
				</td>
				<td>
					<?= $this->Html->link($newsInfo->title_vi, [ 'controller' => 'NewsCategory', 'action' => 'edit', '_method' => 'GET', 'plugin' => 'AdminManager', $newsInfo->id]) ?>
				</td>
				<td>
					<?= $this->Html->link($newsInfo->title_jp, [ 'controller' => 'NewsCategory', 'action' => 'edit', '_method' => 'GET', 'plugin' => 'AdminManager', $newsInfo->id]) ?>
				</td>
				<td>
					<?= $newsInfo->created->i18nFormat('yyyy-MM-dd HH:mm:ss') ?>
				</td>
				<td>
					<?= $this->Form->button(__('BTN_HIDDEN), ['type'=>'button', 'class' => ['btnAction', $styleForHide], 'rel' => '_action_article_category', '_handle' => 'hide', 'val' => $article->id ] ) ?>
					<?= $this->Form->button(__('BTN_SHOW'), ['type'=>'button', 'class' => ['btnAction', $styleForShow], 'rel' => '_action_article_category', '_handle' => 'show', 'val' => $article->id ] ) ?>
					<?= $this->Form->button(__('BTN_DELETE'), ['type'=>'button', 'class' => ['btnAction'], 'rel' => '_action_article_category', '_handle' => 'del', 'val' => $article->id ] ) ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>

