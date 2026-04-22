//Router dengan metode POST
Route::post('/simpan', function(){
    echo "Data berhasil disimpan";
});

//Router dengan metode PUT
Route::put('/update/{id}', function($id){
    echo "Data berhasil diperbarui dengan ID: " . $id;
});

//Router dengan metode PATCH
Route::patch('/update2/{id}', function($id){
    echo "Data berhasil diperbarui dengan ID: " . $id;
});

//Router dengan metode DELETE
Route::delete('/hapus/{id}', function($id){
    echo "Data berhasil dihapus dengan ID: " . $id;
});
//Route untuk menampilkan halaman test_method
Route::get('/test-method', function(){
    return view('test_method');
});