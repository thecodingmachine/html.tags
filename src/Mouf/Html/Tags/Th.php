<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;th&gt; tag in HTML.
 * The &lt;th&gt; element represents a header cell in a table. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Th implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * This attribute gives the number of columns respectively that the cell is to span.
	 * 
	 * @return string|ValueInterface
	 */
	public function getColspan() {
		return isset($this->attributes['colspan'])?$this->attributes['colspan']:null;
	}
	
	/**
	 * This attribute gives the number of columns respectively that the cell is to span.
	 * 
	 * @param string|ValueInterface $colspan
	 * @return static
	 */
	public function setColspan($colspan) {
		$this->attributes['colspan'] = $colspan;
		return $this;
	}
    /**
	 * This attribute gives the number of rows respectively that the cell is to span. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getRowspan() {
		return isset($this->attributes['rowspan'])?$this->attributes['rowspan']:null;
	}
	
	/**
	 * This attribute gives the number of rows respectively that the cell is to span. 
	 * 
	 * @param string|ValueInterface $rowspan
	 * @return static
	 */
	public function setRowspan($rowspan) {
		$this->attributes['rowspan'] = $rowspan;
		return $this;
	}
    /**
	 * The value of this attribute must have the value of an id attribute of the th element that is targeted.
	 * 
	 * @return string|ValueInterface
	 */
	public function getHeaders() {
		return isset($this->attributes['headers'])?$this->attributes['headers']:null;
	}
	
	/**
	 * The value of this attribute must have the value of an id attribute of the th element that is targeted.
	 * 
	 * @param string|ValueInterface $headers
	 * @return static
	 */
	public function setHeaders($headers) {
		$this->attributes['headers'] = $headers;
		return $this;
	}
    /**
	 * row/ col/ rowgroup/ colgroup
	 * The scope attribute specifies the cell which the influence of headding cell reaches. 
	 * 
	 *     row
	 *     The header cell applies to some of the subsequent cells in the same row(s).
	 *     col
	 *     The header cell applies to some of the subsequent cells in the same column(s).
	 *     rowgroup
	 *     The header cell applies to all the remaining cells in the row group. A th element's scope attribute must not be in the row group state if the element is not anchored in a row group.
	 *     colgroup
	 *     The header cell applies to all the remaining cells in the column group. A th element's scope attribute must not be in the column group state if the element is not anchored in a column group. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getScope() {
		return isset($this->attributes['scope'])?$this->attributes['scope']:null;
	}
	
	/**
	 * row/ col/ rowgroup/ colgroup
	 * The scope attribute specifies the cell which the influence of headding cell reaches. 
	 * 
	 *     row
	 *     The header cell applies to some of the subsequent cells in the same row(s).
	 *     col
	 *     The header cell applies to some of the subsequent cells in the same column(s).
	 *     rowgroup
	 *     The header cell applies to all the remaining cells in the row group. A th element's scope attribute must not be in the row group state if the element is not anchored in a row group.
	 *     colgroup
	 *     The header cell applies to all the remaining cells in the column group. A th element's scope attribute must not be in the column group state if the element is not anchored in a column group. 
	 * 
	 * @param string|ValueInterface $scope
	 * @return static
	 */
	public function setScope($scope) {
		$this->attributes['scope'] = $scope;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<th '.$this->getAttributes().'>'.$this->renderChildren().'</th>';
	}
}