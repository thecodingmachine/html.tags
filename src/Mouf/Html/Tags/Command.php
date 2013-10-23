<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;command&gt; tag in HTML.
 * The &lt;command&gt; element represents a command that the user can invoke.
 * Point
 * 
 *     A command can be part of a context menu or toolbar, using the menu element, or can be put anywhere else in the page, to define a keyboard shortcut. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Command implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 * command/ checkbox/ radio
	 * Indicates the kind of command:
	 * 
	 *     command
	 *     Normal command with an associated action.
	 *     checkbox
	 *     State or option that can be toggled.
	 *     radio
	 *     Selection of one item from a list of items. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getType() {
		return isset($this->attributes['type'])?$this->attributes['type']:null;
	}
	
	/**
	 * command/ checkbox/ radio
	 * Indicates the kind of command:
	 * 
	 *     command
	 *     Normal command with an associated action.
	 *     checkbox
	 *     State or option that can be toggled.
	 *     radio
	 *     Selection of one item from a list of items. 
	 * 
	 * @param string|ValueInterface $type
	 * @return static
	 */
	public function setType($type) {
		$this->attributes['type'] = $type;
		return $this;
	}
    /**
	 * Gives the name of the command, as shown to the user.
	 * The label attribute must be specified and must have a value that is not the empty string. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getLabel() {
		return isset($this->attributes['label'])?$this->attributes['label']:null;
	}
	
	/**
	 * Gives the name of the command, as shown to the user.
	 * The label attribute must be specified and must have a value that is not the empty string. 
	 * 
	 * @param string|ValueInterface $label
	 * @return static
	 */
	public function setLabel($label) {
		$this->attributes['label'] = $label;
		return $this;
	}
    /**
	 * valid non-empty URL potentially
	 * Gives a picture that represents the command. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getIcon() {
		return isset($this->attributes['icon'])?$this->attributes['icon']:null;
	}
	
	/**
	 * valid non-empty URL potentially
	 * Gives a picture that represents the command. 
	 * 
	 * @param string|ValueInterface $icon
	 * @return static
	 */
	public function setIcon($icon) {
		$this->attributes['icon'] = $icon;
		return $this;
	}
    /**
	 * boolean
	 * If present, indicates that the command is not available in the current state. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getDisabled() {
		return isset($this->attributes['disabled'])?$this->attributes['disabled']:null;
	}
	
	/**
	 * boolean
	 * If present, indicates that the command is not available in the current state. 
	 * 
	 * @param string|ValueInterface $disabled
	 * @return static
	 */
	public function setDisabled($disabled) {
		$this->attributes['disabled'] = $disabled;
		return $this;
	}
    /**
	 *     boolean
	 *     If present, indicates that the command is selected.
	 *     The attribute must be omitted unless the type attribute is in either the Checkbox state or the Radio state. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getChecked() {
		return isset($this->attributes['checked'])?$this->attributes['checked']:null;
	}
	
	/**
	 *     boolean
	 *     If present, indicates that the command is selected.
	 *     The attribute must be omitted unless the type attribute is in either the Checkbox state or the Radio state. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $checked
	 * @return static
	 */
	public function setChecked($checked) {
		$this->attributes['checked'] = $checked;
		return $this;
	}
    /**
	 * Gives the name of the group of commands that will be toggled when the command itself is toggled, for commands whose type attribute has the value "radio". 
	 * 
	 * @return string|ValueInterface
	 */
	public function getRadiogroup() {
		return isset($this->attributes['radiogroup'])?$this->attributes['radiogroup']:null;
	}
	
	/**
	 * Gives the name of the group of commands that will be toggled when the command itself is toggled, for commands whose type attribute has the value "radio". 
	 * 
	 * @param string|ValueInterface $radiogroup
	 * @return static
	 */
	public function setRadiogroup($radiogroup) {
		$this->attributes['radiogroup'] = $radiogroup;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<command '.$this->getAttributes().'/>';
	}
}