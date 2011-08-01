<?php
//disable auto p
remove_filter ('the_content', 'wpautop');

//diable wptexturize
remove_filter ('the_content', 'wptexturize');
?>