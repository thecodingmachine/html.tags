<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;meter&gt; tag in HTML.
 * The &lt;meter&gt; element represents a scalar measurement within a known range, or a fractional value.
 * Point
 * 
 *     Example of meter:
 *         disk usage
 *         relevance of a query result
 *         fraction of a voting population to have selected a particular candidate ... 
 * 
 * 
 *     The meter element should not be used to indicate progress (as in a progress bar). For that role, HTML provides a separate progress element. 
 * 
 * 
 *     The meter element also does not represent a scalar value of arbitrary range - for example, it would be wrong to use this to report a weight, or height, unless there is a known maximum value.
 * 
 * 
 *     Authors are encouraged to include a textual representation of the gauge's state in the element's contents, for users of user agents that do not support the meter element. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Meter implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * valid floating point numbers
	 * Specifies the value to have the gauge indicate as the "measured" value.
	 * The value attribute must be specified. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getValue() {
		return isset($this->attributes['value'])?$this->attributes['value']:null;
	}
	
	/**
	 * valid floating point numbers
	 * Specifies the value to have the gauge indicate as the "measured" value.
	 * The value attribute must be specified. 
	 * 
	 * @param string|ValueInterface $value
	 * @return static
	 */
	public function setValue($value) {
		$this->attributes['value'] = $value;
		return $this;
	}
    /**
	 * valid floating point numbers
	 * Specifies the lower bound of the range. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMin() {
		return isset($this->attributes['min'])?$this->attributes['min']:null;
	}
	
	/**
	 * valid floating point numbers
	 * Specifies the lower bound of the range. 
	 * 
	 * @param string|ValueInterface $min
	 * @return static
	 */
	public function setMin($min) {
		$this->attributes['min'] = $min;
		return $this;
	}
    /**
	 * valid floating point numbers
	 * Specifies the upper bound 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMax() {
		return isset($this->attributes['max'])?$this->attributes['max']:null;
	}
	
	/**
	 * valid floating point numbers
	 * Specifies the upper bound 
	 * 
	 * @param string|ValueInterface $max
	 * @return static
	 */
	public function setMax($max) {
		$this->attributes['max'] = $max;
		return $this;
	}
    /**
	 * valid floating point numbers
	 * Specifies the range that is considered to be the "low" part. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getLow() {
		return isset($this->attributes['low'])?$this->attributes['low']:null;
	}
	
	/**
	 * valid floating point numbers
	 * Specifies the range that is considered to be the "low" part. 
	 * 
	 * @param string|ValueInterface $low
	 * @return static
	 */
	public function setLow($low) {
		$this->attributes['low'] = $low;
		return $this;
	}
    /**
	 *     valid floating point numbers
	 *     Specifies the range that is considered to be the "high" part. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getHigh() {
		return isset($this->attributes['high'])?$this->attributes['high']:null;
	}
	
	/**
	 *     valid floating point numbers
	 *     Specifies the range that is considered to be the "high" part. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $high
	 * @return static
	 */
	public function setHigh($high) {
		$this->attributes['high'] = $high;
		return $this;
	}
    /**
	 *     valid floating point numbers
	 *     Gives the position that is "optimum":
	 *         If that is higher than the "high" value then this indicates that the higher the value, the better
	 *         if it's lower than the "low" mark then it indicates that lower values are better
	 *         if it is in between then it indicates that neither high nor low values are good. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getOptimum() {
		return isset($this->attributes['optimum'])?$this->attributes['optimum']:null;
	}
	
	/**
	 *     valid floating point numbers
	 *     Gives the position that is "optimum":
	 *         If that is higher than the "high" value then this indicates that the higher the value, the better
	 *         if it's lower than the "low" mark then it indicates that lower values are better
	 *         if it is in between then it indicates that neither high nor low values are good. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $optimum
	 * @return static
	 */
	public function setOptimum($optimum) {
		$this->attributes['optimum'] = $optimum;
		return $this;
	}
    /**
	 *     the ID of a form element in the element's owner
	 *     Associate the meter element with its form owner.
	 *     By default, the meter element is associated with its nearest ancestor form element. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getForm() {
		return isset($this->attributes['form'])?$this->attributes['form']:null;
	}
	
	/**
	 *     the ID of a form element in the element's owner
	 *     Associate the meter element with its form owner.
	 *     By default, the meter element is associated with its nearest ancestor form element. 
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
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<meter '.$this->getAttributes().'>'.$this->renderChildren().'</meter>';
	}
}