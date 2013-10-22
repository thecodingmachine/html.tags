<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;small&gt; tag in HTML.
 * The &lt;small&gt; element represents side comments such as small print.
 * Point
 * 
 *     Small print:
 *         features disclaimers
 *         caveats
 *         legal restrictions
 *         copyrights [Example A] ... 
 * 
 *     Small print is also sometimes used for attribution, or for satisfying licensing requirements.
 *     This element is only intended for short runs of text. It should not be used for extended spans of text. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Small implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<small '.$this->getAttributes().'>'.$this->renderChildren().'</small>';
	}
}