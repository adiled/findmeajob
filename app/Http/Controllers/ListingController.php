<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Listing as Listing;

class ListingController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('listing.createupdate');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    $this->validate($request, [
      'job_title' => 'required',
      'description' => 'required',
      'salary' => 'required|integer',
      'work_hour_start' => 'required',
      'work_hour_end' => 'required'
    ]);

    $listing = new Listing($request->all());
    $listing->save();

    return redirect()->back()->with('success', 'Listing Created!');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    return view('listing.show', [
        'data' => Listing::findOrFail($id)
      ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $listing = Listing::findOrFail($id);
    return view('listing.createupdate', [
        'listing' => $listing
      ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, Request $request)
  {

    $this->validate($request, [
      'job_title' => 'required',
      'description' => 'required',
      'salary' => 'required|integer',
      'work_hour_start' => 'required',
      'work_hour_end' => 'required'
    ]);

    $listing = Listing::findOrFail($id);
    $listing->update($request->all());

    return redirect()->back()->with('success', 'Listing Updated');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>