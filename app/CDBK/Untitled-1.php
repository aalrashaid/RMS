    /**
    * this funcation to loga Response
    */
    public function setLoga($filename)
    {
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
    abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
    }

    /**
    * This funcation to logo uploads by storage
    */
    public function uploadLoga(Request $request)
    {
    // cache the file
    $file = $request->file('BrandLogas');

    // generate a new filename. getClientOriginalExtension() for the file extension
    $filename = 'profile-photo-' . time() . '.' . $file->getClientOriginalExtension();

    // save to storage/app/photos as the new $filename
    $path = $file->storeAs('public/Brands/Loga', $filename);

    dd($path);
    }