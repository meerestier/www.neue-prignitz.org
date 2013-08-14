<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  welcome_note: 
    label: Welcome Note
    type:  textarea
    size:  small  
  text: 
    label: Text
    type:  textarea
    size:  large