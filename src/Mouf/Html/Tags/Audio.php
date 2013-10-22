<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;audio&gt; tag in HTML.
 * An &lt;audio&gt; element represents a sound or an audio stream. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Audio implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * The URL for the audio stream. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSrc() {
		return $this->attributes['src'];
	}
	
	/**
	 * The URL for the audio stream. 
	 * 
	 * @param string|ValueInterface $src
	 * @return static
	 */
	public function setSrc($src) {
		$this->attributes['src'] = $src;
		return $this;
	}
    /**
	 * "autoplay" or "" (empty string) or empty
	 * Instructs the UA to automatically begin playback of the video as soon as it can do so without stopping. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getAutoplay() {
		return $this->attributes['autoplay'];
	}
	
	/**
	 * "autoplay" or "" (empty string) or empty
	 * Instructs the UA to automatically begin playback of the video as soon as it can do so without stopping. 
	 * 
	 * @param string|ValueInterface $autoplay
	 * @return static
	 */
	public function setAutoplay($autoplay) {
		$this->attributes['autoplay'] = $autoplay;
		return $this;
	}
    /**
	 * "none" or "metadata" or "auto" or "" (empty string) or empty
	 * Represents a hint to the UA about whether optimistic downloading of the video itself or its metadata is considered worthwhile.
	 * 
	 *     "none": Hints to the UA that the user is not expected to need the video, or that minimizing unnecessary traffic is desirable.
	 *     "metadata": Hints to the UA that the user is not expected to need the video, but that fetching its metadata (dimensions, first frame, track list, duration, and so on) is desirable.
	 *     "auto": Hints to the UA that optimistically downloading the entire video is considered desirable.
	 *     Specifying the empty string is equivalent to specifying the value "auto". 
	 * 
	 * @return string|ValueInterface
	 */
	public function getPreload() {
		return $this->attributes['preload'];
	}
	
	/**
	 * "none" or "metadata" or "auto" or "" (empty string) or empty
	 * Represents a hint to the UA about whether optimistic downloading of the video itself or its metadata is considered worthwhile.
	 * 
	 *     "none": Hints to the UA that the user is not expected to need the video, or that minimizing unnecessary traffic is desirable.
	 *     "metadata": Hints to the UA that the user is not expected to need the video, but that fetching its metadata (dimensions, first frame, track list, duration, and so on) is desirable.
	 *     "auto": Hints to the UA that optimistically downloading the entire video is considered desirable.
	 *     Specifying the empty string is equivalent to specifying the value "auto". 
	 * 
	 * @param string|ValueInterface $preload
	 * @return static
	 */
	public function setPreload($preload) {
		$this->attributes['preload'] = $preload;
		return $this;
	}
    /**
	 * "controls" or "" (empty string) or empty
	 * Instructs the UA to expose a user interface for controlling playback of the video. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getControls() {
		return $this->attributes['controls'];
	}
	
	/**
	 * "controls" or "" (empty string) or empty
	 * Instructs the UA to expose a user interface for controlling playback of the video. 
	 * 
	 * @param string|ValueInterface $controls
	 * @return static
	 */
	public function setControls($controls) {
		$this->attributes['controls'] = $controls;
		return $this;
	}
    /**
	 * "loop" or "" (empty string) or empty
	 * Instructs the UA to seek back to the start of the video upon reaching the end. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getLoop() {
		return $this->attributes['loop'];
	}
	
	/**
	 * "loop" or "" (empty string) or empty
	 * Instructs the UA to seek back to the start of the video upon reaching the end. 
	 * 
	 * @param string|ValueInterface $loop
	 * @return static
	 */
	public function setLoop($loop) {
		$this->attributes['loop'] = $loop;
		return $this;
	}
    /**
	 * Instructs the UA to link multiple videos and/or audio streams together. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMediagroup() {
		return $this->attributes['mediagroup'];
	}
	
	/**
	 * Instructs the UA to link multiple videos and/or audio streams together. 
	 * 
	 * @param string|ValueInterface $mediagroup
	 * @return static
	 */
	public function setMediagroup($mediagroup) {
		$this->attributes['mediagroup'] = $mediagroup;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<audio '.$this->getAttributes().'>'.$this->renderChildren().'</audio>';
	}
}