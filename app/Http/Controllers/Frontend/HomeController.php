<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function home()
    {
        $testimonials = Testimonial::where('is_active', 1)
            ->latest('id')
            ->limit(9)->select(['id', 'client_name', 'client_designation', 'client_testimonial', 'client_image'])->get();

        $categories = Category::where('is_active', 1)->latest('id')->limit(4)->select(['id', 'title', 'category_image', 'slug'])->get();

        $trending_products = Product::where('is_active', 1)->latest('id')->limit(9)->select(['id', 'name', 'slug', 'product_price',
            'short_description', 'product_image'])->get();

        $products = Product::where('is_active', 1)
            ->latest('id')->select(['id', 'name', 'slug', 'product_price',
            'product_stock', 'product_rating', 'product_image'])->paginate(6);

        return view('frontend.pages.home', compact('testimonials', 'categories', 'trending_products', 'products'));
    }

    public function shopPage()
    {
        $categories_left = Category::where('is_active', 1)->latest('id')->limit(6)->select(['id', 'title', 'category_image', 'slug'])->get();

        $allproducts = Product::where('is_active', 1)
            ->latest('id')->select(['id', 'name', 'slug', 'product_price',
            'product_stock', 'product_rating', 'product_image'])->paginate(6);

        return view('frontend.pages.shop', compact('categories_left', 'allproducts'));
    }
    //shop page category wise product show
    public function shopPageByCategory($slug)
    {
        $allproducts = Product::where('is_active', 1)
            ->latest('id')
            ->select('id', 'name', 'slug', 'product_price', 'product_stock', 'product_rating', 'product_image')
            ->paginate(12);

        $categories = Category::where('is_active', 1)
            ->with('products')
            ->latest('id')
            ->limit(5)
            ->select(['id', 'title', 'slug'])
            ->get();

        return view('frontend.pages.category-shop', compact(
            'allproducts',
            'categories'

        ));

    }

    public function productDetails($product_slug)
    {
        $product = Product::whereSlug($product_slug)
            ->with('category', 'productImages')
            ->first();
        return view('frontend.pages.single-product', compact('product'));
    }
}
