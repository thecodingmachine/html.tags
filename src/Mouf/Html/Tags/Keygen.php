<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;keygen&gt; tag in HTML.
 * The &lt;keygen&gt; element represents a key pair generator control.
 * Point
 * 
 *     When the control's form is submitted, the private key is stored in the local keystore, and the public key is packaged and sent to the server. 
 * 
 * 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Keygen implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 * unique name
	 * Represents the element's name. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return $this->attributes['name'];
	}
	
	/**
	 * unique name
	 * Represents the element's name. 
	 * 
	 * @param string|ValueInterface $name
	 * @return static
	 */
	public function setName($name) {
		$this->attributes['name'] = $name;
		return $this;
	}
    /**
	 *     boolean
	 *     Allows the author to indicate that a control is to be focused as soon as the page is loaded 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getAutofocus() {
		return $this->attributes['autofocus'];
	}
	
	/**
	 *     boolean
	 *     Allows the author to indicate that a control is to be focused as soon as the page is loaded 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $autofocus
	 * @return static
	 */
	public function setAutofocus($autofocus) {
		$this->attributes['autofocus'] = $autofocus;
		return $this;
	}
    /**
	 * string
	 * A challenge string that is submitted along with the public key.
	 * 
	 * @return string|ValueInterface
	 */
	public function getChallenge() {
		return $this->attributes['challenge'];
	}
	
	/**
	 * string
	 * A challenge string that is submitted along with the public key.
	 * 
	 * @param string|ValueInterface $challenge
	 * @return static
	 */
	public function setChallenge($challenge) {
		$this->attributes['challenge'] = $challenge;
		return $this;
	}
    /**
	 * boolean
	 * If present, make the control non-interactive and to prevent its value from being submitted. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getDisabled() {
		return $this->attributes['disabled'];
	}
	
	/**
	 * boolean
	 * If present, make the control non-interactive and to prevent its value from being submitted. 
	 * 
	 * @param string|ValueInterface $disabled
	 * @return static
	 */
	public function setDisabled($disabled) {
		$this->attributes['disabled'] = $disabled;
		return $this;
	}
    /**
	 *     the ID of a form element in the element's owner
	 *     Associate the keygen element with its form owner.
	 *     By default, the keygen element is associated with its nearest ancestor form element. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getForm() {
		return $this->attributes['form'];
	}
	
	/**
	 *     the ID of a form element in the element's owner
	 *     Associate the keygen element with its form owner.
	 *     By default, the keygen element is associated with its nearest ancestor form element. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $form
	 * @return static
	 */
	public function setForm($form) {
		$this->attributes['form'] = $form;
		return $this;
	}
    /**
	 * rsa
	 * The type of key generated. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getKeytype() {
		return $this->attributes['keytype'];
	}
	
	/**
	 * rsa
	 * The type of key generated. 
	 * 
	 * @param string|ValueInterface $keytype
	 * @return static
	 */
	public function setKeytype($keytype) {
		$this->attributes['keytype'] = $keytype;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<keygen '.$this->getAttributes().'>'.$this->renderChildren().'</keygen>';
	}
}