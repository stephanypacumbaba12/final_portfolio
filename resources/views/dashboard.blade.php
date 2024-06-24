<x-app-layout>
    <x-slot name="header">
      
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @if(auth()->user()->user_type == 'user')
            {{ __('Jobless') }}
            @elseif(auth()->user()->user_type == 'employer')
            {{ __('Dashboard Employer') }}
            @endif
        </h2>
    </x-slot>
    
        <!-- ***** Fleet Starts ***** -->
        @if(auth()->user()->user_type == 'user')
        <section class="section" id="trainers" style="margin-left: 380px;margin-top:100px;">
            <div class="container">
            
    
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="trainer-item">
                                    <div class="image-thumb">
                                        <img src="product-1-720x480.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span> <sup>$</sup>70 000 </span>
    
                                        <h4>Lorem ipsum dolor sit amet, consectetur</h4>
    
                                        <p>Medical &nbsp;/&nbsp; Health Jobs</p>
    
                                        <ul class="social-icons">
                                            <li><a href="#" class="view-more" data-modal="modal1">+ View More</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="trainer-item">
                                    <div class="image-thumb">
                                        <img src="product-2-720x480.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span> <sup>$</sup>70 000 </span>
    
                                        <h4>Lorem ipsum dolor sit amet, consectetur</h4>
    
                                        <p>professional window &nbsp;/&nbsp; Cleaning</p>
    
                                        <ul class="social-icons">
                                            <li><a href="#" class="view-more" data-modal="modal2">+ View More</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="trainer-item">
                                    <div class="image-thumb">
                                        <img src="product-3-720x480.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span> <sup>$</sup>70 000 </span>
    
                                        <h4>Lorem ipsum dolor sit amet, consectetur</h4>
    
                                        <p>Teacher &nbsp;/&nbsp; 2nd Mother</p>
    
                                        <ul class="social-icons">
                                            <li><a href="#" class="view-more" data-modal="modal3">+ View More</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <div class="trainer-item">
                                    <div class="image-thumb">
                                        <img src="product-4-720x480.jpg" alt="">
                                    </div>
                                    <div class="down-content">
                                        <span> <sup>$</sup>70 000 </span>
    
                                        <h4>Lorem ipsum dolor sit amet, consectetur</h4>
    
                                        <p>Technician &nbsp;/&nbsp;Engineering</p>
    
                                        <ul class="social-icons">
                                            <li><a href="#" class="view-more" data-modal="modal4">+ View More</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    
                            
                        </div>
                    </div>
                </div>
      

                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h4>Medical Requirements</h4>
                        <p>1.Pre-Employment Medical Examination: Includes physical, vision, and hearing tests tailored to job demands.<br>

                            2.Drug and Alcohol Screening: Ensures a safe workplace, especially in safety-sensitive roles.<br>
                            
                            3.Immunizations: Required for roles involving public health or safety.<br>
                            
                            4.Medical History Questionnaire: Discloses health conditions that could affect job performance.<br>
                            
                            5.Fitness for Duty Certification: Confirms ability to handle job requirements, especially physical tasks.<br>
                            
                            6.Psychological Evaluation: May be needed for high-stress or safety-critical positions.<br>
                            
                            7.Continued Medical Surveillance: Periodic check-ups for ongoing health monitoring in certain industries.</p>


                            <form id="applyForm1" class="apply-form" style="display: none;">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" readonly><br><br>
                            
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" readonly><br><br>
                                
                                <div style="text-align: right;">
                                    <button type="button" class="btn-submit">Submit Application</button>
                                </div>
                                
                                <div class="success-message" style="display: none;">
                                    Application Submitted. Please wait for a while.
                                </div>
                            </form>

                        <div style="text-align: right;">
                            <a href="" class="btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>

                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h4>Professional window cleaning Requirements</h4>
                        <p>1.Experience and Training: Previous experience and training in window cleaning methods and equipment.<br>

                            2.Physical Fitness: Ability to perform physically demanding tasks like climbing ladders and reaching high windows.<br>
                            
                            3.Safety Certifications: Depending on regulations, certifications like Working at Heights may be required.<br>
                            
                            4.Attention to Detail: Thorough and streak-free cleaning of windows, especially in commercial settings.<br>
                            
                            5.Reliability: Punctuality and consistency in meeting job schedules.<br>
                            
                            6.Communication Skills: Ability to communicate effectively with clients and team members.<br>
                            
                            7.Commitment to Safety: Knowledge and adherence to safety protocols.<br>
                            
                            8.Driver's License: Often required for transporting equipment between job sites.<br>
                            
                            9.Background Check: Some employers may conduct background checks.<br>

                            
                            10.References: Providing references to demonstrate reliability and quality of work.</p>

                            <form id="applyForm1" class="apply-form" style="display: none;">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" readonly><br><br>
                            
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" readonly><br><br>
                                
                                <div style="text-align: right;">
                                    <button type="button" class="btn-submit">Submit Application</button>
                                </div>
                                
                                <div class="success-message" style="display: none;">
                                    Application Submitted. Please wait for a while.
                                </div>
                            </form>

                        <div style="text-align: right;">
                            <a href="" class="btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>

                
                <div id="modal3" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h4>Teacher Requirements</h4>
                        <p>1.Education and Certification: Bachelor's degree in education or relevant subject; teaching certification or licensure.<br>

                            2.Subject Expertise: Proficiency in the subject(s) they will teach.<br>

                            
                            3.Teaching Skills: Ability to use effective teaching methods and manage classrooms.<br>

                            
                            4.Communication: Strong communication skills for interacting with students, colleagues, and parents.<br>

                            
                            5.Organization: Skills in lesson planning, student assessment, and resource management.<br>

                            
                            6.Technology Proficiency: Familiarity with educational technology tools.<br>

                            
                            7.Professional Development: Commitment to ongoing learning and development.<br>

                            
                            8.Background Check: Clear criminal background check and references.<br>

                            
                            9.Passion: Dedication to fostering student growth and development.</p>

                            <form id="applyForm1" class="apply-form" style="display: none;">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" readonly><br><br>
                            
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" readonly><br><br>
    
                                <div style="text-align: right;">
                                    <button type="button" class="btn-submit">Submit Application</button>
                                </div>
                                
                                <div class="success-message" style="display: none;">
                                    Application Submitted. Please wait for a while.
                                </div>
                            </form>
                        <div style="text-align: right;">
                            <a href="" class="btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>

                
                <div id="modal4" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h4>Technician Requirments</h4>
                        <p>1.Education and Training: Completion of relevant technical education or apprenticeship.

                            2.Certifications: Required certifications like CompTIA A+ or ASE depending on the field.
                            
                           3.Experience: Previous experience in a related role is preferred.
                            
                            4.Technical Skills: Proficiency in tools, equipment, and troubleshooting.
                            
                            5.Attention to Detail: Ability to perform tasks accurately and safely.
                            
                            6.Communication: Clear communication skills for interacting with team members and customers.
                            
                            7.Teamwork: Ability to collaborate effectively in a team environment.
                            
                            8.Customer Service: Good customer service skills for client-facing roles.
                            
                            9.Adaptability: Willingness to learn and adapt to new technologies and procedures.</p>

                            <form id="applyForm4" class="apply-form" style="display: none;">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" readonly><br><br>
                            
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" readonly><br><br>
                
                                <div style="text-align: right;">
                                    <button type="button" class="btn-submit">Submit Application</button>
                                </div>
                            </form>
                        <div style="text-align: right;">
                            <a href="" class="btn-apply">Apply Now</a>
                        </div>
                    </div>
                </div>
    </div>
    </section>
    @elseif(auth()->user()->user_type == 'employer')
    @if ($users->isEmpty())
        <p>No users found.</p>
    @else
        @php
            $user = $users->first(); // Get the first user in the collection
        @endphp
     <style>
        th, td {
          border: 1px solid black;
          border-radius: 10px;
        }
        </style>
        </head>
        <body>
        
        <h2>Table of hiring users</h2>
        
        <p>Record</p>
        
        <table style="width:100%">
          <tr>
            <th>Name</th>
            <th>Email</th> 
            <th>Action</th>
          </tr>
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{route('chatify')}}">Reply</a></td>
          </tr>
        </table>
    @endif
@endif
</x-app-layout>
<style>
    /* Modal styles */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1000; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto; /* Enable scroll if needed */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        text-align: center; /* Center align the content */
    }

    p{
        text-align: justify;
    }

    .btn-apply{
        background-color: red;
        border-radius: 10px;
        padding: 5px;
        color: white;
        box-sizing: border-box;
    }

    .modal-content {
        background-color: #fefefe;
        margin: auto; /* Center the modal */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
        max-width: 600px; /* Limit max width */
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        position: relative; /* Ensure position relative for absolute centering */
        top: 50%; /* Position the modal center vertically */
        transform: translateY(-50%); /* Adjust for vertical centering */
    }

    .close {
        color: #aaa;
        position: absolute;
        top: 8px;
        right: 16px;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modals = document.querySelectorAll('.modal');

        // Function to open modal
        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.style.display = "block";
        }

        // Function to close modal
        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            modal.style.display = "none";
        }

        // Event listeners to open each modal
        document.querySelectorAll('.view-more').forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default link behavior
                var modalId = this.getAttribute('data-modal');
                openModal(modalId);
            });
        });

        // Event listener to close modal when clicking on the close button
        document.querySelectorAll('.close').forEach(function(closeButton) {
            closeButton.addEventListener('click', function() {
                var modalId = this.closest('.modal').getAttribute('id');
                closeModal(modalId);
            });
        });

        // Event listener to close modal when clicking outside of it
        window.addEventListener('click', function(event) {
            modals.forEach(function(modal) {
                if (event.target === modal) {
                    var modalId = modal.getAttribute('id');
                    closeModal(modalId);
                }
            });
        });

        // Event listener to show apply form when clicking "Apply Now" button
        document.querySelectorAll('.btn-apply').forEach(function(btnApply) {
            btnApply.addEventListener('click', function(e) {
                e.preventDefault();
                var modal = this.closest('.modal'); // Find the closest modal parent

                // Hide modal content except apply form
                modal.querySelectorAll('.modal-content > *:not(.apply-form)').forEach(function(element) {
                    element.style.display = 'none';
                });

                // Show apply form
                var applyForm = modal.querySelector('.apply-form'); // Find the apply form inside modal
                applyForm.style.display = 'block'; // Show apply form
            });
        });

        document.querySelectorAll('.btn-submit').forEach(function(btnSubmit) {
    btnSubmit.addEventListener('click', function() {
        var modal = this.closest('.modal');
        var applyForm = modal.querySelector('.apply-form');

        // Simulate form submission
        // Replace this with actual form submission logic (e.g., Ajax request)
        setTimeout(function() {
            applyForm.style.display = 'none'; // Hide apply form

            // Create a <p> element for the success message
            var successMessage = document.createElement('p');
            successMessage.textContent = "Application Submitted. Please wait for the reply :).";
            successMessage.style.textAlign = 'center'; // Center align the text
            successMessage.style.backgroundColor = 'green';
            successMessage.style.color = 'white';
            // Clear existing modal content and append the success message
            var modalContent = modal.querySelector('.modal-content');
            modalContent.innerHTML = ''; // Clear existing content
            modalContent.appendChild(successMessage);

        }, 1000); // Adjust delay time as needed (1000ms = 1 second)

        // Prevent default form submission behavior
        return false;
    });
});

    });
</script>

        <link rel="stylesheet" type="text/css" href="{{asset('job/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('job/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('job/style.css')}}">