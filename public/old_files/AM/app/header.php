<?php
$user = Auth::user(); // cached user, no DB hit
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Asset Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CDN CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@4.0.0/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- NAVBAR -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">
          <i class="fas fa-user-circle"></i> <?= htmlspecialchars($user['name']) ?>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
          <a href="/logout" class="dropdown-item text-danger">
            <i class="fas fa-sign-out-alt me-1"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>

  <!-- SIDEBAR -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/dashboard" class="brand-link text-center">
      <span class="brand-text fw-bold">Asset Manager</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">

          <li class="nav-item">
            <a href="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <!-- CONTENT -->
  <div class="content-wrapper p-3">
