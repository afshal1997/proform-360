<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property int $user_id
 * @property string $address
 * @property string|null $appartment_suite
 * @property string $phone
 * @property int $postcode
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAppartmentSuite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Banner
 *
 * @property int $id
 * @property string $banner_type
 * @property string|null $title
 * @property string|null $link
 * @property string $image
 * @property int $sort_order
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereBannerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdatedBy($value)
 */
	class Banner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $name
 * @property string $meta_tag_title
 * @property string|null $meta_tag_description
 * @property string|null $meta_tag_keywords
 * @property string|null $description
 * @property string $slug
 * @property int $sort_order
 * @property string|null $image
 * @property string $type
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $childrenCategories
 * @property-read int|null $children_categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $childrenCategory
 * @property-read int|null $children_category_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Coupon[] $coupouns
 * @property-read int|null $coupouns_count
 * @property-read Category $parentCategory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereMetaTagDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereMetaTagKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereMetaTagTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedBy($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $type
 * @property string $discount
 * @property string $date_start
 * @property string $date_end
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon active()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon unExpired()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon unExpiredCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon unExpiredProducts()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedBy($value)
 */
	class Coupon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Currency
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $symbol
 * @property int $is_active
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OptionPrice[] $optionPrices
 * @property-read int|null $option_prices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Price[] $prices
 * @property-read int|null $prices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Option[] $productOptions
 * @property-read int|null $product_options_count
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Currency whereUpdatedBy($value)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Option
 *
 * @property int $id
 * @property int|null $product_id
 * @property string $option_value
 * @property string $option_image
 * @property int $option_quantity
 * @property int $option_subtract_stock
 * @property string|null $option_weight
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Currency[] $currencies
 * @property-read int|null $currencies_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OptionPrice[] $prices
 * @property-read int|null $prices_count
 * @method static \Illuminate\Database\Eloquent\Builder|Option newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Option newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Option query()
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereOptionImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereOptionQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereOptionSubtractStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereOptionValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereOptionWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Option whereUpdatedBy($value)
 */
	class Option extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OptionPrice
 *
 * @property int $id
 * @property int $option_id
 * @property int $currency_id
 * @property string $price
 * @property int $status
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \App\Models\Currency $respectedCurrency
 * @property-read \App\Models\Option $respectedOption
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice query()
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice whereOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OptionPrice whereUpdatedBy($value)
 */
	class OptionPrice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $currency_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $address
 * @property string|null $appartment
 * @property string $phone
 * @property string|null $postcode
 * @property string|null $country
 * @property string|null $state
 * @property string|null $city
 * @property string|null $comment
 * @property string|null $ip_address
 * @property string|null $user_agent
 * @property string|null $shipping_firstname
 * @property string|null $shipping_lastname
 * @property string|null $shipping_address
 * @property string|null $shipping_phone
 * @property string|null $shipping_appartment
 * @property string|null $shipping_postcode
 * @property string|null $shipping_country
 * @property string|null $shipping_state
 * @property string|null $shipping_city
 * @property string|null $order_status
 * @property string|null $payment_method
 * @property string|null $shipping_method
 * @property string $actual_amount
 * @property string $discount_amount
 * @property string $shipping_amount
 * @property string $total_amount
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \App\Models\Currency $currency
 * @property-read string $formatted_order_i_d
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Orderitem[] $orderitems
 * @property-read int|null $orderitems_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereActualAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAppartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDiscountAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingAppartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingPostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereShippingState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserAgent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Orderitem
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int|null $option_id
 * @property string|null $product_name
 * @property string|null $product_qty
 * @property string|null $product_weight
 * @property string|null $product_image
 * @property string|null $product_options
 * @property string|null $product_price
 * @property string|null $product_total_price
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \App\Models\Order $orders
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem query()
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereOptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereProductImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereProductOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereProductPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereProductQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereProductTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereProductWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orderitem whereUpdatedBy($value)
 */
	class Orderitem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Page
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property int $sort_order
 * @property string $image
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedBy($value)
 */
	class Page extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Price
 *
 * @property int $id
 * @property int|null $currency_id
 * @property int|null $product_id
 * @property string|null $regular_price
 * @property string|null $discount_price
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \App\Models\Currency|null $currency
 * @property-read \App\Models\Product $products
 * @method static \Illuminate\Database\Eloquent\Builder|Price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Price newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Price query()
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereCurrencyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereDiscountPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereRegularPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Price whereUpdatedBy($value)
 */
	class Price extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property string|null $meta_tag_title
 * @property string|null $meta_tag_description
 * @property string|null $meta_tag_keywords
 * @property string|null $model
 * @property string|null $sku
 * @property string|null $upc
 * @property string|null $location
 * @property int $quantity
 * @property int $minimum_quantity
 * @property int $subtract_stock
 * @property string $out_of_stock
 * @property int $requires_shipping
 * @property string|null $date_available
 * @property string|null $weight
 * @property string|null $dimension_length
 * @property string|null $dimension_width
 * @property string|null $dimension_height
 * @property string|null $brand
 * @property string|null $option_name
 * @property string|null $image
 * @property string|null $images
 * @property int $best_selling
 * @property int $featured
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Coupon[] $coupons
 * @property-read int|null $coupons_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Option[] $options
 * @property-read int|null $options_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Option[] $optionsWithCurrentCurrency
 * @property-read int|null $options_with_current_currency_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\Price|null $price
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Price[] $prices
 * @property-read int|null $prices_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Product[] $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $wishlistUsers
 * @property-read int|null $wishlist_users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Product mightAlsoLikes()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBestSelling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDateAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDimensionHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDimensionLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDimensionWidth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMetaTagDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMetaTagKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMetaTagTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMinimumQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOptionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereOutOfStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereRequiresShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSubtractStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereWeight($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Roles
 *
 * @property int $id
 * @property string $name
 * @property string $permission
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Roles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles query()
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles wherePermission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Roles whereUpdatedBy($value)
 */
	class Roles extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Settings
 *
 * @property int $id
 * @property string $title
 * @property string|null $headline
 * @property string $email
 * @property string $from_email
 * @property string $phone
 * @property string|null $whatsapp
 * @property string $address
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $twitter
 * @property string|null $weight_class
 * @property string|null $dimension_class
 * @property string $logo
 * @property string $favico
 * @property int $status
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings query()
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereDimensionClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereFavico($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereFromEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereWeightClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Settings whereWhatsapp($value)
 */
	class Settings extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property int $id
 * @property string $name
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedBy($value)
 */
	class Tag extends \Eloquent {}
}

