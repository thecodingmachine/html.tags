<?php
namespace Mouf\Html\Tags;

use Mouf\Utils\Value\ValueUtils;
/**
 * A trait that defines basic HTML attributes 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
trait AttributesTrait {
	
	/**
	 * HTML attributes.
	 * key / value pair.
	 * The value can be an array if the key if 'class' or 'style'
	 * The value can also implement ValueInterface. If so, the value will be 
	 * evaluated when the attributes are rendered.
	 * 
	 * @var array
	 */
	protected $attributes = array();
	
	/**
	 * Renders HTML attributes.
	 * 
	 * @return string
	 */
	protected function getAttributes() {
		$attrStrs = array();
		array_walk($this->attributes, function($value, $key) use (&$attrStrs) {
			$value = ValueUtils::val($value);
			if (is_array($value)) {
				if ($key == 'style') {
					$styleStr = 'style="';
					array_walk($value, function($style, $key) use (&$styleStr) {
						$styleStr .= $key.':'.htmlspecialchars($style, ENT_QUOTES, 'UTF-8').';';
					});
					$styleStr .= '"';
					$attrStrs[] = $styleStr;
				} elseif ($key == 'data') {
					$dataStr = '';
					array_walk($value, function($val, $key) use (&$dataStr) {
						$dataStr .= 'data-'.$key.'="'.htmlspecialchars($val, ENT_QUOTES, 'UTF-8').'" ';
					});
					$attrStrs[] = $dataStr;
				} else {
					$attrStrs[] = $key.'="'.implode(' ', $value).'"';
				}
			} elseif (is_bool($value)) {
				$attrStrs[] = $key.'='.($value?'"true"':'"false"');
			} else {
				$attrStrs[] = $key.'="'.htmlspecialchars($value, ENT_QUOTES, 'UTF-8').'"';
			}
		});
		return implode(' ', $attrStrs);
	}
	
}