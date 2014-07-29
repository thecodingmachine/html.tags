<?php
namespace Mouf\Html\Tags;

/**
 * A trait with clobal HTML attributes 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
trait GlobalAttributesTrait {
	use AttributesTrait;
	
	/**
	 * Specifies one or more classnames for an element (refers to a class in a style sheet)
	 * Key and values both contain the class.
	 * 
	 * @return array<string, string>
	 */
	public function getClasses() {
		return isset($this->attributes['class'])?$this->attributes['class']:null;
	}
	
	/**
	 * Specifies one or more classnames for an element (refers to a class in a style sheet)
	 *
	 * @param array<string, string>
	 * @return static
	 */
	public function setClasses(array $classes) {
		$classList = array();
		foreach ($classes as $val) {
			$classList[$val] = $val;
		}
		
		$this->attributes['class'] = $classList;
		return $this;
	}
	
	/**
	 * Adds a CSS class to the HTML element
	 * 
	 * @param string $class
	 * @return static
	 */
	public function addClass($class) {
		$this->attributes['class'][$class] = $class;
		return $this;
	}

	/**
	 * Adds an array of CSS classes to the HTML element
	 *
	 * @param string[] $classes
	 * @return static
	 */
	public function addClasses($classes) {
		foreach ($classes as $class) {
			$this->attributes['class'][$class] = $class;
		}
		return $this;
	}
	
	/**
	 * Removes a CSS class from the HTML element
	 *
	 * @param string $class
	 * @return static
	 */
	public function removeClass($class) {
		unset($this->attributes['class'][$class]);
		return $this;
	}
	
	/**
	 * Specifies a unique id for an element
	 *
	 * @return string
	 */
	public function getId() {
		return isset($this->attributes['id'])?$this->attributes['id']:null;
	}
	
	/**
	 * Specifies a unique id for an element
	 *
	 * @param string $id
	 * @return static
	 */
	public function setId($id) {
		$this->attributes['id'] = $id;
		return $this;
	}
	
	/**
	 * Specifies whether the content of an element is editable or not
	 * @return boolean
	 */
	public function isContenteditable() {
		return isset($this->attributes['contenteditable'])?$this->attributes['contenteditable']:null;
	}
	
	/**
	 * Specifies whether the content of an element is editable or not
	 * @param bool $contenteditable
	 * @return static
	 */
	public function setContenteditable($contenteditable) {
		$this->attributes['contenteditable'] = $contenteditable;
		return $this;
	}
	
	/**
	 * Get the array of data-* attributes.
	 *
	 * @return array<string, string>
	 */
	public function getDataAttributes() {
		return isset($this->attributes['data'])?$this->attributes['data']:null;
	}
	
	/**
	 * Set the array of data-* attributes.
	 *
	 * @param array $dataAttributes
	 * @return static
	 */
	public function setDataAttributes(array $dataAttributes) {
		$this->attributes['data'] = $dataAttributes;
		return $this;
	}
	
	/**
	 * Adds a data attribute
	 * 
	 * @param string $dataKey
	 * @param string $dataAttribute
	 * @return static
	 */
	public function addDataAttribute($dataKey, $dataAttribute) {
		$this->attributes['data'][$dataKey] = $dataAttribute;
		return $this;
	}
	
	/**
	 * Removes a data attribute
	 *
	 * @param string $dataKey
	 * @return static
	 */
	public function removeDataAttribute($dataKey) {
		unset($this->attributes['data'][$dataKey]);
		return $this;
	}
	
	/**
	 * Specifies a shortcut key to activate/focus an element.
	 *
	 * @return string
	 */
	public function getAccesskey() {
		return isset($this->attributes['accesskey'])?$this->attributes['accesskey']:null;
	}
	
	/**
	 * Specifies a shortcut key to activate/focus an element
	 *
	 * @param string $accesskey
	 * @return static
	 */
	public function setAccesskey($accesskey) {
		$this->attributes['accesskey'] = $accesskey;
		return $this;
	}
	
	
	/**
	 * Specifies the text direction for the content in an element
	 *
	 * @return string
	 */
	public function getDir() {
		return isset($this->attributes['dir'])?$this->attributes['dir']:null;
	}
	
	/**
	 * Specifies the text direction for the content in an element
	 *
	 * @param string $dir
	 * @return static
	 */
	public function setDir($dir) {
		$this->attributes['dir'] = $dir;
		return $this;
	}
	
	/**
	 * Specifies whether an element is draggable or not (HTML 5 attribute)
	 * @return boolean
	 */
	public function isDraggable() {
		return isset($this->attributes['draggable'])?$this->attributes['draggable']:null;
	}
	
	/**
	 * Specifies whether an element is draggable or not (HTML 5 attribute)
	 * @param bool $draggable
	 * @return static
	 */
	public function setDraggable($draggable) {
		$this->attributes['draggable'] = $draggable;
		return $this;
	}
	
	/**
	 * Specifies the kind of marker to use in the list.
	 *
	 * @return string the kind of marker
	 */
	public function getType() {
		return isset($this->attributes['type'])?$this->attributes['type']:null;
	}
	
	/**
	 * Specifies the kind of marker to use in the list.
	 *
	 * @param string $type the kind of marker
	 * @return static
	 */
	public function setType($type) {
		$this->attributes['type'] = $type;
		return $this;
	}
	
	/**
	 * Specifies that an element is not yet, or is no longer, relevant (HTML 5 attribute, not supported in IE)
	 * @return boolean
	 */
	public function isHidden() {
		return isset($this->attributes['hidden'])?$this->attributes['hidden']:null;
	}
	
	/**
	 * Specifies that an element is not yet, or is no longer, relevant (HTML 5 attribute, not supported in IE)
	 * @param bool $hidden
	 * @return static
	 */
	public function setHidden($hidden) {
		$this->attributes['hidden'] = $hidden;
		return $this;
	}
	
	/**
	 * Specifies the language of the element's content
	 *
	 * @return string
	 */
	public function getLang() {
		return isset($this->attributes['lang'])?$this->attributes['lang']:null;
	}
	
	/**
	 * Specifies the language of the element's content
	 *
	 * @param string $lang
	 * @return static
	 */
	public function setLang($lang) {
		$this->attributes['lang'] = $lang;
		return $this;
	}
	
	/**
	 * Specifies whether the element is to have its spelling and grammar checked or not
	 * @return boolean
	 */
	public function isSpellcheck() {
		return isset($this->attributes['spellcheck'])?$this->attributes['spellcheck']:null;
	}
	
	/**
	 * Specifies whether the element is to have its spelling and grammar checked or not
	 * @param bool $spellcheck
	 * @return static
	 */
	public function setSpellcheck($spellcheck) {
		$this->attributes['spellcheck'] = $spellcheck;
		return $this;
	}
	
	/**
	 * Returns all inline CSS style for the element
	 *
	 * @return array<string, string>
	 */
	public function getStyles() {
		return isset($this->attributes['style'])?$this->attributes['style']:null;
	}
	
	/**
	 * Sets all inline CSS style for the element
	 *
	 * @param array $styles
	 * @return static
	 */
	public function setStyles(array $styles) {
		$this->attributes['style'] = $styles;
		return $this;
	}
	
	/**
	 * Adds an inline CSS style attribute
	 *
	 * @param string $styleKey
	 * @param string $styleValue
	 * @return static
	 */
	public function addStyle($styleKey, $styleValue) {
		$this->attributes['style'][$styleKey] = $styleValue;
		return $this;
	}
	
	/**
	 * Removes a style attribute
	 *
	 * @param string $styleKey
	 * @return static
	 */
	public function removeStyle($styleKey) {
		unset($this->attributes['style'][$styleKey]);
		return $this;
	}
	
	/**
	 * Specifies extra information about an element
	 *
	 * @return string
	 */
	public function getTitle() {
		return isset($this->attributes['title'])?$this->attributes['title']:null;
	}
	
	/**
	 * Specifies extra information about an element
	 *
	 * @param string $title
	 * @return static
	 */
	public function setTitle($title) {
		$this->attributes['title'] = $title;
		return $this;
	}
}