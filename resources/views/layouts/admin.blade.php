<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard </title>
  <!-- <link rel="stylesheet" href="frontend/css/style.css" /> -->
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="icon" href="http://127.0.0.1:8000/home/images/logoo.png" type="image/x-icon">

  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
  <div class="containerCustom">
    <nav>
      <ul style="margin-left: -32px;">
        <li>
          <a href="/admin/dashboard" class="logo">
            <!-- <img src="/logo.jpg" alt=""> -->
            <span class="nav-item">
              Admin dashboard
            </span>
          </a>
        </li>
        <li><a href="/admin/college/show">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Manage College</span>
        </a></li>
        <li><a href="/admin/student/show">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Manage Students</span>
        </a></li>
        <li><a href="/admin/course/show">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">View Courses</span>
        </a></li>
        <li><a href="/admin/course-detail/show">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">View Course Detail</span>
        </a></li>
        <li><a href="/admin/contact/show">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Manage Contact</span>
        </a></li>
        <li><a href="/admin/inquiry/show">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">View Inquiry</span>
        </a></li>
        <li><a href="/admin/change-password">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item">Change password</span>
        </a></li>
        <li><a href="/admin/logout" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <section class="main" style="
        padding: 65px 5px 0px 10px;
        height: 100vh;
        overflow: auto;
    ">
        @yield('content')
    </section>
  </div>
</body>
</html>
