<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebApprovalsEm[]|\Cake\Collection\CollectionInterface $idebApprovalsEm
 */
?>
<div class="idebApprovalsEm index content">
    <?= $this->Html->link(__('New Ideb Approvals Em'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ideb Approvals Em') ?></h3>
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
                    <th><?= $this->Paginator->sort('rendimento') ?></th>
                    <th><?= $this->Paginator->sort('network') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($idebApprovalsEm as $idebApprovalsEm): ?>
                <tr>
                    <td><?= $this->Number->format($idebApprovalsEm->id) ?></td>
                    <td><?= $idebApprovalsEm->has('location') ? $this->Html->link($idebApprovalsEm->location->name, ['controller' => 'Locations', 'action' => 'view', $idebApprovalsEm->location->id]) : '' ?></td>
                    <td><?= $this->Number->format($idebApprovalsEm->year) ?></td>
                    <td><?= $this->Number->format($idebApprovalsEm->aprov_total) ?></td>
                    <td><?= $this->Number->format($idebApprovalsEm->aprov_1) ?></td>
                    <td><?= $this->Number->format($idebApprovalsEm->aprov_2) ?></td>
                    <td><?= $this->Number->format($idebApprovalsEm->aprov_3) ?></td>
                    <td><?= $this->Number->format($idebApprovalsEm->aprov_4) ?></td>
                    <td><?= $this->Number->format($idebApprovalsEm->rendimento) ?></td>
                    <td><?= h($idebApprovalsEm->network) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $idebApprovalsEm->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $idebApprovalsEm->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $idebApprovalsEm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebApprovalsEm->id)]) ?>
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
