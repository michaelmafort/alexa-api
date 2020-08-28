<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebApprovalsAi[]|\Cake\Collection\CollectionInterface $idebApprovalsAi
 */
?>
<div class="idebApprovalsAi index content">
    <?= $this->Html->link(__('New Ideb Approvals Ai'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ideb Approvals Ai') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('location_id') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('aprov_total') ?></th>
                    <th><?= $this->Paginator->sort('aprov_1') ?></th>
                    <th><?= $this->Paginator->sort('aprov_2') ?></th>
                    <th><?= $this->Paginator->sort('aprov_3') ?></th>
                    <th><?= $this->Paginator->sort('aprov_4') ?></th>
                    <th><?= $this->Paginator->sort('aprov_5') ?></th>
                    <th><?= $this->Paginator->sort('rendimento') ?></th>
                    <th><?= $this->Paginator->sort('network') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($idebApprovalsAi as $idebApprovalsAi): ?>
                <tr>
                    <td><?= $this->Number->format($idebApprovalsAi->id) ?></td>
                    <td><?= $idebApprovalsAi->has('location') ? $this->Html->link($idebApprovalsAi->location->name, ['controller' => 'Locations', 'action' => 'view', $idebApprovalsAi->location->id]) : '' ?></td>
                    <td><?= $this->Number->format($idebApprovalsAi->year) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_total) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_1) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_2) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_3) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_4) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAi->aprov_5) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAi->rendimento) ?></td>
                    <td><?= h($idebApprovalsAi->network) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $idebApprovalsAi->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $idebApprovalsAi->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $idebApprovalsAi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebApprovalsAi->id)]) ?>
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
