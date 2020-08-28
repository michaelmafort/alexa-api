<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ideb[]|\Cake\Collection\CollectionInterface $ideb
 */
?>
<div class="ideb index content">
    <?= $this->Html->link(__('New Ideb'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ideb') ?></h3>
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
                <?php foreach ($ideb as $ideb): ?>
                <tr>
                    <td><?= $this->Number->format($ideb->id) ?></td>
                    <td><?= $ideb->has('location') ? $this->Html->link($ideb->location->name, ['controller' => 'Locations', 'action' => 'view', $ideb->location->id]) : '' ?></td>
                    <td><?= $this->Number->format($ideb->year) ?></td>
                    <td><?= $this->Number->format($ideb->score) ?></td>
                    <td><?= h($ideb->network) ?></td>
                    <td><?= h($ideb->stage) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ideb->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ideb->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ideb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ideb->id)]) ?>
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
