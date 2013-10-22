<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;menu&gt; tag in HTML.
 * The &lt;menu&gt; element represents a list of commands. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Menu implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * context/ toolbar/ list
	 * Indicates the kind of menu being declared:
	 * 
	 *     context
	 *     the commands of a context menu, and the user can only interact with the commands if that context menu is activated.
	 *     toolbar
	 *     A list of active commands that the user can immediately interact with.
	 *     list
	 *     an unordered list of items (each represented by an li element), each of which represents a command that the user can perform or activate, or, if the element has no li element children, flow content describing available commands. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getType() {
		return $this->attributes['type'];
	}
	
	/**
	 * context/ toolbar/ list
	 * Indicates the kind of menu being declared:
	 * 
	 *     context
	 *     the commands of a context menu, and the user can only interact with the commands if that context menu is activated.
	 *     toolbar
	 *     A list of active commands that the user can immediately interact with.
	 *     list
	 *     an unordered list of items (each represented by an li element), each of which represents a command that the user can perform or activate, or, if the element has no li element children, flow content describing available commands. 
	 * 
	 * @param string|ValueInterface $type
	 * @return static
	 */
	public function setType($type) {
		$this->attributes['type'] = $type;
		return $this;
	}
    /**
	 * string
	 * Gives the label of the menu. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getLabel() {
		return $this->attributes['label'];
	}
	
	/**
	 * string
	 * Gives the label of the menu. 
	 * 
	 * @param string|ValueInterface $label
	 * @return static
	 */
	public function setLabel($label) {
		$this->attributes['label'] = $label;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<menu '.$this->getAttributes().'>'.$this->renderChildren().'</menu>';
	}
}