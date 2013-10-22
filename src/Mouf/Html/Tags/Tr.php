<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;tr&gt; tag in HTML.
 * The &lt;tr&gt; element represents a row of cells in a table. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Tr implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<tr '.$this->getAttributes().'>'.$this->renderChildren().'</tr>';
	}
}