<div class="container">
    <form action="login/run" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"
                   required>
        </div>
        <div class="form-group">
            <label for="pwd">Start Date:</label>
            <input type="date" class="form-control" id="start_date" placeholder="Enter start date" name="start_date"
                   required>
        </div>
        <div class="form-group">
            <label for="pwd">End Date:</label>
            <input type="date" class="form-control" id="end_date" placeholder="Enter end date" name="end_date" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
