use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route for the homepage
Route::get('/', function () {
    return view('welcome');
});

// Route to display a user with a specific ID
Route::get('/users/{id}', function ($id) {
    return 'User ID: ' . $id;
});

// Route to a controller method
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route for submitting a form
Route::post('/submit', function () {
    // Handle form submission
});