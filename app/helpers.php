<?php
if (!function_exists('single_image')) {
    function single_image($image, $folder)
    {
        $imageName = mt_rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/uploads/' . $folder), $imageName);
        return 'assets/uploads/' . $folder . '/' . $imageName;
    }
}

if (!function_exists('regular_price')) {
    function regular_price($regular_price = '', $discount_price = '')
    {
        if (!empty($discount_price) && (float)$discount_price > 0) {
            return session('symbol') . ' ' . number_format($regular_price, 2);
        }

        return '';
    }
}

if (!function_exists('discount_price')) {
    function discount_price($regular_price = "", $discount_price = "")
    {
        if (!empty($regular_price)) {
            if ((float)$discount_price > 0) {
                return session('symbol') . ' ' . number_format($discount_price,2);
            }

            return session('symbol') . ' ' . number_format($regular_price,2);
        }

        return '';
    }
}

if (!function_exists('discountPercentage')) {
    function discountPercentage($regular_price = "", $discount_price = "")
    {
        return !empty($discount_price) ? (int)((((float)$regular_price - (float)$discount_price) * 100) / (float)$regular_price) : '';
    }
}

if (!function_exists('deSlug')) {
    function deSlug($slug)
    {
        return !empty($slug) ? ucwords(str_replace(['_', '-'], ' ', $slug)) : '';
    }
}
if (!function_exists('getSingleField')) {
    function getSingleField($table, array $where, $field)
    {
        return \DB::table($table)->select($field)->where($where)->first()->$field ?? '';
    }
}

/*
 * PHP implementation of Javascript's "Array.prototype.find"
 * =========================================================
 */
if (!function_exists('array_find')) {
    function array_find(array $array, callable $callback) {
        foreach ($array as $key => $value) {
            if ($callback($value, $key)) {
                return $value;
            }
        }

        return false;
    }
}
