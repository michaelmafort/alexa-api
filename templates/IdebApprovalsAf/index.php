<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebApprovalsAf[]|\Cake\Collection\CollectionInterface $idebApprovalsAf
 */
?>
<div class="idebApprovalsAf index content">
    <?= $this->Html->link(__('New Ideb Approvals Af'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ideb Approvals Af') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('location_id') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('aprov_total') ?></th>
                    <th><?= $this->Paginator->sort('aprov_6') ?></th>
                    <th><?= $this->Paginator->sort('aprov_7') ?></th>
                    <th><?= $this->Paginator->sort('aprov_8') ?></th>
                    <th><?= $this->Paginator->sort('aprov_9') ?></th>
                    <th><?= $this->Paginator->sort('rendimento') ?></th>
                    <th><?= $this->Paginator->sort('network') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($idebApprovalsAf as $idebApprovalsAf): ?>
                <tr>
                    <td><?= $this->Number->format($idebApprovalsAf->id) ?></td>
                    <td><?= $idebApprovalsAf->has('location') ? $this->Html->link($idebApprovalsAf->location->name, ['controller' => 'Locations', 'action' => 'view', $idebApprovalsAf->location->id]) : '' ?></td>
                    <td><?= $this->Number->format($idebApprovalsAf->year) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAf->aprov_total) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAf->aprov_6) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAf->aprov_7) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAf->aprov_8) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAf->aprov_9) ?></td>
                    <td><?= $this->Number->format($idebApprovalsAf->rendimento) ?></td>
                    <td><?= h($idebApprovalsAf->network) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $idebApprovalsAf->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $idebApprovalsAf->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $idebApprovalsAf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebApprovalsAf->id)]) ?>
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
