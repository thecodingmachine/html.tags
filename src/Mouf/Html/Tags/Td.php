<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;td&gt; tag in HTML.
 * The &lt;td&gt; element represents a data cell in a table. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Td implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * This attribute gives the number of columns respectively that the cell is to span.
	 * 
	 * @return string|ValueInterface
	 */
	public function getColspan() {
		return $this->attributes['colspan'];
	}
	
	/**
	 * This attribute gives the number of columns respectively that the cell is to span.
	 * 
	 * @param string|ValueInterface $colspan
	 * @return static
	 */
	public function setColspan($colspan) {
		$this->attributes['colspan'] = $colspan;
		return $this;
	}
    /**
	 * This attribute gives the number of rows respectively that the cell is to span. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getRowspan() {
		return $this->attributes['rowspan'];
	}
	
	/**
	 * This attribute gives the number of rows respectively that the cell is to span. 
	 * 
	 * @param string|ValueInterface $rowspan
	 * @return static
	 */
	public function setRowspan($rowspan) {
		$this->attributes['rowspan'] = $rowspan;
		return $this;
	}
    /**
	 * The value of this attribute must have the value of an id attribute of the th element that is targeted.
	 * 
	 * @return string|ValueInterface
	 */
	public function getHeaders() {
		return $this->attributes['headers'];
	}
	
	/**
	 * The value of this attribute must have the value of an id attribute of the th element that is targeted.
	 * 
	 * @param string|ValueInterface $headers
	 * @return static
	 */
	public function setHeaders($headers) {
		$this->attributes['headers'] = $headers;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<td '.$this->getAttributes().'>'.$this->renderChildren().'</td>';
	}
}