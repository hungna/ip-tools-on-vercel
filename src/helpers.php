<?php
/**
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/3/18
 * Time: 13:49
 */
if (!function_exists('arrayToObject')) {
	/**
	 * Hàm chuyển dữ liệu từ 1 mảng thành 1 object
	 *
	 * @param array $array
	 * @param bool $str_to_lower
	 *
	 * @return array|bool|\stdClass
	 * @author: 713uk13m <dev@nguyenanhung.com>
	 * @time  : 10/20/18 11:07
	 *
	 */
	function arrayToObject($array = [], $str_to_lower = false)
	{
		if (!is_array($array)) {
			return $array;
		}
		$object = new stdClass();
		if (count($array) > 0) {
			foreach ($array as $name => $value) {
				$name = trim($name);
				if ($str_to_lower === true) {
					$name = strtolower($name);
				}
				if (!empty($name)) {
					$object->$name = arrayToObject($value);
				}
			}

			return $object;
		}

		return false;
	}
}
