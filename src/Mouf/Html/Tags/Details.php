<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;details&gt; tag in HTML.
 * The &lt;details&gt; element represents a disclosure widget from which the user can obtain additional information or controls.
 * Point
 * 
 *     The details element include a summary element followed by flow content.
 *     The summary element child of the element, if any, represents the summary or legend of the details. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Details implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * boolean
	 * If present, it indicates that the details are to be shown to the user. If the attribute is absent, the details are not to be shown.
	 * 
	 * @return string|ValueInterface
	 */
	public function getOpen() {
		return $this->attributes['open'];
	}
	
	/**
	 * boolean
	 * If present, it indicates that the details are to be shown to the user. If the attribute is absent, the details are not to be shown.
	 * 
	 * @param string|ValueInterface $open
	 * @return static
	 */
	public function setOpen($open) {
		$this->attributes['open'] = $open;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<details '.$this->getAttributes().'>'.$this->renderChildren().'</details>';
	}
}