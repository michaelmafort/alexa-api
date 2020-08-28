<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebGrade[]|\Cake\Collection\CollectionInterface $idebGrades
 */
?>
<div class="idebGrades index content">
    <?= $this->Html->link(__('New Ideb Grade'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ideb Grades') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('location_id') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('mat') ?></th>
                    <th><?= $this->Paginator->sort('lp') ?></th>
                    <th><?= $this->Paginator->sort('avg') ?></th>
                    <th><?= $this->Paginator->sort('network') ?></th>
                    <th><?= $this->Paginator->sort('stage') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($idebGrades as $idebGrade): ?>
                <tr>
                    <td><?= $this->Number->format($idebGrade->id) ?></td>
                    <td><?= $idebGrade->has('location') ? $this->Html->link($idebGrade->location->name, ['controller' => 'Locations', 'action' => 'view', $idebGrade->location->id]) : '' ?></td>
                    <td><?= $this->Number->format($idebGrade->year) ?></td>
                    <td><?= $this->Number->format($idebGrade->mat) ?></td>
                    <td><?= $this->Number->format($idebGrade->lp) ?></td>
                    <td><?= $this->Number->format($idebGrade->avg) ?></td>
                    <td><?= h($idebGrade->network) ?></td>
                    <td><?= h($idebGrade->stage) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $idebGrade->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $idebGrade->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $idebGrade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebGrade->id)]) ?>
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
