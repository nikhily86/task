<?php

namespace App\Http\Controllers;

use App\Http\Requests\EligibilityCriteriaRequest;
use App\Models\EligibilityCriteria;

class EligibilityCriteriaController extends Controller
{
    public function index()
    {
        $eligibilityCriteria = EligibilityCriteria::all();
        return view('eligibilityCriteria.index', compact('eligibilityCriteria'));
    }

    public function create()
    {
        return view('eligibilityCriteria.create');
    }

    public function store(EligibilityCriteriaRequest $request)
    {
        EligibilityCriteria::create($request->validated());

        return redirect()->route('eligibility_criteria.index')
            ->with('success', 'Eligibility Criteria created successfully');
    }

    public function edit(EligibilityCriteria $eligibilityCriteria)
    {
        return view('eligibilityCriteria.edit', compact('eligibilityCriteria'));
    }

    public function update(EligibilityCriteriaRequest $request, EligibilityCriteria $eligibilityCriteria)
    {
        $eligibilityCriteria->update($request->validated());

        return redirect()->route('eligibility_criteria.index')
            ->with('success', 'Eligibility Criteria updated successfully');
    }

    public function destroy(EligibilityCriteria $eligibilityCriteria)
    {
        $eligibilityCriteria->delete();

        return redirect()->route('eligibility_criteria.index')
            ->with('success', 'Eligibility Criteria deleted successfully');
    }
}
