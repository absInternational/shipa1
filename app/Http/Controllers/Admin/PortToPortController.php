<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortToPort;

class PortToPortController extends Controller
{
    public function index()
    {
        $portToPorts = PortToPort::all();
        return view('dashboard.admin.port_to_ports.index', compact('portToPorts'));
    }

    public function create()
    {
        return view('dashboard.admin.port_to_ports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'port_detail_id' => 'required|integer',
            'delivery_port_name' => 'required|string|max:255',
            'delivery_country' => 'required|string|max:255',
            'delivery_latitude' => 'nullable|string|max:255',
            'delivery_longitude' => 'nullable|string|max:255',
            'price' => 'required|numeric',
        ]);

        PortToPort::create($request->all());

        return redirect()->route('port-to-ports.index')
            ->with('success', 'Port to Port created successfully.');
    }

    public function show(PortToPort $portToPort)
    {
        return view('dashboard.admin.port_to_ports.show', compact('portToPort'));
    }

    public function edit(PortToPort $portToPort)
    {
        return view('dashboard.admin.port_to_ports.edit', compact('portToPort'));
    }

    public function update(Request $request, PortToPort $portToPort)
    {
        $request->validate([
            'port_detail_id' => 'required|integer',
            'delivery_port_name' => 'required|string|max:255',
            'delivery_country' => 'required|string|max:255',
            'delivery_latitude' => 'nullable|string|max:255',
            'delivery_longitude' => 'nullable|string|max:255',
            'price' => 'required|numeric',
        ]);

        $portToPort->update($request->all());

        return redirect()->route('port-to-ports.index')
            ->with('success', 'Port to Port updated successfully.');
    }

    public function destroy(PortToPort $portToPort)
    {
        $portToPort->delete();

        return redirect()->route('port-to-ports.index')
            ->with('success', 'Port to Port deleted successfully.');
    }
}