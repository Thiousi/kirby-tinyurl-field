<?php
class TinyurlField extends TextField{
	public function __construct() {
		$this->type  = 'tinyurl';
    		$this->icon  = 'chain';
    		$this->readonly = true;
	}
	public function input() {
		$input = parent::input();
		$input->data('field', 'tinyurl');
		$input->attr('value', $this->page->tinyurl());
    		return $input;
	}
}