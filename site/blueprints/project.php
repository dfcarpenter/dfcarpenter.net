<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  year:
    label: Year
    type:  text
  clienturl:
    label: Url
    type: url
  stack:
    label: Stack
    type: text
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags