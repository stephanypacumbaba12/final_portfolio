<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Resume</title>
    <link rel="stylesheet" href="{{ asset('css/resume_form.css') }}">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    padding: 20px;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.section {
    margin-bottom: 30px;
}

h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

textarea {
    width: 100%;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
}

.btn:hover {
    background-color: #0056b3;
}

</style>
<body>
    <div class="container">
        <h1>Edit Resume</h1>
            <form method="POST" action="{{ route('resumes.update', ['resume' => $resumes->id]) }}">
                @csrf
                @method('PUT')
    
                <section class="section">
                    <h2>Personal Information</h2>
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" id="full_name" name="full_name" class="form-control" value="{{ $resumes->full_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ $resumes->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" class="form-control" value="{{ $resumes->phone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" class="form-control" value="{{ $resumes->address }}">
                    </div>
                </section>
    
                <section class="section">
                    <h2>Education</h2>
                    <div class="form-group">
                        <label for="university">University</label>
                        <input type="text" id="university" name="university" class="form-control" value="{{ $resumes->university }}">
                    </div>
                    <div class="form-group">
                        <label for="degree">Degree</label>
                        <input type="text" id="degree" name="degree" class="form-control" value="{{ $resumes->degree }}">
                    </div>
                    <div class="form-group">
                        <label for="edu_start_date">Start Date</label>
                        <input type="date" id="edu_start_date" name="edu_start_date" class="form-control" value="{{ $resumes->edu_start_date }}">
                    </div>
                    <div class="form-group">
                        <label for="edu_end_date">End Date</label>
                        <input type="date" id="edu_end_date" name="edu_end_date" class="form-control" value="{{ $resumes->edu_end_date }}">
                    </div>
                </section>
    
                <section class="section">
                    <h2>Work Experience</h2>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company" class="form-control" value="{{ $resumes->company }}">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position" class="form-control" value="{{ $resumes->position }}">
                    </div>
                    <div class="form-group">
                        <label for="work_start_date">Start Date</label>
                        <input type="date" id="work_start_date" name="work_start_date" class="form-control" value="{{ $resumes->work_start_date }}">
                    </div>
                    <div class="form-group">
                        <label for="work_end_date">End Date</label>
                        <input type="date" id="work_end_date" name="work_end_date" class="form-control" value="{{ $resumes->work_end_date }}">
                    </div>
                    <div class="form-group">
                        <label for="responsibilities">Responsibilities</label>
                        <textarea id="responsibilities" name="responsibilities" rows="5" class="form-control">{{ $resumes->responsibilities }}</textarea>
                    </div>
                </section>
    
                <button type="submit" class="btn btn-primary">Update Resume</button>
                <a href="/resumes" class="btn back-btn">Back</a>
            </form>
    </div>
</body>
</html>
