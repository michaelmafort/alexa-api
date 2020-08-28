<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebProjection[]|\Cake\Collection\CollectionInterface $idebProjections
 */
?>
<div class="idebProjections index content">
    <?= $this->Html->link(__('New Ideb Projection'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ideb Projections') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('location_id') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('score') ?></th>
                    <th><?= $this->Paginator->sort('network') ?></th>
                    <th><?= $this->Paginator->sort('stage') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($idebProjections as $idebProjection): ?>
                <tr>
                    <td><?= $this->Number->format($idebProjection->id) ?></td>
                    <td><?= $idebProjection->has('location') ? $this->Html->link($idebProjection->location->name, ['controller' => 'Locations', 'action' => 'view', $idebProjection->location->id]) : '' ?></td>
                    <td><?= $this->Number->format($idebProjection->year) ?></td>
                    <td><?= $this->Number->format($idebProjection->score) ?></td>
                    <td><?= h($idebProjection->network) ?></td>
                    <td><?= h($idebProjection->stage) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $idebProjection->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $idebProjection->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $idebProjection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebProjection->id)]) ?>
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
