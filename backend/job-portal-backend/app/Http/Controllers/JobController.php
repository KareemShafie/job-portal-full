<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Resources\JobResource;


class JobController extends Controller
{
public function index(Request $request)
{
    $query = Job::with('company');

    if ($request->filled('title')) {
        $query->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower(trim($request->title)) . '%']);
    }

    if ($request->filled('location')) {
        $query->whereRaw('LOWER(location) LIKE ?', ['%' . strtolower(trim($request->location)) . '%']);
    }

    if ($request->filled('salary_from')) {
        $query->whereRaw("CAST(REPLACE(REPLACE(salary, '$', ''), ',', '') AS UNSIGNED) >= ?", [
            intval($request->salary_from)
        ]);
    }

    if ($request->filled('salary_to')) {
        $query->whereRaw("CAST(REPLACE(REPLACE(salary, '$', ''), ',', '') AS UNSIGNED) <= ?", [
            intval($request->salary_to)
        ]);
    }

    if ($request->filled('company_id')) {
        $query->where('company_id', $request->company_id);
    }

    if ($request->filled('job_type')) {
        $query->whereRaw('LOWER(job_type) = ?', [strtolower($request->job_type)]);
    }

    if ($request->filled('experience_level')) {
        $query->whereRaw('LOWER(experience_level) = ?', [strtolower($request->experience_level)]);
    }

    if ($request->filled('company_size')) {
        $query->whereHas('company', function ($q) use ($request) {
            $q->whereRaw('LOWER(size) = ?', [strtolower($request->company_size)]);
        });
    }

    if ($request->filled('sector')) {
        $query->whereHas('company', function ($q) use ($request) {
            $q->whereRaw('LOWER(sector) = ?', [strtolower($request->sector)]);
        });
    }

    return JobResource::collection($query->latest()->get());
}



    public function show(Job $job)
    {
        return $job->load('company');
    }

    public function update(Request $request, Job $job)
    {
        $job->update($request->all());
        return response()->json($job);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return response()->json(['message' => 'Job deleted successfully']);
    }
}
