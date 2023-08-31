use App\Http\Controllers\WebsiteController;

Route::post('websites/{website}/posts', [WebsiteController::class, 'createPost']);
Route::post('websites/{website}/subscribers', [WebsiteController::class, 'subscribe']);