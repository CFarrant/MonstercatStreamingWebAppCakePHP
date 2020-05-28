<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album[]|\Cake\Collection\CollectionInterface $albums
 */
?>
<div class="albums index content">
    <?= $this->Html->link(__('New Album'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Albums') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('album_id') ?></th>
                    <th><?= $this->Paginator->sort('cover_url') ?></th>
                    <th><?= $this->Paginator->sort('genre_primary') ?></th>
                    <th><?= $this->Paginator->sort('genre_secondary') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('release_code') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('artist_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($albums as $album): ?>
                <tr>
                    <td><?= h($album->album_id) ?></td>
                    <td><?= h($album->cover_url) ?></td>
                    <td><?= h($album->genre_primary) ?></td>
                    <td><?= h($album->genre_secondary) ?></td>
                    <td><?= h($album->name) ?></td>
                    <td><?= h($album->release_code) ?></td>
                    <td><?= h($album->type) ?></td>
                    <td><?= h($album->artist_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $album->album_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $album->album_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $album->album_id], ['confirm' => __('Are you sure you want to delete # {0}?', $album->album_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
