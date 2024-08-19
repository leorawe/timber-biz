<?php
/**
 * The Template for the sidebar containing the main widget area
 *
 * @package  WordPress
 * @subpackage  Timber
 */

$context = [];
// $context['sidebar_1'] = Timber::get_widgets('sidebar-1');
Timber::render('sidebar.twig', $context);
