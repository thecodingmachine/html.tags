<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;input&gt; tag in HTML.
 * The &lt;input&gt; element represents a typed data field, usually with a form control to allow the user to edit the data. 
 * 
 * @author David NÃ©grier <david@mouf-php.com>
 */
class Input implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 * Keyword 	State 	Data type 	Control type
	 * hidden 	Hidden 	An arbitrary string 	n/a
	 * text 	Text 	Text with no line breaks 	Text field
	 * search 	Search 	Text with no line breaks 	Search field
	 * tel 	Telephone 	Text with no line breaks 	A text field
	 * url 	URL 	An absolute IRI 	A text field
	 * email 	E-mail 	An e-mail address or list of e-mail addresses 	A text field
	 * password 	Password 	Text with no line breaks (sensitive information) 	Text field that obscures data entry
	 * datetime 	Date and Time 	A date and time (year, month, day, hour, minute, second, fraction of a second) with the time zone set to UTC 	A date and time control
	 * date 	Date 	A date (year, month, day) with no time zone 	A date control
	 * month 	Month 	A date consisting of a year and a month with no time zone 	A month control
	 * week 	Week 	A date consisting of a week-year number and a week number with no time zone 	A week control
	 * time 	Time 	A time (hour, minute, seconds, fractional seconds) with no time zone 	A time control
	 * datetime-local 	Local Date and Time 	A date and time (year, month, day, hour, minute, second, fraction of a second) with no time zone 	A date and time control
	 * number 	Number 	A numerical value 	A text field or spinner control
	 * range 	Range 	A numerical value, with the extra semantic that the exact value is not important 	A slider control or similar
	 * color 	Color 	An sRGB color with 8-bit red, green, and blue components 	A color well
	 * checkbox 	Checkbox 	A set of zero or more values from a predefined list 	A checkbox
	 * radio 	Radio Button 	An enumerated value 	A radio button
	 * file 	File Upload 	Zero or more files each with a MIME type and optionally a file name 	A label and a button
	 * submit 	Submit Button 	An enumerated value, with the extra semantic that it must be the last value selected and initiates form submission 	A button
	 * image 	Image Button 	A coordinate, relative to a particular image's size, with the extra semantic that it must be the last value selected and initiates form submission 	Either a clickable image, or a button
	 * reset 	Reset Button 	n/a 	A button
	 * button 	Button 	n/a 	A button 
	 * 
	 * @return string|ValueInterface
	 */
	public function getType() {
		return isset($this->attributes['type'])?$this->attributes['type']:null;
	}
	
	/**
	 * Keyword 	State 	Data type 	Control type
	 * hidden 	Hidden 	An arbitrary string 	n/a
	 * text 	Text 	Text with no line breaks 	Text field
	 * search 	Search 	Text with no line breaks 	Search field
	 * tel 	Telephone 	Text with no line breaks 	A text field
	 * url 	URL 	An absolute IRI 	A text field
	 * email 	E-mail 	An e-mail address or list of e-mail addresses 	A text field
	 * password 	Password 	Text with no line breaks (sensitive information) 	Text field that obscures data entry
	 * datetime 	Date and Time 	A date and time (year, month, day, hour, minute, second, fraction of a second) with the time zone set to UTC 	A date and time control
	 * date 	Date 	A date (year, month, day) with no time zone 	A date control
	 * month 	Month 	A date consisting of a year and a month with no time zone 	A month control
	 * week 	Week 	A date consisting of a week-year number and a week number with no time zone 	A week control
	 * time 	Time 	A time (hour, minute, seconds, fractional seconds) with no time zone 	A time control
	 * datetime-local 	Local Date and Time 	A date and time (year, month, day, hour, minute, second, fraction of a second) with no time zone 	A date and time control
	 * number 	Number 	A numerical value 	A text field or spinner control
	 * range 	Range 	A numerical value, with the extra semantic that the exact value is not important 	A slider control or similar
	 * color 	Color 	An sRGB color with 8-bit red, green, and blue components 	A color well
	 * checkbox 	Checkbox 	A set of zero or more values from a predefined list 	A checkbox
	 * radio 	Radio Button 	An enumerated value 	A radio button
	 * file 	File Upload 	Zero or more files each with a MIME type and optionally a file name 	A label and a button
	 * submit 	Submit Button 	An enumerated value, with the extra semantic that it must be the last value selected and initiates form submission 	A button
	 * image 	Image Button 	A coordinate, relative to a particular image's size, with the extra semantic that it must be the last value selected and initiates form submission 	Either a clickable image, or a button
	 * reset 	Reset Button 	n/a 	A button
	 * button 	Button 	n/a 	A button 
	 * 
	 * @param string|ValueInterface $type
	 * @return static
	 */
	public function setType($type) {
		$this->attributes['type'] = $type;
		return $this;
	}
    /**
	 * Gives the name of the input element. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return isset($this->attributes['name'])?$this->attributes['name']:null;
	}
	
	/**
	 * Gives the name of the input element. 
	 * 
	 * @param string|ValueInterface $name
	 * @return static
	 */
	public function setName($name) {
		$this->attributes['name'] = $name;
		return $this;
	}
    /**
	 * Gives the default value of the input element. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getValue() {
		return isset($this->attributes['value'])?$this->attributes['value']:null;
	}
	
	/**
	 * Gives the default value of the input element. 
	 * 
	 * @param string|ValueInterface $value
	 * @return static
	 */
	public function setValue($value) {
		$this->attributes['value'] = $value;
		return $this;
	}
    /**
	 * Only used on file upload
	 * 
	 * @return string|ValueInterface
	 */
	public function getAccept() {
		return isset($this->attributes['accept'])?$this->attributes['accept']:null;
	}
	
	/**
	 * Only used on file upload
	 * 
	 * @param string|ValueInterface $accept
	 * @return static
	 */
	public function setAccept($accept) {
		$this->attributes['accept'] = $accept;
		return $this;
	}
    /**
	 * Only used when type is « imagebutton »
	 * 
	 * @return string|ValueInterface
	 */
	public function getAlt() {
		return isset($this->attributes['alt'])?$this->attributes['alt']:null;
	}
	
	/**
	 * Only used when type is « imagebutton »
	 * 
	 * @param string|ValueInterface $alt
	 * @return static
	 */
	public function setAlt($alt) {
		$this->attributes['alt'] = $alt;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getAutocomplete() {
		return isset($this->attributes['autocomplete'])?$this->attributes['autocomplete']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $autocomplete
	 * @return static
	 */
	public function setAutocomplete($autocomplete) {
		$this->attributes['autocomplete'] = $autocomplete;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getChecked() {
		return isset($this->attributes['checked'])?$this->attributes['checked']:null;
	}
	
	/**
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
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getFormaction() {
		return isset($this->attributes['formaction'])?$this->attributes['formaction']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $formaction
	 * @return static
	 */
	public function setFormaction($formaction) {
		$this->attributes['formaction'] = $formaction;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getFormenctype() {
		return isset($this->attributes['formenctype'])?$this->attributes['formenctype']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $formenctype
	 * @return static
	 */
	public function setFormenctype($formenctype) {
		$this->attributes['formenctype'] = $formenctype;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getFormmethod() {
		return isset($this->attributes['formmethod'])?$this->attributes['formmethod']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $formmethod
	 * @return static
	 */
	public function setFormmethod($formmethod) {
		$this->attributes['formmethod'] = $formmethod;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getFormnovalidate() {
		return isset($this->attributes['formnovalidate'])?$this->attributes['formnovalidate']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $formnovalidate
	 * @return static
	 */
	public function setFormnovalidate($formnovalidate) {
		$this->attributes['formnovalidate'] = $formnovalidate;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getFormtarget() {
		return isset($this->attributes['formtarget'])?$this->attributes['formtarget']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $formtarget
	 * @return static
	 */
	public function setFormtarget($formtarget) {
		$this->attributes['formtarget'] = $formtarget;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getHeight() {
		return isset($this->attributes['height'])?$this->attributes['height']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $height
	 * @return static
	 */
	public function setHeight($height) {
		$this->attributes['height'] = $height;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getWidth() {
		return isset($this->attributes['width'])?$this->attributes['width']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $width
	 * @return static
	 */
	public function setWidth($width) {
		$this->attributes['width'] = $width;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getList() {
		return isset($this->attributes['list'])?$this->attributes['list']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $list
	 * @return static
	 */
	public function setList($list) {
		$this->attributes['list'] = $list;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMax() {
		return isset($this->attributes['max'])?$this->attributes['max']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $max
	 * @return static
	 */
	public function setMax($max) {
		$this->attributes['max'] = $max;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMaxlength() {
		return isset($this->attributes['maxlength'])?$this->attributes['maxlength']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $maxlength
	 * @return static
	 */
	public function setMaxlength($maxlength) {
		$this->attributes['maxlength'] = $maxlength;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMin() {
		return isset($this->attributes['min'])?$this->attributes['min']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $min
	 * @return static
	 */
	public function setMin($min) {
		$this->attributes['min'] = $min;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMultiple() {
		return isset($this->attributes['multiple'])?$this->attributes['multiple']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $multiple
	 * @return static
	 */
	public function setMultiple($multiple) {
		$this->attributes['multiple'] = $multiple;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getPattern() {
		return isset($this->attributes['pattern'])?$this->attributes['pattern']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $pattern
	 * @return static
	 */
	public function setPattern($pattern) {
		$this->attributes['pattern'] = $pattern;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getPlaceholder() {
		return isset($this->attributes['placeholder'])?$this->attributes['placeholder']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $placeholder
	 * @return static
	 */
	public function setPlaceholder($placeholder) {
		$this->attributes['placeholder'] = $placeholder;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getReadonly() {
		return isset($this->attributes['readonly'])?$this->attributes['readonly']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $readonly
	 * @return static
	 */
	public function setReadonly($readonly) {
		$this->attributes['readonly'] = $readonly;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getRequired() {
		return isset($this->attributes['required'])?$this->attributes['required']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $required
	 * @return static
	 */
	public function setRequired($required) {
		$this->attributes['required'] = $required;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSize() {
		return isset($this->attributes['size'])?$this->attributes['size']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $size
	 * @return static
	 */
	public function setSize($size) {
		$this->attributes['size'] = $size;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSrc() {
		return isset($this->attributes['src'])?$this->attributes['src']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $src
	 * @return static
	 */
	public function setSrc($src) {
		$this->attributes['src'] = $src;
		return $this;
	}
    /**
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getStep() {
		return isset($this->attributes['step'])?$this->attributes['step']:null;
	}
	
	/**
	 * 
	 * 
	 * @param string|ValueInterface $step
	 * @return static
	 */
	public function setStep($step) {
		$this->attributes['step'] = $step;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<input '.$this->getAttributes().'/>';
	}
}