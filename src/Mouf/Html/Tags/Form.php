<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;form&gt; tag in HTML.
 * The form element represents a user-submittable form.
 * Point
 * 
 *     Some of which can represent editable values that can be submitted to a server for processing. 
 * 
 * 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Form implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * Specify the form-submission action for the element. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getAction() {
		return isset($this->attributes['action'])?$this->attributes['action']:null;
	}
	
	/**
	 * Specify the form-submission action for the element. 
	 * 
	 * @param string|ValueInterface $action
	 * @return static
	 */
	public function setAction($action) {
		$this->attributes['action'] = $action;
		return $this;
	}
    /**
	 * get/ post
	 * Specify the HTTP method with which a UA is meant to associate this element for form submission.
	 * The missing value default for this attributes is the GET state.
	 * 
	 *     get
	 *     Indicating the HTTP GET method.
	 *     post
	 *     Indicating the HTTP POST method. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMethod() {
		return isset($this->attributes['method'])?$this->attributes['method']:null;
	}
	
	/**
	 * get/ post
	 * Specify the HTTP method with which a UA is meant to associate this element for form submission.
	 * The missing value default for this attributes is the GET state.
	 * 
	 *     get
	 *     Indicating the HTTP GET method.
	 *     post
	 *     Indicating the HTTP POST method. 
	 * 
	 * @param string|ValueInterface $method
	 * @return static
	 */
	public function setMethod($method) {
		$this->attributes['method'] = $method;
		return $this;
	}
    /**
	 * on/ off
	 * Specifies whether the element represents a form for which by default a UA is meant to store the values entered into its input elements by the user (so that the UA can pre-fill the form later).
	 * 
	 *     on
	 *     The on state indicates that the value is not particularly sensitive and the user can expect to be able to rely on his user agent to remember values he has entered for that control.
	 *     off
	 *     The off state indicates either that the control's input data is particularly sensitive (for example the activation code for a nuclear weapon); or that it is a value that will never be reused (for example a one-time-key for a bank login) and the user will therefore have to explicitly enter the data each time, instead of being able to rely on the UA to prefill the value for him; or that the document provides its own autocomplete mechanism and does not want the user agent to provide autocompletion values. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getAutocomplete() {
		return isset($this->attributes['autocomplete'])?$this->attributes['autocomplete']:null;
	}
	
	/**
	 * on/ off
	 * Specifies whether the element represents a form for which by default a UA is meant to store the values entered into its input elements by the user (so that the UA can pre-fill the form later).
	 * 
	 *     on
	 *     The on state indicates that the value is not particularly sensitive and the user can expect to be able to rely on his user agent to remember values he has entered for that control.
	 *     off
	 *     The off state indicates either that the control's input data is particularly sensitive (for example the activation code for a nuclear weapon); or that it is a value that will never be reused (for example a one-time-key for a bank login) and the user will therefore have to explicitly enter the data each time, instead of being able to rely on the UA to prefill the value for him; or that the document provides its own autocomplete mechanism and does not want the user agent to provide autocompletion values. 
	 * 
	 * @param string|ValueInterface $autocomplete
	 * @return static
	 */
	public function setAutocomplete($autocomplete) {
		$this->attributes['autocomplete'] = $autocomplete;
		return $this;
	}
    /**
	 * application/x-www-form-urlencoded / multipart/form-data / text/plain
	 * Specfy a MIME type with which a UA is meant to associate this element for form submission.
	 * The missing value default for these attributes is the application/x-www-form-urlencoded state.
	 * 
	 *     application/x-www-form-urlencoded
	 *     multipart/form-data
	 *     text/plain 
	 * 
	 * @return string|ValueInterface
	 */
	public function getEnctype() {
		return isset($this->attributes['enctype'])?$this->attributes['enctype']:null;
	}
	
	/**
	 * application/x-www-form-urlencoded / multipart/form-data / text/plain
	 * Specfy a MIME type with which a UA is meant to associate this element for form submission.
	 * The missing value default for these attributes is the application/x-www-form-urlencoded state.
	 * 
	 *     application/x-www-form-urlencoded
	 *     multipart/form-data
	 *     text/plain 
	 * 
	 * @param string|ValueInterface $enctype
	 * @return static
	 */
	public function setEnctype($enctype) {
		$this->attributes['enctype'] = $enctype;
		return $this;
	}
    /**
	 * gives the character encodings that are to be used for the submission. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getAcceptcharset() {
		return isset($this->attributes['accept-charset'])?$this->attributes['accept-charset']:null;
	}
	
	/**
	 * gives the character encodings that are to be used for the submission. 
	 * 
	 * @param string|ValueInterface $acceptcharset
	 * @return static
	 */
	public function setAcceptcharset($acceptcharset) {
		$this->attributes['accept-charset'] = $acceptcharset;
		return $this;
	}
    /**
	 *     Gives the name of the input element. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return isset($this->attributes['name'])?$this->attributes['name']:null;
	}
	
	/**
	 *     Gives the name of the input element. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $name
	 * @return static
	 */
	public function setName($name) {
		$this->attributes['name'] = $name;
		return $this;
	}
    /**
	 * If present, they indicate that the form is not to be validated during submission. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getNovalidate() {
		return isset($this->attributes['novalidate'])?$this->attributes['novalidate']:null;
	}
	
	/**
	 * If present, they indicate that the form is not to be validated during submission. 
	 * 
	 * @param string|ValueInterface $novalidate
	 * @return static
	 */
	public function setNovalidate($novalidate) {
		$this->attributes['novalidate'] = $novalidate;
		return $this;
	}
    /**
	 * Specfy a browsing context name or keyword that represents the target of the control. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getTarget() {
		return isset($this->attributes['target'])?$this->attributes['target']:null;
	}
	
	/**
	 * Specfy a browsing context name or keyword that represents the target of the control. 
	 * 
	 * @param string|ValueInterface $target
	 * @return static
	 */
	public function setTarget($target) {
		$this->attributes['target'] = $target;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<form '.$this->getAttributes().'>'.$this->renderChildren().'</form>';
	}
}