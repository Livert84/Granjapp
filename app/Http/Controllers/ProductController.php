<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function new_form(Request $request)
    {
        return view('admin.new-product-form', [
            "categories" => Category::all(),
            "tags" => Tag::all(),
        ]);
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|max:255",
            "short_description" => "required|max:255",
            //"content" => "required",
            "picture" => "required|image",
            "price" => "required|numeric|min:0",
            "stock" => "required|numeric|min:0",
            "category_id" => "required|exists:categories,id",
        ]);

        $picture = $request->file('picture');

        $picture_file_name = time() . $picture->getClientOriginalName();
        $picture->move(public_path('images'), $picture_file_name);

        $validated["picture"] = "/images/" . $picture_file_name;
        $validated["slug"] = Str::slug($validated["name"] . time());

        $product = Product::create($validated);

        $tags = $request->input('tags');

        $product->tags()->attach($tags);

        return redirect(route('admin-page'));
    }
    // Vista Publica del producto
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->get()->firstOrFail();
        $related_products = $product
            ->category
            ->products
            ->where('id', '!=', $product->id)
            ->shuffle()
            ->take(3);
        return view('public.single-product', [
            "product" => $product,
            "related_products" => $related_products,
        ]);
    }

    public function show_products(Request $request)
    {
        return view('public.show-products', [
            "products" => Product::all(),
        ]);
    }


    public function list(Request $request)
    {
        return view('admin.product-list', [
            "products" => Product::all(),
        ]);
    }

    public function edit(Product $product)
    {

        $categories = Category::all();
        $tags = Tag::all();
        return view(
            'admin.edit-product-form',
            [
                'product' => $product,
                'categories' => $categories,
                'tags' => $tags,

            ]
        );
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            "name" => "required|max:255",
            "short_description" => "required|max:255",
            //"content" => "required",
            "picture" => "required|image",
            "price" => "required|numeric|min:0",
            "stock" => "required|numeric|min:0",
            "category_id" => "required|exists:categories,id",
        ]);

        $picture = $request->file('picture');

        $picture_file_name = time() . '$picture->getClientOriginalName()';
        $picture->move(public_path('images'), $picture_file_name);

        $validated["picture"] = "/images/" . $picture_file_name;
        $product->update($validated);

        return to_route('edit-product-form', [
            'product' => $product,
        ])->with('status', 'Producto actualizado!');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return to_route('list-products')->with('status', 'Producto borrado!');
    }

    public function add_to_cart($id)
    {
        $cart = get_cart();

        $product = $cart->products()->find($id);
        if ($product == null) {
            $cart->products()->attach($id, ["units" => 1]);
            $cart->total_price += Product::find($id)->price;
            $cart->save();

        }
        else {
            $product->pivot->units++;
            $product->pivot->save();
        }

        return view('public.show-products', [
            "products" => Product::all(),
        ]);

    }
    public function add_one_to_cart($id)
    {
        $cart = get_cart();

        $product = $cart->products()->find($id);
        if ($product == null) {
            $cart->products()->attach($id, ["units" => 1]);
            $cart->total_price += Product::find($id)->price;
            $cart->save();

        }
        else {
            $product->pivot->units++;
            $product->pivot->save();
        }

        return view('public.cart-index');
    }

    public function rem_one_from_cart($id)
    {
        $cart = get_cart();

        //$cart->products()->detach($id);
        //$cart->total_price -= Product::find($id)->price;

        $product = $cart->products()->find($id);

        if ($product->pivot->units > 1) {
            $product->pivot->units--;
            $product->pivot->save();
        }
        else ($cart->products()->detach($id));

        $cart->save();

        return view('public.cart-index');
    }

    public function cart_index() {

        return view('public.cart-index');
    }
}

