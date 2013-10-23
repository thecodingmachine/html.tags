<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;time&gt; tag in HTML.
 * The &lt;time&gt; element represents its contents, along with a machine-readable form of those contents in the datetime attribute.
 * Point
 * 
 *     The datetime value of a time element is the value of the element's datetime attribute, if it has one, or the element's textContent, if it does not.
 *     The kind of content is limited to various kinds of dates, times, time-zone offsets, and durations, as described below:
 *         A valid month string
 *             2012-03 
 *         A valid date string
 *             3012-03-29 
 *         A calid time string
 *             15:25
 *             15:25:35 
 *         A valid local date and time string
 *             2012-03-29T15:25:35
 *             2012-03-29 15:25:35 
 *         A valid time-zone offset string
 *             Z
 *             0000
 *             00:00 
 *         See more details: Datetime value at HTML5 specification. 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Time implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * Specifies the date or time that the element represents. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getDatetime() {
		return isset($this->attributes['datetime'])?$this->attributes['datetime']:null;
	}
	
	/**
	 * Specifies the date or time that the element represents. 
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
		echo '<time '.$this->getAttributes().'>'.$this->renderChildren().'</time>';
	}
}