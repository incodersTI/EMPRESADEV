---
description: Default layout

'[session]':
    security: all

'[pageNav]':

'[newsletter]': {  }
---
<?
function onInit()
{
}

function onStart()
{
}

function onEnd()
{
}

?>
---
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?= App::getLocale(); ?>">
<head>
    <?= partial('head'); ?>
</head>
<body class="<?= $this->page->bodyClass; ?>">

    <header class="header">
        <?= partial('nav/menu'); ?>
    </header>

    <main role="main">
        <div id="page-wrapper">
            <?= partial('breadcrumb'); ?>

            <?php if (isset($this->page->heading)) { ?>
                <?= partial('heading', ['heading' => $this->page->heading]); ?>
            <?php } ?>

            <?= page(); ?>
        </div>
    </main>

    <footer class="footer pt-4">
        <div class="footer-top">
            <?= component('newsletter'); ?>
        </div>
        
        <div class="footer-bottom">
            <?= partial('footer'); ?>
        </div>
    </footer>
    <div id="notification">
        <?= partial('flash'); ?>
    </div>
    <?= partial('scripts'); ?>
</body>
</html>