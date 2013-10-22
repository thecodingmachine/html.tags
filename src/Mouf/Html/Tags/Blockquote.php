<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;blockquote&gt; tag in HTML.
 * The &lt;blockquote&gt; element represents a quoted section. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Blockquote implements HtmlElementInterface {
	use GlobalAttributesTrait;
	use ChildrenTrait;
	
	/**
	 * Specifies the address in the quotation source.
	 * 
	 * @return string
	 */
	public function getCite() {
		return $this->attributes['cite'];
	}
	
	/**
	 * Specifies the address in the quotation source.
	 * 
	 * @param string $cite
	 * @return static
	 */
	public function setCite($cite) {
		$this->attributes['cite'] = $cite;
		return $this;
	}
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<pre '.$this->getAttributes().'>'.$this->renderChildren().'</pre>';
	}
}