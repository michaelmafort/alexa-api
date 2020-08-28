<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebProjection $idebProjection
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ideb Projection'), ['action' => 'edit', $idebProjection->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ideb Projection'), ['action' => 'delete', $idebProjection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebProjection->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ideb Projections'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ideb Projection'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="idebProjections view content">
            <h3><?= h($idebProjection->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= $idebProjection->has('location') ? $this->Html->link($idebProjection->location->name, ['controller' => 'Locations', 'action' => 'view', $idebProjection->location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Network') ?></th>
                    <td><?= h($idebProjection->network) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stage') ?></th>
                    <td><?= h($idebProjection->stage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($idebProjection->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= $this->Number->format($idebProjection->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Score') ?></th>
                    <td><?= $this->Number->format($idebProjection->score) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
