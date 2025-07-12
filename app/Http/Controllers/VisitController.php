<?php

namespace App\Http\Controllers;

use App\Http\Requests\VisitRequest;
use App\Http\Resources\VisitResource;
use App\Models\Visit;
use App\Services\VisitService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class VisitController extends Controller
{
    use AuthorizesRequests;

    public function __construct(public VisitService $visitService)
    {
    }

    public function index()
    {
        $this->authorize('viewAny', Visit::class);

        return VisitResource::collection(Visit::all());
    }

    public function store(VisitRequest $request)
    {
        $this->authorize('create', Visit::class);

        $validated = $request->validated();

        $visit = $this->visitService->createVisit($validated);

        return new VisitResource($visit);
    }

    public function show(Visit $visit)
    {
        $this->authorize('view', $visit);

        return new VisitResource($visit);
    }

    public function update(VisitRequest $request, Visit $visit)
    {
        $this->authorize('update', $visit);

        $visit->update($request->validated());

        return new VisitResource($visit);
    }

    public function destroy(Visit $visit)
    {
        $this->authorize('delete', $visit);

        $visit->delete();

        return response()->json();
    }
}
