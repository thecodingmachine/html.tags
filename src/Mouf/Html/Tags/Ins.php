<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;ins&gt; tag in HTML.
 * The &lt;ins&gt; element represents an addition to the document.
 * Point
 * 
 *     This elements should not cross implied paragraph boundaries. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Ins implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * Specify the address of a document that explains the change. For example, the minutes of meeting. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getCite() {
		return $this->attributes['cite'];
	}
	
	/**
	 * Specify the address of a document that explains the change. For example, the minutes of meeting. 
	 * 
	 * @param string|ValueInterface $cite
	 * @return static
	 */
	public function setCite($cite) {
		$this->attributes['cite'] = $cite;
		return $this;
	}
    /**
	 * Specify the time and date of the change.
	 * 
	 * @return string|ValueInterface
	 */
	public function getDatetime() {
		return $this->attributes['datetime'];
	}
	
	/**
	 * Specify the time and date of the change.
	 * 
	 * @param string|ValueInterface $datetime
	 * @return static
	 */
	public function setDatetime($datetime) {
		$this->attributes['datetime'] = $datetime;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<ins '.$this->getAttributes().'>'.$this->renderChildren().'</ins>';
	}
}