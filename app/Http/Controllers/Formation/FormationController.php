<?php


namespace App\Http\Controllers\Formation;
use App\Http\Controllers\Controller;
use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::all();
        return view('user\formation_info\index', compact('formations'));
    }

    public function create()
    {
        return view('formations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'user_id' => 'required',

        ]);

        Formation::create($validated);

        return redirect()->route('formations.index')->with('success', 'Formation created successfully');
    }

    public function show(Formation $formation)
    {
        return view('formations.show', compact('formation'));
    }

    public function edit(Formation $formation)
    {
        return view('formations.edit', compact('formation'));
    }

    public function update(Request $request, Formation $formation)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required',
        ]);

        $formation->update($validated);

        return redirect()->route('formations.index')->with('success', 'Formation updated successfully');
    }

    public function destroy(Formation $formation)
    {
        $formation->delete();

        return redirect()->route('formations.index')->with('success', 'Formation deleted successfully');
    }

    
}
