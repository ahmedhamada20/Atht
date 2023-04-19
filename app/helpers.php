<?php

use App\Models\Blog;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\SubCategory;

if (!function_exists('getInformation')) {
    function getInformation()
    {
        $data = Setting::first();
        if (!empty($data)) {
            return $data;
        }
    }
}
if (!function_exists('getSlidres')) {
    function getSlidres()
    {
        $data = Slider::get();
        if (!empty($data)) {
            return $data;
        }
    }
}
if (!function_exists('getSubCategory')) {
    function getSubCategory()
    {
        $data = SubCategory::get();
        if (!empty($data)) {
            return $data;
        }
    }
}
if (!function_exists('getProducts')) {
    function getProducts()
    {
        $data = Product::get();
        if (!empty($data)) {
            return $data;
        }
    }
}
if (!function_exists('getRoundProducts')) {
    function getRoundProducts()
    {
        $data = Product::inRandomOrder()->limit(2)->get();
        if (!empty($data)) {
            return $data;
        }
    }
}
if (!function_exists('getBlogs')) {
    function getBlogs()
    {
        $data = Blog::get();
        if (!empty($data)) {
            return $data;
        }
    }
}