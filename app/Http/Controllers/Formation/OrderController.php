<?php

namespace App\Http\Controllers\Formation;
use App\Http\Controllers\Controller;

use App\Models\Order;
use App\Models\User;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required',
            'formation_id' => 'required',
            'order_date' => 'required',
            'status' => 'required',
        ]);

        Order::create($validated);

        return redirect()->route('formations.index')->with('success', 'Order created successfully');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'student_id' => 'required',
            'formation_id' => 'required',
            'order_date' => 'required',
            'status' => 'required',
        ]);

        $order->update($validated);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully');
    }

    public function destroy($formationId, $userId)
{
    // Find the order based on the formation and user IDs
    $order = Order::where('formation_id', $formationId)
        ->where('student_id', $userId)
        ->first();

    if ($order) {
        $order->delete();
        return redirect()->route('formations.index')->with('success', 'Order deleted successfully');
    } else {
        return redirect()->route('formations.index')->with('error', 'Order not found or could not be deleted.');
    }
}


     
    public function hasOrderedFormation($formationId,$student_id)
    {
        
        // Check if the user has an order for the specified formation.
        return Order::where('student_id', $student_id)
            ->where('formation_id', $formationId)
            ->exists();
    }
    public function getUsersWhoOrderedFormation($formationId)
{
    // Find all orders for the specified formation
    $orders = Order::where('formation_id', $formationId)->get();

    // Get the user details for each order
    $userDetails = [];
    foreach ($orders as $order) {
        $user = User::find($order->student_id);
        if ($user) {
            $userDetails[] = [
                'name' => $user->name,
                'email' => $user->email,
                'order_date' => $order->order_date,
                'order_id' => $order->id,
                'status' => $order->status,
            ];
        }
    }

    return $userDetails;
}
public function toggleStatus(Order $order)
{
    $order->status = $order->status === 'pending' ? 'accepted' : 'pending';
    $order->save();

    return $order->status;
}


}
