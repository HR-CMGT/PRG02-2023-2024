<?php
$activeItem = $_GET['activeItem'] ?? 1;
?>
<nav class="panel m-3" >
    <p class="panel-heading">
        Overzicht lessen
    </p>
    <p class="panel-tabs">
        <?php for($i = 1 ; $i <= 7 ; $i++) { ?>
                <a
                    href="../../les<?= $i ?>/exercises/?activeItem=<?= $i ?>"
                    class="<?= $activeItem == $i ? 'is-active' : ''?>">Les<?= $i ?></a>
        <?php } ?>
    </p>
    <a class="panel-block" href="../../les<?= $activeItem ?>/examples/">
        <span class="panel-icon">
          <i class="fa-solid fa-book"></i>
        </span>
        Examples
    </a>
    <a class="panel-block" href="../../les<?= $activeItem ?>/start/">
        <span class="panel-icon">
          <i class="fa-solid fa-book"></i>
        </span>
        Music Collection
    </a>
</nav>