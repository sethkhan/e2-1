<?php
namespace App\Controllers;

use App\Products;

class ProductController extends Controller
{
    private $products;

    /**
     *
     */
    public function __construct($app)
    {
        parent::__construct($app);

        # Load product data
        $this->products = new Products($this->app->path('database/products.json'));
    }

    /**
     * Listing of all products
     * /products
     */
    public function index()
    {
        return $this->app->view('products.index', [
            'products' => $this->products->getAll()
        ]);
    }

    /**
     * Show an individual product
     * /product?id={id}
     */
    public function show()
    {
        # Get the `id` route parameter
        $id = $this->app->param('id');

        # If no id is present, send the user to the products page
        if (is_null($id)) {
            $this->app->redirect('/products');
        }

        # Load the product details
        $product = $this->products->getById($id);

        # If we couldn't find the product, return the "product missing" view
        if (is_null($product)) {
            return $this->app->view('products.missing', ['id' => $id]);
        }

        # If the user submitted the review form, we'll have a confirmation name
        # that we'll pass to the view to show them a confirmation message
        $confirmationName = $this->app->old('confirmationName');
        
        return $this->app->view('products.show', [
            'product' => $product,
            'confirmationName' => $confirmationName
        ]);
    }

    /**
     * Process the review form from the product page
     * /products/save-review
     */
    public function saveReview()
    {
        $this->app->validate([
            'name' => 'required',
            'review' => 'required|minLength:200',
        ]);

        # If the above validation fails, the user is redirected back to the product page
        # and none of the following code will execute
        
        # Extract data from the form submission
        $name = $this->app->input('name');
        $review = $this->app->input('review');
        $id = $this->app->input('id');
        
        # TODO: Persist the review to the database
        
        # Send the user back to the product page with a `confirmationName`
        # we'll use to display a confirmation message.
        $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
    }
}
