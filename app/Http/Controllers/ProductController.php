<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $request){
        $request->validate([
            'categories' => 'nullable|array|min:0',
            'categories.*' => 'nullable|integer|min:1',
            'sort' => 'nullable|string|in:new-to-old,old-to-new,low-to-high,high-to-low',
            'page' => 'nullable|integer|min:1',
            'perPage' => 'nullable|integer|in:15,30,60,120',
        ]);

        $f_categories = $request->has('categories') ? $request->categories : [];
        $f_sort = $request->has('sort') ? $request->sort : null;
        $f_page = $request->has('page') ? $request->page : 1;
        $f_perPage = $request->has('perPage') ? $request->perPage : 15;

        $products = Product::when($f_categories, function ($query) use ($f_categories) {
            $query->whereIn('category_id', $f_categories);
        })
            ->with('category')
            ->when(isset($f_sort), function ($query) use ($f_sort) {
                if ($f_sort == 'old-to-new') {
                    $query->orderBy('id');
                } elseif ($f_sort == 'high-to-low') {
                    $query->orderBy('price', 'desc');
                } elseif ($f_sort == 'low-to-high') {
                    $query->orderBy('price');
                } else {
                    $query->orderBy('id', 'desc');
                }
            }, function ($query) {
                $query->orderBy('id', 'desc');
            })
            ->paginate($f_perPage, ['*'], 'page', $f_page)
            ->withQueryString();

        $categories = Category::orderBy('name')
            ->get();

        return view('sportswears')
            ->with([
                'products' => $products,
                'categories' => $categories,
                'f_categories' => $f_categories,
                'f_sort' => $f_sort,
                'f_perPage' => $f_perPage,
            ]);
    }







}
