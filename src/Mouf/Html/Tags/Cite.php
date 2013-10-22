<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;cite&gt; tag in HTML.
 * The &lt;cite&gt; element represents the title of a work.
 * Point
 * 
 *     Example of work:
 *         book
 *         paper
 *         essay
 *         poem
 *         score
 *         song
 *         script
 *         film [Example A]
 *         TV show
 *         game
 *         sculpture
 *         theatre production
 *         opera
 *         musical ... 
 * 
 *     A person's name is not the title of a work. This element must therefore not be used to mark up people's names.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Cite implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<cite '.$this->getAttributes().'>'.$this->renderChildren().'</cite>';
	}
}