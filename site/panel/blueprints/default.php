<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  text: 
    label: Text
    type:  textarea
    size:  large
  textblock_1: 
    label: Textblock 1
    type:  textarea
    size:  large
  textblock_2: 
    label: Textblock 2
    type:  textarea
    size:  large  
    columns: 
    label: Column Layout
    type:  text
