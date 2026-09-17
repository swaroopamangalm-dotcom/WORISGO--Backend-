$.ajax({
    url: "/api/tasks",
    type: "POST",
    data: { title: "Task 1" },
    success: function(response) {
        console.log(response);
    }
});
