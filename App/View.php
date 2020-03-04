<?php

namespace App;


class View implements \Countable, \ArrayAccess {

	protected $data = [];


	public function __get( $name ) {

		return $this->data[$name] ?? null;

	}


	public function __set( $name, $value ) {

		$this->data[$name] = $value;
	}

	public function __isset( $name ) {
		// TODO: Implement __isset() method.
		return isset( $this->data[$name] );
	}


	public function render( $template ) {
		ob_start();
		include $template;
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}

	public function display( $template ) {
		echo $this->render($template);
	}


	/**
	 * Count elements of an object
	 * @link http://php.net/manual/en/countable.count.php
	 * @return int The custom count as an integer.
	 * </p>
	 * <p>
	 * The return value is cast to an integer.
	 * @since 5.1.0
	 */
	public function count() {
		// TODO: Implement count() method.
		return count($this->data);
	}


	public function offsetExists( $offset ) {
		// TODO: Implement offsetExists() method.

		return isset($this->data[$offset]);
	}


	public function offsetGet( $offset ) {
		// TODO: Implement offsetGet() method.
		return $this->data[$offset] ?? false;
	}

	public function offsetSet( $offset, $value ) {
		// TODO: Implement offsetSet() method.
		$this->data[$offset] = $value;
	}


	public function offsetUnset( $offset ) {

		unset($this->data[$offset]);
	}
}