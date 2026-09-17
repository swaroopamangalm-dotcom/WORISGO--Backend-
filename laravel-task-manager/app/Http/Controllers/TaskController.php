<?php

public function index() {
    return Task::all();
}

public function store(Request $request) {
    return Task::create($request->all());
}

public function update(Request $request, $id) {
    $task = Task::find($id);
    $task->update($request->all());
    return $task;
}

public function destroy($id) {
    Task::destroy($id);
    return response()->json(['message' => 'Deleted']);
}
