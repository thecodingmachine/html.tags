<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;q&gt; tag in HTML.
 * The &lt;q&gt; element represents some phrasing content quoted from another source.
 * Point
 * 
 *     Content inside a q element must be quoted from another source. If it has address, a cite attribute should present.
 *     The use of q elements to mark up quotations is entirely optional; using explicit quotation punctuation without q elements is just as correct.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Q implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 *  valid URL potentially surrounded by spaces
	 * Specifies the address in the quotation source.
	 * 
	 * @return string|ValueInterface
	 */
	public function getCite() {
		return $this->attributes['cite'];
	}
	
	/**
	 *  valid URL potentially surrounded by spaces
	 * Specifies the address in the quotation source.
	 * 
	 * @param string|ValueInterface $cite
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
		echo '<q '.$this->getAttributes().'>'.$this->renderChildren().'</q>';
	}
}