<?php
/**
 * @file
 * context_feature.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function context_feature_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'home';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        '<front>' => '<front>',
      ),
    ),
  );
  $context->reactions = array(
    'theme_html' => array(
      'class' => 'front',
    ),
  );
  $context->condition_mode = 0;
  $export['home'] = $context;

  return $export;
}
