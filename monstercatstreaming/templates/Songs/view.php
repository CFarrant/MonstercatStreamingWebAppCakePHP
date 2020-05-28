<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song $song
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Song'), ['action' => 'edit', $song->track_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Song'), ['action' => 'delete', $song->track_id], ['confirm' => __('Are you sure you want to delete # {0}?', $song->track_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Songs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Song'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="songs view content">
            <h3><?= h($song->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Genre Primary') ?></th>
                    <td><?= h($song->genre_primary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genre Secondary') ?></th>
                    <td><?= h($song->genre_secondary) ?></td>
                </tr>
                <tr>
                    <th><?= __('Song Id') ?></th>
                    <td><?= h($song->song_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($song->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($song->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Album') ?></th>
                    <td><?= $song->has('album') ? $this->Html->link($song->album->name, ['controller' => 'Albums', 'action' => 'view', $song->album->album_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Artist Name') ?></th>
                    <td><?= h($song->artist_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Track Id') ?></th>
                    <td><?= $this->Number->format($song->track_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Track Number') ?></th>
                    <td><?= $this->Number->format($song->track_number) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Songs') ?></h4>
                <?php if (!empty($song->songs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Track Id') ?></th>
                            <th><?= __('Genre Primary') ?></th>
                            <th><?= __('Genre Secondary') ?></th>
                            <th><?= __('Song Id') ?></th>
                            <th><?= __('Url') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Track Number') ?></th>
                            <th><?= __('Album Id') ?></th>
                            <th><?= __('Artist Name') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($song->songs as $songs) : ?>
                        <tr>
                            <td><?= h($songs->track_id) ?></td>
                            <td><?= h($songs->genre_primary) ?></td>
                            <td><?= h($songs->genre_secondary) ?></td>
                            <td><?= h($songs->song_id) ?></td>
                            <td><?= h($songs->url) ?></td>
                            <td><?= h($songs->title) ?></td>
                            <td><?= h($songs->track_number) ?></td>
                            <td><?= h($songs->album_id) ?></td>
                            <td><?= h($songs->artist_name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Songs', 'action' => 'view', $songs->track_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Songs', 'action' => 'edit', $songs->track_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Songs', 'action' => 'delete', $songs->track_id], ['confirm' => __('Are you sure you want to delete # {0}?', $songs->track_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
