<?php
/**
 * Jingga
 *
 * PHP Version 8.2
 *
 * @package   Modules\Database
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

echo $this->data['nav']->render(); ?>

<div class="tabview tab-2">
    <div class="box">
        <ul class="tab-links">
            <li><label for="c-tab-1"><?= $this->getHtml('General'); ?></label>
            <li><label for="c-tab-2"><?= $this->getHtml('Modules'); ?></label>
            <li><label for="c-tab-3"><?= $this->getHtml('Elements'); ?></label>
            <li><label for="c-tab-4"><?= $this->getHtml('Fixdata'); ?></label>
            <li><label for="c-tab-5"><?= $this->getHtml('Calculation'); ?></label>
            <li><label for="c-tab-6"><?= $this->getHtml('Dataformat'); ?></label>
            <li><label for="c-tab-7"><?= $this->getHtml('Headlines'); ?></label>
            <li><label for="c-tab-8"><?= $this->getHtml('Permissions'); ?></label>
            <li><label for="c-tab-9"><?= $this->getHtml('Options'); ?></label>
        </ul>
    </div>
    <div class="tab-content">
        <input type="radio" id="c-tab-1" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-1' ? ' checked' : ''; ?>>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12">
                    <section class="box wf-100">
                        <header><h1><?= $this->getHtml('General'); ?></h1></header>
                        <div class="inner">
                            <form>
                                <table class="layout">
                                    <tr><td><label for="iStatus"><?= $this->getHtml('Status'); ?></label>
                                    <tr><td colspan="2"><input type="submit" value="<?= $this->getHtml('Next'); ?>">
                                </table>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <input type="radio" id="c-tab-2" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-2' ? ' checked' : ''; ?>>
        <div class="tab">
            <div class="row">
                <div class="col-xs-12">
                    <section class="box wf-100">
                        <header><h1><?= $this->getHtml('Query'); ?></h1></header>
                        <div class="inner">
                            <form>
                                <table class="layout">
                                    <tr><td><label for="iStatus"><?= $this->getHtml('Status'); ?></label>
                                    <tr><td colspan="2"><input type="submit" value="<?= $this->getHtml('Next'); ?>">
                                </table>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <input type="radio" id="c-tab-3" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-3' ? ' checked' : ''; ?>>
        <div class="tab">
        </div>

        <input type="radio" id="c-tab-4" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-4' ? ' checked' : ''; ?>>
        <div class="tab">
        </div>

        <input type="radio" id="c-tab-5" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-5' ? ' checked' : ''; ?>>
        <div class="tab">
        </div>

        <input type="radio" id="c-tab-6" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-6' ? ' checked' : ''; ?>>
        <div class="tab">
        </div>

        <input type="radio" id="c-tab-7" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-7' ? ' checked' : ''; ?>>
        <div class="tab">
        </div>

        <input type="radio" id="c-tab-8" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-8' ? ' checked' : ''; ?>>
        <div class="tab">
        </div>

        <input type="radio" id="c-tab-9" name="tabular-2"<?= $this->request->uri->fragment === 'c-tab-9' ? ' checked' : ''; ?>>
        <div class="tab">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <div class="box wf-100">
            <table class="default sticky">
                <caption><?= $this->getHtml('Result'); ?><i class="g-icon end-xs download btn">download</i></caption>
                <thead>
                <tbody>
                <tr><td colspan="1" class="empty"><?= $this->getHtml('Empty', '0', '0'); ?>
            </table>
        </div>
    </div>
</div>