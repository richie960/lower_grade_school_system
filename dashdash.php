<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="dashdash.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Admin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="images/students/student1.jpg.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="dashdash.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="student/" class="dropdown-item">Credit</a>
                            <a href="Reports/" class="dropdown-item">Reports</a>
                            <a href="register/" class="dropdown-item">Registration</a>
                            <a href="dashdash.php" class="dropdown-item">Reload</a>
                         
                        </div>
                    </div>
                   
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="index.php" class="dropdown-item">Sign In</a>
                            
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="dashboard.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    
                                    <div class="ms-2">
                                        
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    
                                    <div class="ms-2">
                                      
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                  
                                    <div class="ms-2">
                                       
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notification</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                          
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="images/students/student1.jpg.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            
                            <a href="index.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

<?php include 'card.php'?>
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Students</p>
                                <h6 class="mb-0"><?php  echo $totalStudents ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Paid total</p>
                                <h6 class="mb-0"><?php echo $totalAmount ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Unpaid total</p>
                                <h6 class="mb-0"><?php  echo $totalBalance?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Cleared-INV</p>
                                <h6 class="mb-0"><?php echo $countStatusOne ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <?php include 'gg.php'; ?>
            <?php include 'status.php'?>

<?php include 'updatenames.php' ?>
  <div>
  <style>
        .hidden-row {
            display: none;
        }
        .disabled-btn {
            pointer-events: none;
            opacity: 0.6;
        }
        .message {
            display: none;
            padding: 10px;
            margin-bottom: 10px;
        }
        .message.success {
            background-color: #d4edda;
            color: #155724;
        }
        .message.error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">TRANSACTION DATA</h6>
                <div>
                    <button id="showMoreBtn" class="btn btn-sm btn-primary">Show More</button>
                    <button id="showLessBtn" class="btn btn-sm btn-secondary" style="display: none;">Show Less</button>
                    <button id="sendMultipleRemindersBtn" class="btn btn-sm btn-primary">Send Multiple Reminders</button>
                </div>
            </div>
            <div id="message" class="message"></div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col"><input id="selectAll" class="form-check-input" type="checkbox"></th>
                            <th scope="col">Date</th>
                            <th scope="col">Invoice</th>
                            <th scope="col">Student</th>
                            <th scope="col">ADNO</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Term</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php include 'fetch_studentfees.php'; ?>

                    <?php foreach ($feesData as $index => $fee): ?>
                        <tr class="<?php echo $index >= 10 ? 'hidden-row' : ''; ?>">
                            <td><input class="form-check-input" type="checkbox" data-adno="<?php echo $fee['adno']; ?>" <?php echo ($fee['status'] == 1 || (strtotime($fee['last_reminder']) + 24*60*60 > time())) ? 'disabled' : ''; ?>></td>
                            <td><?php echo htmlspecialchars($fee['payment_date']); ?></td>
                            <td><?php echo htmlspecialchars($fee['MpesaReceiptNumber']); ?></td>
                            <td><?php echo htmlspecialchars($fee['firstname']); ?></td>
                            <td><?php echo htmlspecialchars($fee['adno']); ?></td>
                            <td><?php echo htmlspecialchars($fee['Amount']); ?></td>
                            <td><?php echo htmlspecialchars($fee['term']); ?></td>
                            <td>
                                <?php if ($fee['status'] != 1): ?>
                                    <button class="btn btn-sm btn-primary action-btn" data-adno="<?php echo $fee['adno']; ?>" <?php echo (strtotime($fee['last_reminder']) + 24*60*60 > time()) ? 'disabled' : ''; ?>>Send Reminder</button>
                                <?php else: ?>
                                    <button class="btn btn-sm btn-secondary" disabled>Completed Payment</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.action-btn');
            const sendMultipleRemindersBtn = document.getElementById('sendMultipleRemindersBtn');
            const messageDiv = document.getElementById('message');
            const selectAllCheckbox = document.getElementById('selectAll');

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    const adno = button.getAttribute('data-adno');
                    fetch('send_reminder.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ adno: adno })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (Array.isArray(data) && data.length > 0) {
            const data1 = data[0]; 
                        if (data1.status ==="success") {
                            button.disabled = true;
                            button.textContent = 'Reminder Sent';
                            button.classList.remove('btn-primary');
                            button.classList.add('btn-secondary');
                            showMessage('Reminder sent successfully', 'success');
                        } else {
                            showMessage('Cooldown or inactive', 'error');
                        }
            
                    
                    }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showMessage('Check your internet connection!!', 'error');

                    
                    });
                
                });
            });

            sendMultipleRemindersBtn.addEventListener('click', function() {
                const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]:checked');
                const adnos = [];
                checkboxes.forEach(checkbox => {
                    if (!checkbox.disabled) {
                        adnos.push(checkbox.getAttribute('data-adno'));
                    }
                });

                if (adnos.length > 0) {
                    fetch('send_multiple_reminders.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ adnos: adnos })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (Array.isArray(data) && data.length > 0) {
            const data1 = data[0]; 
                        if (data1.status ==="success") {
                            checkboxes.forEach(checkbox => {
                                checkbox.disabled = true;
                                const row = checkbox.closest('tr');
                                const button = row.querySelector('.action-btn');
                                if (button) {
                                    button.disabled = true;
                                    button.textContent = 'Reminder Sent';
                                    button.classList.remove('btn-primary');
                                    button.classList.add('btn-secondary');
                                }
                            });
                            showMessage('Reminders sent successfully', 'success');
                        } else {
                            showMessage('Cooldown or inactive', 'error');
                        }
                    }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showMessage('Check your internet connection!!', 'error');
                    });
                } else {
                    showMessage('No eligible reminders to send', 'error');
                }
            });

            function showMessage(message, type) {
                messageDiv.textContent = message;
                messageDiv.className = 'message ' + type;
                messageDiv.style.display = 'block';
                setTimeout(() => {
                    messageDiv.style.display = 'none';
                }, 5000);
            }

            selectAllCheckbox.addEventListener('change', function() {
                const checkboxes = document.querySelectorAll('tbody input[type="checkbox"]');
                checkboxes.forEach(checkbox => {
                    if (!checkbox.disabled) {
                        checkbox.checked = selectAllCheckbox.checked;
                    }
                });
            });

            const showMoreBtn = document.getElementById('showMoreBtn');
            const showLessBtn = document.getElementById('showLessBtn');

            showMoreBtn.addEventListener('click', function() {
                const hiddenRows = document.querySelectorAll('.hidden-row');
                hiddenRows.forEach(row => {
                    row.classList.remove('hidden-row');
                });
                showMoreBtn.style.display = 'none';
                showLessBtn.style.display = 'inline-block';
            });

            showLessBtn.addEventListener('click', function() {
                const rows = document.querySelectorAll('tbody tr');
                rows.forEach((row, index) => {
                    if (index >= 10) {
                        row.classList.add('hidden-row');
                    }
                });
                showMoreBtn.style.display = 'inline-block';
                showLessBtn.style.display = 'none';
            });
        });
    </script>
            <!-- Recent Sales End -->

   
            <!-- Widgets Start -->
          
           
            
            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">R.E.C.D.C</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="">Biz_mtandaoni</a>
                        </br>
                       
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>