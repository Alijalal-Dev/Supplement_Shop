<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();

        return view('Dashboard.Products.products', compact('products'));
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:supplement,accesoire',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max
            'category' => 'required|string|in:proteine,creatine,vitamine,accesoire',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
            $imagePath = 'images/products/' . $imageName;
        }

        // Create new product
        $product = new Product();
        $product->name = $validated['name'];
        $product->type = $validated['type'];
        $product->price = $validated['price'];
        $product->description = $validated['description'];
        $product->category = $validated['category'];
        $product->image = $imagePath ?? null;
        $product->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'product added successfully!');
    }

    public function update(Request $request, $id)
    {
        // Find the product
        $product = Product::findOrFail($id);

        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|in:supplement,accesoire',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max
            'category' => 'required|string|in:proteine,creatine,vitamine,accesoire',
        ]);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($product->image && File::exists(public_path($product->image))) {
                File::delete(public_path($product->image));
            }

            // Upload new image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
            $product->image = 'images/products/' . $imageName;
        }

        // Update other fields
        $product->name = $validated['name'];
        $product->type = $validated['type'];
        $product->price = $validated['price'];
        $product->description = $validated['description'];
        $product->category = $validated['category'];
        $product->save();

        return redirect()->back()->with('success', 'product updated successfully!');
    }
    
    public function destroy($id)
    {

        $product= Product::findOrFail($id);

        if ($product->image && File::exists(public_path($product->image))) {
            File::delete(public_path($product->image));
        }

        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
}
