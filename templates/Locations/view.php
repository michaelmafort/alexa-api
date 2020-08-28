<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location $location
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Locations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Location'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="locations view content">
            <h3><?= h($location->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Parent Location') ?></th>
                    <td><?= $location->has('parent_location') ? $this->Html->link($location->parent_location->name, ['controller' => 'Locations', 'action' => 'view', $location->parent_location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($location->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($location->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($location->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Ideb') ?></h4>
                <?php if (!empty($location->ideb)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Location Id') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Score') ?></th>
                            <th><?= __('Network') ?></th>
                            <th><?= __('Stage') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($location->ideb as $ideb) : ?>
                        <tr>
                            <td><?= h($ideb->id) ?></td>
                            <td><?= h($ideb->location_id) ?></td>
                            <td><?= h($ideb->year) ?></td>
                            <td><?= h($ideb->score) ?></td>
                            <td><?= h($ideb->network) ?></td>
                            <td><?= h($ideb->stage) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ideb', 'action' => 'view', $ideb->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ideb', 'action' => 'edit', $ideb->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ideb', 'action' => 'delete', $ideb->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ideb->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ideb Approvals Af') ?></h4>
                <?php if (!empty($location->ideb_approvals_af)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Location Id') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Aprov Total') ?></th>
                            <th><?= __('Aprov 6') ?></th>
                            <th><?= __('Aprov 7') ?></th>
                            <th><?= __('Aprov 8') ?></th>
                            <th><?= __('Aprov 9') ?></th>
                            <th><?= __('Rendimento') ?></th>
                            <th><?= __('Network') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($location->ideb_approvals_af as $idebApprovalsAf) : ?>
                        <tr>
                            <td><?= h($idebApprovalsAf->id) ?></td>
                            <td><?= h($idebApprovalsAf->location_id) ?></td>
                            <td><?= h($idebApprovalsAf->year) ?></td>
                            <td><?= h($idebApprovalsAf->aprov_total) ?></td>
                            <td><?= h($idebApprovalsAf->aprov_6) ?></td>
                            <td><?= h($idebApprovalsAf->aprov_7) ?></td>
                            <td><?= h($idebApprovalsAf->aprov_8) ?></td>
                            <td><?= h($idebApprovalsAf->aprov_9) ?></td>
                            <td><?= h($idebApprovalsAf->rendimento) ?></td>
                            <td><?= h($idebApprovalsAf->network) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'IdebApprovalsAf', 'action' => 'view', $idebApprovalsAf->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'IdebApprovalsAf', 'action' => 'edit', $idebApprovalsAf->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'IdebApprovalsAf', 'action' => 'delete', $idebApprovalsAf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebApprovalsAf->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ideb Approvals Ai') ?></h4>
                <?php if (!empty($location->ideb_approvals_ai)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Location Id') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Aprov Total') ?></th>
                            <th><?= __('Aprov 1') ?></th>
                            <th><?= __('Aprov 2') ?></th>
                            <th><?= __('Aprov 3') ?></th>
                            <th><?= __('Aprov 4') ?></th>
                            <th><?= __('Aprov 5') ?></th>
                            <th><?= __('Rendimento') ?></th>
                            <th><?= __('Network') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($location->ideb_approvals_ai as $idebApprovalsAi) : ?>
                        <tr>
                            <td><?= h($idebApprovalsAi->id) ?></td>
                            <td><?= h($idebApprovalsAi->location_id) ?></td>
                            <td><?= h($idebApprovalsAi->year) ?></td>
                            <td><?= h($idebApprovalsAi->aprov_total) ?></td>
                            <td><?= h($idebApprovalsAi->aprov_1) ?></td>
                            <td><?= h($idebApprovalsAi->aprov_2) ?></td>
                            <td><?= h($idebApprovalsAi->aprov_3) ?></td>
                            <td><?= h($idebApprovalsAi->aprov_4) ?></td>
                            <td><?= h($idebApprovalsAi->aprov_5) ?></td>
                            <td><?= h($idebApprovalsAi->rendimento) ?></td>
                            <td><?= h($idebApprovalsAi->network) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'IdebApprovalsAi', 'action' => 'view', $idebApprovalsAi->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'IdebApprovalsAi', 'action' => 'edit', $idebApprovalsAi->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'IdebApprovalsAi', 'action' => 'delete', $idebApprovalsAi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebApprovalsAi->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ideb Approvals Em') ?></h4>
                <?php if (!empty($location->ideb_approvals_em)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Location Id') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Aprov Total') ?></th>
                            <th><?= __('Aprov 1') ?></th>
                            <th><?= __('Aprov 2') ?></th>
                            <th><?= __('Aprov 3') ?></th>
                            <th><?= __('Aprov 4') ?></th>
                            <th><?= __('Rendimento') ?></th>
                            <th><?= __('Network') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($location->ideb_approvals_em as $idebApprovalsEm) : ?>
                        <tr>
                            <td><?= h($idebApprovalsEm->id) ?></td>
                            <td><?= h($idebApprovalsEm->location_id) ?></td>
                            <td><?= h($idebApprovalsEm->year) ?></td>
                            <td><?= h($idebApprovalsEm->aprov_total) ?></td>
                            <td><?= h($idebApprovalsEm->aprov_1) ?></td>
                            <td><?= h($idebApprovalsEm->aprov_2) ?></td>
                            <td><?= h($idebApprovalsEm->aprov_3) ?></td>
                            <td><?= h($idebApprovalsEm->aprov_4) ?></td>
                            <td><?= h($idebApprovalsEm->rendimento) ?></td>
                            <td><?= h($idebApprovalsEm->network) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'IdebApprovalsEm', 'action' => 'view', $idebApprovalsEm->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'IdebApprovalsEm', 'action' => 'edit', $idebApprovalsEm->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'IdebApprovalsEm', 'action' => 'delete', $idebApprovalsEm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebApprovalsEm->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ideb Grades') ?></h4>
                <?php if (!empty($location->ideb_grades)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Location Id') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Mat') ?></th>
                            <th><?= __('Lp') ?></th>
                            <th><?= __('Avg') ?></th>
                            <th><?= __('Network') ?></th>
                            <th><?= __('Stage') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($location->ideb_grades as $idebGrades) : ?>
                        <tr>
                            <td><?= h($idebGrades->id) ?></td>
                            <td><?= h($idebGrades->location_id) ?></td>
                            <td><?= h($idebGrades->year) ?></td>
                            <td><?= h($idebGrades->mat) ?></td>
                            <td><?= h($idebGrades->lp) ?></td>
                            <td><?= h($idebGrades->avg) ?></td>
                            <td><?= h($idebGrades->network) ?></td>
                            <td><?= h($idebGrades->stage) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'IdebGrades', 'action' => 'view', $idebGrades->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'IdebGrades', 'action' => 'edit', $idebGrades->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'IdebGrades', 'action' => 'delete', $idebGrades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebGrades->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ideb Projections') ?></h4>
                <?php if (!empty($location->ideb_projections)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Location Id') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Score') ?></th>
                            <th><?= __('Network') ?></th>
                            <th><?= __('Stage') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($location->ideb_projections as $idebProjections) : ?>
                        <tr>
                            <td><?= h($idebProjections->id) ?></td>
                            <td><?= h($idebProjections->location_id) ?></td>
                            <td><?= h($idebProjections->year) ?></td>
                            <td><?= h($idebProjections->score) ?></td>
                            <td><?= h($idebProjections->network) ?></td>
                            <td><?= h($idebProjections->stage) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'IdebProjections', 'action' => 'view', $idebProjections->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'IdebProjections', 'action' => 'edit', $idebProjections->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'IdebProjections', 'action' => 'delete', $idebProjections->id], ['confirm' => __('Are you sure you want to delete # {0}?', $idebProjections->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Locations') ?></h4>
                <?php if (!empty($location->child_locations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Parent Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Type') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($location->child_locations as $childLocations) : ?>
                        <tr>
                            <td><?= h($childLocations->id) ?></td>
                            <td><?= h($childLocations->parent_id) ?></td>
                            <td><?= h($childLocations->name) ?></td>
                            <td><?= h($childLocations->type) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Locations', 'action' => 'view', $childLocations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Locations', 'action' => 'edit', $childLocations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Locations', 'action' => 'delete', $childLocations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childLocations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
