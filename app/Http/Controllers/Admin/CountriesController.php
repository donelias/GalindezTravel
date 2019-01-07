<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $countries = Country::where('code', 'LIKE', "%$keyword%")
                ->orWhere('country', 'LIKE', "%$keyword%")
                ->orWhere('continent_country', 'LIKE', "%$keyword%")
                ->orWhere('country_region', 'LIKE', "%$keyword%")
                ->orWhere('country_area', 'LIKE', "%$keyword%")
                ->orWhere('country_independence', 'LIKE', "%$keyword%")
                ->orWhere('country_population', 'LIKE', "%$keyword%")
                ->orWhere('country_life_expectancy', 'LIKE', "%$keyword%")
                ->orWhere('PaisProductoInternoBruto', 'LIKE', "%$keyword%")
                ->orWhere('PaisProductoInternoBrutoAntiguo', 'LIKE', "%$keyword%")
                ->orWhere('PaisNombreLocal', 'LIKE', "%$keyword%")
                ->orWhere('PaisGobierno', 'LIKE', "%$keyword%")
                ->orWhere('PaisJefeDeEstado', 'LIKE', "%$keyword%")
                ->orWhere('PaisCapital', 'LIKE', "%$keyword%")
                ->orWhere('PaisCodigo2', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $countries = Country::latest()->paginate($perPage);
        }

        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Country::create($requestData);

        return redirect('admin/countries')->with('flash_message', 'Country added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $country = Country::findOrFail($id);

        return view('admin.countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $country = Country::findOrFail($id);

        return view('admin.countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $country = Country::findOrFail($id);
        $country->update($requestData);

        return redirect('admin/countries')->with('flash_message', 'Country updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Country::destroy($id);

        return redirect('admin/countries')->with('flash_message', 'Country deleted!');
    }
}
