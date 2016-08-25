<?php
class TinyurlField extends TextField{
	static public $assets = array(
		'js' => array(
			'clipboard.min.js',
			'tinyurl.js'
		),
		'css' => array(
			'style.css'
		)
	 );
	public function __construct() {
		$this->type  = 'tinyurl';
    $this->icon  = 'clipboard';
	}
	public function input() {
		$tinyurl = parent::input();
		$tinyurl->data('field', $this->name());
		$tinyurl->attr('value', $this->page->tinyurl());
		$tinyurl->attr('readonly', true);
		$tinyurl->addClass('input-with-copybtn');
		$tinyurl->attr('data-clipboard-text', $this->page->tinyurl());
		return $tinyurl;
	}
}
