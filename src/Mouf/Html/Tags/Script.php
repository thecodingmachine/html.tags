<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;script&gt; tag in HTML.
 * The &lt;script&gt; element allows authors to include dynamic script and data blocks in their documents.
 * Point
 * 
 *     When used to include dynamic scripts, the scripts may either be embedded inline or may be imported from an external file using the src attribute. 
 * 
 *     If the language is not that described by "text/javascript", then the type attribute must be present, as described below. 
 * 
 * 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Script implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 *     URL potentially surrounded by spaces
	 *     Gives the address of the external script resource to use. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSrc() {
		return isset($this->attributes['src'])?$this->attributes['src']:null;
	}
	
	/**
	 *     URL potentially surrounded by spaces
	 *     Gives the address of the external script resource to use. 
	 * 
	 * 
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
	 * Specifies that the script should be executed asynchronously, as soon as it becomes available. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getAsync() {
		return isset($this->attributes['async'])?$this->attributes['async']:null;
	}
	
	/**
	 * Specifies that the script should be executed asynchronously, as soon as it becomes available. 
	 * 
	 * @param string|ValueInterface $async
	 * @return static
	 */
	public function setAsync($async) {
		$this->attributes['async'] = $async;
		return $this;
	}
    /**
	 * Specifies that script should be executed after the document has been parsed. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getDefer() {
		return isset($this->attributes['defer'])?$this->attributes['defer']:null;
	}
	
	/**
	 * Specifies that script should be executed after the document has been parsed. 
	 * 
	 * @param string|ValueInterface $defer
	 * @return static
	 */
	public function setDefer($defer) {
		$this->attributes['defer'] = $defer;
		return $this;
	}
    /**
	 * Gives the language of the script or format of the data:
	 * 
	 *     application/ecmascript
	 *     application/javascript
	 *     application/x-ecmascript
	 *     application/x-javascript
	 *     text/ecmascript
	 *     text/javascript
	 *     text/javascript1.0
	 *     text/javascript1.1
	 *     text/javascript1.2
	 *     text/javascript1.3
	 *     text/javascript1.4
	 *     text/javascript1.5
	 *     text/jscript
	 *     text/livescript
	 *     text/x-ecmascript
	 *     text/x-javascript
	 *     text/javascript;e4x=1
	 *     ... User agents may support other MIME types and other languages. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getType() {
		return isset($this->attributes['type'])?$this->attributes['type']:null;
	}
	
	/**
	 * Gives the language of the script or format of the data:
	 * 
	 *     application/ecmascript
	 *     application/javascript
	 *     application/x-ecmascript
	 *     application/x-javascript
	 *     text/ecmascript
	 *     text/javascript
	 *     text/javascript1.0
	 *     text/javascript1.1
	 *     text/javascript1.2
	 *     text/javascript1.3
	 *     text/javascript1.4
	 *     text/javascript1.5
	 *     text/jscript
	 *     text/livescript
	 *     text/x-ecmascript
	 *     text/x-javascript
	 *     text/javascript;e4x=1
	 *     ... User agents may support other MIME types and other languages. 
	 * 
	 * @param string|ValueInterface $type
	 * @return static
	 */
	public function setType($type) {
		$this->attributes['type'] = $type;
		return $this;
	}
    /**
	 * Gives the character encoding of the external script resource.
	 * The attribute must not be specified if the src attribute is not present. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getCharset() {
		return isset($this->attributes['charset'])?$this->attributes['charset']:null;
	}
	
	/**
	 * Gives the character encoding of the external script resource.
	 * The attribute must not be specified if the src attribute is not present. 
	 * 
	 * @param string|ValueInterface $charset
	 * @return static
	 */
	public function setCharset($charset) {
		$this->attributes['charset'] = $charset;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<script '.$this->getAttributes().'>'.$this->renderChildren().'</script>';
	}
}