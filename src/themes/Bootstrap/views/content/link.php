<a href='<?php echo $el->href; ?>'<?php echo isset($el->onclick) ? ' onclick="'.$el->onclick.'"' : ''; ?><?php echo isset($el->style) ? ' style="'.$el->style.'"' : ''; ?><?php echo isset($el->class) ? ' class="'.$el->class.'"' : ''; ?> title='<?php echo $el->title; ?>'><?php echo $el->imgParameters; ?><?php echo str_replace(array('{{title}}', '{{gibbonThemeName}}'), array($el->title, $this->session->get('gibbonThemeName')), $el->prompt); ?></a>