<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComboPlanRequest;
use App\Models\ComboPlan;
use App\Models\Plan;

class ComboPlanController extends Controller
{
    public function index()
    {
        $comboPlans = ComboPlan::all();
        return view('comboPlans.index', compact('comboPlans'));
    }

    public function create()
    {
        $plans = Plan::all();
        return view('comboPlans.create', compact('plans'));
    }

    public function store(ComboPlanRequest $request)
    {
        ComboPlan::create($request->validated());

        return redirect()->route('combo_plans.index')
            ->with('success', 'Combo Plan created successfully');
    }

    public function edit(ComboPlan $comboPlan)
    {
        $plans = Plan::all();
        return view('comboPlans.edit', compact('comboPlan', 'plans'));
    }

    public function update(ComboPlanRequest $request, ComboPlan $comboPlan)
    {
        $comboPlan->update($request->validated());
        return redirect()->route('combo_plans.index')
            ->with('success', 'Combo Plan updated successfully');
    }

    public function destroy(ComboPlan $comboPlan)
    {
        $comboPlan->delete();

        return redirect()->route('combo_plans.index')
            ->with('success', 'Combo Plan deleted successfully');
    }
}
