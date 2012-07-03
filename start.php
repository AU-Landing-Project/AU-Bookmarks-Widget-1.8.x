<?php

function au_bookmarks_widget_init() {
  elgg_unregister_widget_type('bookmarks');
  elgg_register_widget_type('bookmarks', elgg_echo('bookmarks'), elgg_echo('bookmarks:widget:description'), 'all,groups', TRUE);
}

elgg_register_event_handler('init', 'system', 'au_bookmarks_widget_init');