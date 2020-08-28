<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ideb $ideb
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ideb'), ['action' => 'edit', $ideb->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ideb'), ['action' => 'delete', $ideb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ideb->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ideb'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ideb'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ideb view content">
            <h3><?= h($ideb->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= $ideb->has('location') ? $this->Html->link($ideb->location->name, ['controller' => 'Locations', 'action' => 'view', $ideb->location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Network') ?></th>
                    <td><?= h($ideb->network) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stage') ?></th>
                    <td><?= h($ideb->stage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ideb->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= $this->Number->format($ideb->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Score') ?></th>
                    <td><?= $this->Number->format($ideb->score) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
