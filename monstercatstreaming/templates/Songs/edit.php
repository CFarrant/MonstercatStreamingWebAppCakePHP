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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $song->track_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $song->track_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Songs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="songs form content">
            <?= $this->Form->create($song) ?>
            <fieldset>
                <legend><?= __('Edit Song') ?></legend>
                <?php
                    echo $this->Form->control('genre_primary');
                    echo $this->Form->control('genre_secondary');
                    echo $this->Form->control('song_id');
                    echo $this->Form->control('url');
                    echo $this->Form->control('title');
                    echo $this->Form->control('track_number');
                    echo $this->Form->control('album_id', ['options' => $albums]);
                    echo $this->Form->control('artist_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
