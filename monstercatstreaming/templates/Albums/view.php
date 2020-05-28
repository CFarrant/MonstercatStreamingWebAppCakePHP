<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album $album
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Album'), ['action' => 'edit', $album->album_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Album'), ['action' => 'delete', $album->album_id], ['confirm' => __('Are you sure you want to delete # {0}?', $album->album_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Albums'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Album'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="albums view content">
            <h3><?= h($album->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Album Id') ?></th>
                    <td><?= h($album->album_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cover Url') ?></th>
                    <td><?= h($album->cover_url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genre Primary') ?></th>
                    <td><?= h($album->genre_primary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genre Secondary') ?></th>
                    <td><?= h($album->genre_secondary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($album->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Release Code') ?></th>
                    <td><?= h($album->release_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($album->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Artist Name') ?></th>
                    <td><?= h($album->artist_name) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
