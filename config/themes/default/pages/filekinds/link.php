<div id="download_box">

  <a id="clickable-zone" href="<?php echo Subfolio::current_file('link') ?>" target="<?php echo Subfolio::current_file('target') ?>">
    <!-- ?download=true would be provided by the CurrentFile() method -->
    <!-- By adding an option for target, we can use this box for more kinds... (links for example) -->
    <!-- Icon -->
    <i class='icon icon__<?php echo Subfolio::current_file('icon') ?>'></i>
    <!-- Filename / comment -->
    <p id="filename"><?php if(Subfolio::current_file('tag')<>'') { ?><i class="tag <?php echo Subfolio::current_file('tag') ?>"></i> &nbsp; <?php } ?><?php echo FileFolder::fix_display_name(Subfolio::current_file('filename'), true, true, false) ?></p>
  </a>
  <dl>
    <dt><?php echo SubfolioLanguage::get_text('kind') ?></dt><dd><?php echo Subfolio::current_file('kind') ?></dd>
    <dt><?php echo SubfolioLanguage::get_text('comment') ?></dt><dd><?php echo Subfolio::current_file('comment') ?></dd>
  </dl>

</div>