<?php
/**
 * Karaka
 *
 * PHP Version 8.1
 *
 * @package   Modules\Database
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

/**
 * @var \phpOMS\Views\View $this
 */

$queries      = [];
$footerView   = new \phpOMS\Views\PaginationView($this->l11nManager, $this->request, $this->response);
$footerView->setTemplate('/Web/Templates/Lists/Footer/PaginationBig');
$footerView->setPages(\count($queries) / 25);
$footerView->setPage(1);

echo $this->getData('nav')->render(); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="portlet">
            <div class="portlet-head"><?= $this->getHtml('Templates'); ?><i class="fa fa-download floatRight download btn"></i></div>
            <div class="slider">
            <table class="default sticky">
                <thead>
                <tr>
                    <td class="wf-100"><?= $this->getHtml('Name'); ?>
                    <td><?= $this->getHtml('Creator'); ?>
                    <td><?= $this->getHtml('Created'); ?>
                <tbody>
                <?php $count = 0; foreach ($queries as $key => $value) : ++$count;
                $url         = \phpOMS\Uri\UriFactory::build('database/template/single?{?}&id=' . $value->getId()); ?>
                <tr>
                    <td><a href="<?= $url; ?>"><?= $this->printHtml($value->name); ?></a>
                    <td><a href="<?= $url; ?>"><?= $this->printHtml($value->createdBy->getId()); ?></a>
                    <td><a href="<?= $url; ?>"><?= $this->printHtml($value->createdAt->format('Y-m-d H:i:s')); ?></a>
                <?php endforeach; ?>
                <?php if ($count === 0) : ?>
                <tr><td colspan="5" class="empty"><?= $this->getHtml('Empty', '0', '0'); ?>
                        <?php endif; ?>
            </table>
            </div>
        </div>
    </div>
</div>
