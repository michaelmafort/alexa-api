<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\IdebGrade $idebGrade
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ideb Grade'), ['action' => 'edit', $idebGrade->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ideb Grade'), ['action' => 'delete', $idebGrade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebGrade->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ideb Grades'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ideb Grade'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="idebGrades view content">
            <h3><?= h($idebGrade->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= $idebGrade->has('location') ? $this->Html->link($idebGrade->location->name, ['controller' => 'Locations', 'action' => 'view', $idebGrade->location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Network') ?></th>
                    <td><?= h($idebGrade->network) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stage') ?></th>
                    <td><?= h($idebGrade->stage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($idebGrade->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= $this->Number->format($idebGrade->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mat') ?></th>
                    <td><?= $this->Number->format($idebGrade->mat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lp') ?></th>
                    <td><?= $this->Number->format($idebGrade->lp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Avg') ?></th>
                    <td><?= $this->Number->format($idebGrade->avg) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
