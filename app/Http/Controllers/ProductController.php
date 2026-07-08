<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * List semua produk
     */

    public function index()
    {
        // Ambil semua produk aktif, eager load category
        $products = Product::where('is_active', true)
            ->orderBy('sort_order')
            ->with('category')
            ->get();

        // Group by kategori
        $groupedProducts = $products->groupBy(function ($product) {
            return $product->category?->name_en ?? $product->category?->name_id ?? 'Other';
        });

        $title = app()->getLocale() === 'en'
            ? setting('nav_product_en', setting('nav_product', 'Products'))
            : setting('nav_product', 'Produk');

        return view(
            'frontend.pages.products.index',
            compact('groupedProducts', 'title')
        );
    }
    // public function index()
    // {
    //     $products = Product::where('is_active', true)
    //         ->orderBy('sort_order')
    //         ->latest()
    //         ->paginate();

    //     $title = app()->getLocale() === 'en'
    //         ? setting('nav_product_en', setting('nav_product', 'Products'))
    //         : setting('nav_product', 'Produk');

    //     // Spesifikasi untuk section di bawah product grid
    //     $specs = [
    //         ['label' => 'Range',               'value' => '50m – 5 km'],
    //         ['label' => 'Accuracy',            'value' => '≤0.1 mm'],
    //         ['label' => 'Distance Resolution', 'value' => '≤0.2 meter'],
    //         ['label' => 'Angular Resolution',  'value' => '≤5 mrad'],
    //         ['label' => 'Coverage',            'value' => '360° horizontal'],
    //         ['label' => 'Update Rate',         'value' => '≤1 menit'],
    //         ['label' => 'Power Consumption',   'value' => '≤40 W'],
    //         ['label' => 'IP Rating',           'value' => 'IP65'],
    //     ];

    //     return view(
    //         'frontend.pages.products.index',
    //         compact('products', 'title', 'specs')
    //     );
    // }

    /**
     * Search produk (AJAX) — tanpa filter kategori
     */
    public function search(Request $request)
    {
        $keyword = $request->get('keyword');
        $locale = app()->getLocale();

        $products = Product::where('is_active', true)
            ->when($keyword, function ($q) use ($keyword, $locale) {
                if ($locale === 'en') {
                    $q->where('name_en', 'LIKE', "%{$keyword}%")
                        ->orWhere('headline_en', 'LIKE', "%{$keyword}%")
                        ->orWhere('description_en', 'LIKE', "%{$keyword}%");
                } else {
                    $q->where('name_id', 'LIKE', "%{$keyword}%")
                        ->orWhere('headline_id', 'LIKE', "%{$keyword}%")
                        ->orWhere('description_id', 'LIKE', "%{$keyword}%");
                }
            })
            ->orderBy('sort_order')
            ->paginate(9);

        return response()->json([
            'html' => view(
                'frontend.pages.products.partials.products-list',
                compact('products')
            )->render(),

            'pagination' => $products
                ->links('pagination::tailwind')
                ->toHtml(),
        ]);
    }

    /**
     * Detail produk
     */
    public function show(string $categorySlug, string $productSlug)
    {
        $category = ProductCategory::where('slug', $categorySlug)
            ->where('is_active', true)
            ->firstOrFail();

        $product = Product::where('slug', $productSlug)
            ->where('product_category_id', $category->id)
            ->where('is_active', true)
            ->firstOrFail();

        $relatedProducts = Product::where('product_category_id', $category->id)
            ->where('is_active', true)
            ->where('id', '!=', $product->id)
            ->orderBy('sort_order')
            ->limit(4)
            ->get();

        $title = app()->getLocale() === 'en' && $product->name_en
            ? $product->name_en
            : $product->name_id;

        return view(
            'frontend.pages.products.show',
            compact('category', 'product', 'relatedProducts', 'title')
        );
    }
}