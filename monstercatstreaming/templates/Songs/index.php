<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song[]|\Cake\Collection\CollectionInterface $songs
 */
?>
<div class="songs index content">
    <?= $this->Html->link(__('New Song'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Songs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('track_id') ?></th>
                    <th><?= $this->Paginator->sort('genre_primary') ?></th>
                    <th><?= $this->Paginator->sort('genre_secondary') ?></th>
                    <th><?= $this->Paginator->sort('song_id') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('track_number') ?></th>
                    <th><?= $this->Paginator->sort('album_id') ?></th>
                    <th><?= $this->Paginator->sort('artist_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($songs as $song): ?>
                <tr>
                    <td><?= $this->Number->format($song->track_id) ?></td>
                    <td><?= h($song->genre_primary) ?></td>
                    <td><?= h($song->genre_secondary) ?></td>
                    <td><?= h($song->song_id) ?></td>
                    <td><?= h($song->url) ?></td>
                    <td><?= h($song->title) ?></td>
                    <td><?= $this->Number->format($song->track_number) ?></td>
                    <td><?= $song->has('album') ? $this->Html->link($song->album->name, ['controller' => 'Albums', 'action' => 'view', $song->album->album_id]) : '' ?></td>
                    <td><?= h($song->artist_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $song->track_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $song->track_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $song->track_id], ['confirm' => __('Are you sure you want to delete # {0}?', $song->track_id)]) ?>
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
