@extends('layouts.app')

@section('title', 'Invest in Sikkim - The Green Investment Destination')

@section('meta')
<meta content="{{ $description ?? '' }}" name="description">
<meta content="{{ $keywords ?? '' }}" name="keywords">
@endsection

@push('styles')
<!-- Additional CSS Files from the new template -->
<link rel="stylesheet" href="https://industries.sikkim.gov.in/assets/admin/assets/css/backend-plugin.min.css">
<link rel="stylesheet" href="https://industries.sikkim.gov.in/assets/admin/assets/css/backend.css?v=1.0.0">
<link rel="stylesheet" href="https://industries.sikkim.gov.in/assets/admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<!-- FontAwesome CDN Backup -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
<link rel="stylesheet" href="https://industries.sikkim.gov.in/assets/admin/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
<link rel="stylesheet" href="https://industries.sikkim.gov.in/assets/admin/assets/vendor/remixicon/fonts/remixicon.css">
<link href="https://industries.sikkim.gov.in/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="https://industries.sikkim.gov.in/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="https://industries.sikkim.gov.in/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="https://industries.sikkim.gov.in/assets/css/style.css" rel="stylesheet">
<link href="https://industries.sikkim.gov.in/assets/vendor/icofont/icofont.min.css" rel="stylesheet">

<!-- Original CSS Files -->
<link href="https://industries.sikkim.gov.in/assets/img/favicon.png" rel="icon">
<link href="https://industries.sikkim.gov.in/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
<link href="https://industries.sikkim.gov.in/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://industries.sikkim.gov.in/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="https://industries.sikkim.gov.in/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Custom CSS -->
<style>
  :root {
    /* Primary Colors */
    --primary-green: #2e7d32;
    --nav-green: #28813d;
    --light-green: #4caf50;
    --lighter-green: #81c784;
    --dark-green: #1b5e20;
    --accent-gold: #ffd700;
    
    /* Text Colors */
    --text-dark: #263238;
    --text-medium: #455a64;
    --text-light: #607d8b;
    
    /* Background Colors */
    --bg-light: #f5f7fa;
    --bg-white: #ffffff;
    
    /* New Section Background Colors */
    --bg-cream: #fff8e1;
    --bg-mint: #e8f5e9;
    --bg-pale-blue: #e3f2fd;
    --bg-lavender: #f3e5f5;
    --bg-peach: #fbe9e7;
    
    /* Gradient Colors */
    --gradient-green: linear-gradient(135deg, var(--primary-green) 0%, var(--dark-green) 100%);
    --gradient-gold: linear-gradient(135deg, #ffd700 0%, #ffb300 100%);
    --gradient-light: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
  }
  
  html {
    scroll-behavior: smooth;
  }
  
  /* Modified body styles */
  body {
    font-family: 'Poppins', sans-serif;
    color: var(--text-medium);
    background-color: var(--bg-light);
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    background-image: linear-gradient(to bottom, var(--bg-light) 0%, #ffffff 100%);
    background-attachment: fixed;
  }
  
  /* Section styling */
  section {
    position: relative;
    padding: 70px 0;
    overflow: hidden;
  }
  
  /* Clean section backgrounds */
  section {
    background-color: var(--bg-white);
    position: relative;
  }
  
  section:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    z-index: 0;
    pointer-events: none;
  }
  
  /* Section dividers */
  section:not(:last-child):after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 10px;
    background: linear-gradient(90deg, 
      var(--primary-green) 0%, 
      var(--primary-green) 20%, 
      var(--accent-gold) 20%, 
      var(--accent-gold) 40%,
      var(--primary-green) 40%, 
      var(--primary-green) 60%,
      var(--accent-gold) 60%, 
      var(--accent-gold) 80%,
      var(--primary-green) 80%, 
      var(--primary-green) 100%
    );
    opacity: 0.1;
    z-index: 1;
  }
  
  /* Section headers */
  section h2, section h3 {
    position: relative;
    padding-bottom: 15px;
    margin-bottom: 30px;
    color: var(--primary-green);
    font-weight: 700;
  }
  
  section h2:after, section h3:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 4px;
    background: var(--accent-gold);
    border-radius: 2px;
  }
  
  /* Section title decorations */
  .section-title {
    text-align: center;
    margin-bottom: 50px;
    position: relative;
  }
  
  .section-title h2 {
    display: inline-block;
    font-size: 2.2rem;
    font-weight: 800;
    color: var(--primary-green);
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 15px;
    padding-bottom: 15px;
  }
  
  .section-title h2:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--accent-gold);
    border-radius: 2px;
  }
  
  .section-title p {
    max-width: 700px;
    margin: 0 auto;
    color: var(--text-medium);
    font-size: 1.1rem;
    line-height: 1.6;
  }
  
  /* Section background variations */
  .bg-white-section {
    background-color: var(--bg-white) !important;
  }
  
  .bg-light-section {
    background-color: var(--bg-light) !important;
  }
  
  /* Section containers */
  .section-container, .section-card {
    background-color: var(--bg-white);
    border-radius: 12px;
    padding: 40px;
    margin-bottom: 40px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.03);
    position: relative;
    overflow: hidden;
  }
  
  .section-container:hover, .section-card:hover {
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
  }
  
  /* Container variations */
  .container-white {
    background-color: var(--bg-white);
    border: 1px solid rgba(0, 0, 0, 0.05);
  }
  
  .container-light {
    background-color: var(--bg-light);
    border: 1px solid rgba(0, 0, 0, 0.05);
  }
  
  .container-accent {
    background-color: white;
    border-top: 3px solid var(--accent-gold);
  }
  
  .container-primary {
    background-color: white;
    border-top: 3px solid var(--primary-green);
  }
  
  /* Top Bar Styles - modified */
  #topbar {
    height: 210px;
    background: white;
    width: 100%;
    position: relative;
    z-index: 996;
    margin-bottom: 0 !important;
    padding: 0;
  }

  #topbar .logo img {
    max-height: 200px;
    margin: 5px 0;
  }

  /* Header & Navigation Styles - modified */
  #header {
    background-color: var(--nav-green);
    width: 100%;
    height: 60px;
    padding: 0;
    margin: 0;
    z-index: 9990;
    position: sticky;
    top: 0;
    box-shadow: none;
  }

  #header .d-flex {
    width: 100%;
    padding: 0;
    margin: 0;
    overflow: visible;
  }

  .navbar {
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: flex-start;
  }

  .navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
  }

  .navbar > ul > li {
    position: relative;
  }

  .navbar > ul > li > a {
    display: flex;
    align-items: center;
    padding: 0 8px;
    height: 60px;
    color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    white-space: nowrap;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .navbar > ul > li > a:hover {
    color: var(--accent-gold);
  }

  /* Dropdown styles */
  .navbar .dropdown ul {
    display: block;
    position: absolute;
    left: 0;
    top: 100%;
    margin: 0;
    padding: 5px 0;
    z-index: 99;
    background: #ffffff;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    visibility: hidden;
    opacity: 0;
    min-width: 250px;
    transition: all 0.3s ease;
    border-radius: 4px;
    transform: translateY(10px);
  }

  .navbar .dropdown:hover > ul,
  .navbar .dropdown.active > ul {
    visibility: visible;
    opacity: 1;
    transform: translateY(0);
  }

  .navbar .dropdown ul li {
    min-width: 250px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  }

  .navbar .dropdown ul li:last-child {
    border-bottom: none;
  }

  .navbar .dropdown ul a {
    padding: 10px 20px;
    font-size: 14px;
    text-transform: none;
    color: #333;
    display: block;
    transition: all 0.3s ease;
    text-decoration: none;
    font-weight: 500;
    background: transparent;
  }

  .navbar .dropdown ul a:hover {
    color: var(--nav-green);
    background: #f8f9fa;
    padding-left: 25px;
  }

  /* Dropdown arrow */
  .navbar .dropdown > a:after {
    content: "▼";
    font-size: 10px;
    margin-left: 5px;
    position: relative;
    top: -2px;
  }

  /* Hide mobile elements on desktop */
  .mobile-nav-toggle {
    display: none;
  }
  
  .mobile-pagination {
    display: none !important;
  }

  /* Mobile navigation - Hamburger Menu */
  @media (max-width: 991px) {
    /* Hide or minimize topbar on mobile */
    #topbar {
      height: 80px !important;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 10px 0;
    }
    
    #topbar .logo img {
      max-height: 60px !important;
      margin: 0;
    }
    
    #header {
      position: relative;
      justify-content: space-between;
      align-items: center;
      padding: 0 15px;
    }
    
    /* Mobile navigation toggle button - Force visibility */
    .mobile-nav-toggle {
      display: block !important;
      position: fixed !important;
      top: 90px !important;
      right: 20px !important;
      width: 50px !important;
      height: 50px !important;
      background: var(--nav-green) !important;
      border: 2px solid white !important;
      border-radius: 8px !important;
      cursor: pointer !important;
      z-index: 99999 !important;
      transition: all 0.3s ease !important;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3) !important;
    }
    
    .mobile-nav-toggle:hover {
      background: var(--dark-green) !important;
      transform: scale(1.1) !important;
    }
    
    /* Create hamburger lines */
    .mobile-nav-toggle::before,
    .mobile-nav-toggle::after,
    .mobile-nav-toggle {
      transition: all 0.3s ease !important;
    }
    
    .mobile-nav-toggle::before {
      content: '' !important;
      position: absolute !important;
      top: 15px !important;
      left: 12px !important;
      width: 24px !important;
      height: 3px !important;
      background: white !important;
      border-radius: 2px !important;
      box-shadow: 0 8px 0 white, 0 16px 0 white !important;
    }
    
    /* When menu is open, transform to X */
    .mobile-nav-toggle.active::before {
      top: 23px !important;
      transform: rotate(45deg) !important;
      box-shadow: 0 0 0 white !important;
    }
    
    .mobile-nav-toggle.active::after {
      content: '' !important;
      position: absolute !important;
      top: 23px !important;
      left: 12px !important;
      width: 24px !important;
      height: 3px !important;
      background: white !important;
      border-radius: 2px !important;
      transform: rotate(-45deg) !important;
    }
    
    /* Hide main navigation by default on mobile */
    .navbar ul {
      display: none;
      position: fixed;
      top: 140px; /* Below topbar and header */
      left: 0;
      right: 0;
      bottom: 0;
      background: var(--nav-green);
      z-index: 9998;
      padding: 20px 0;
      margin: 0;
      list-style: none;
      flex-direction: column;
      overflow-y: auto;
      -webkit-overflow-scrolling: touch;
    }
    
    /* Show navigation when active */
    .navbar.mobile-nav-active ul {
      display: flex !important;
    }
    
    /* Mobile menu backdrop */
    .navbar.mobile-nav-active::before {
      content: '';
      position: fixed;
      top: 140px;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 9997;
    }
    
    /* Mobile navigation items */
    .navbar ul li {
      width: 100%;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .navbar ul li:last-child {
      border-bottom: none;
    }
    
    .navbar ul li a {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 25px;
      color: white;
      font-size: 16px;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s ease;
      min-height: 60px;
      box-sizing: border-box;
      background: transparent;
    }
    
    .navbar ul li a:hover,
    .navbar ul li a:focus {
      background: rgba(255, 255, 255, 0.1);
      color: var(--accent-gold);
      padding-left: 35px;
    }
    
    /* Dropdown styles for mobile */
    .navbar .dropdown > a::after {
      content: '+';
      font-size: 20px;
      font-weight: bold;
      transition: transform 0.3s ease;
    }
    
    .navbar .dropdown.active > a::after {
      transform: rotate(45deg);
    }
    
    .navbar .dropdown ul {
      position: static !important;
      display: none !important;
      background: rgba(0, 0, 0, 0.2) !important;
      box-shadow: none !important;
      border: none !important;
      border-radius: 0 !important;
      padding: 0 !important;
      margin: 0 !important;
      width: 100% !important;
      opacity: 1 !important;
      visibility: visible !important;
      transform: none !important;
    }
    
    .navbar .dropdown.active ul {
      display: block !important;
    }
    
    .navbar .dropdown ul li {
      border-bottom: 1px solid rgba(255, 255, 255, 0.05);
      background: rgba(0, 0, 0, 0.1);
    }
    
    .navbar .dropdown ul li:last-child {
      border-bottom: none;
    }
    
    .navbar .dropdown ul a {
      padding: 15px 45px !important;
      font-size: 15px !important;
      color: rgba(255, 255, 255, 0.9) !important;
      background: transparent !important;
      min-height: 50px !important;
    }
    
    .navbar .dropdown ul a:hover,
    .navbar .dropdown ul a:focus {
      background: rgba(255, 255, 255, 0.1) !important;
      color: var(--accent-gold) !important;
      padding-left: 55px !important;
    }
    
    /* Close button animation */
    .mobile-nav-toggle.bi-x {
      transform: translateY(-50%) rotate(180deg);
    }
    
    /* Smooth animations */
    .navbar ul {
      animation: slideInFromTop 0.3s ease-out;
    }
    
    @keyframes slideInFromTop {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    /* Touch-friendly improvements */
    .navbar ul li a {
      touch-action: manipulation;
      -webkit-tap-highlight-color: rgba(255, 255, 255, 0.1);
    }
    
    /* Prevent body scroll when menu is open */
    body.mobile-nav-active {
      overflow: hidden;
    }
  }
  
  /* Breadcrumbs */
  .breadcrumbs {
    padding: 25px 0;
    background: var(--bg-mint);
    box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    margin: 0;
    position: relative;
    border-bottom: 1px solid rgba(76, 175, 80, 0.2);
  }
  
  .breadcrumbs:after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, 
      var(--primary-green) 0%, 
      var(--primary-green) 20%, 
      var(--accent-gold) 20%, 
      var(--accent-gold) 40%,
      var(--primary-green) 40%, 
      var(--primary-green) 60%,
      var(--accent-gold) 60%, 
      var(--accent-gold) 80%,
      var(--primary-green) 80%, 
      var(--primary-green) 100%
    );
    opacity: 0.7;
  }
  
  .breadcrumbs h2 {
    margin: 0;
    padding: 0;
    font-size: 32px;
    font-weight: 700;
    color: var(--primary-green);
    position: relative;
    display: inline-block;
    text-shadow: 0 1px 2px rgba(0,0,0,0.05);
  }
  
  .breadcrumbs .d-flex {
    margin: 0;
    padding: 0;
    align-items: center;
    gap: 30px;
  }
  
  .breadcrumbs ol {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }
  
  .breadcrumbs ol li {
    display: flex;
    align-items: center;
    font-weight: 500;
    color: var(--text-medium);
  }
  
  .breadcrumbs ol li + li:before {
    content: '/';
    margin: 0 10px;
    color: var(--text-light);
  }
  
  .breadcrumbs ol li a {
    color: var(--light-green);
    font-weight: 600;
    transition: all 0.3s ease;
  }
  
  .breadcrumbs ol li a:hover {
    color: var(--primary-green);
  }
  
  /* Main Content */
  .inner-page {
    padding: 50px 0;
    background-color: var(--bg-light);
    position: relative;
  }
  
  .inner-page:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23000000' fill-opacity='0.02'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    pointer-events: none;
  }
  
  /* Stats Section */
  .stats-section {
    background: var(--gradient-green);
    color: white;
    padding: 40px 0;
    border-radius: 15px;
    margin-bottom: 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    position: relative;
    overflow: hidden;
  }
  
  .stats-section:before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
    pointer-events: none;
  }
  
  .stat-item {
    text-align: center;
    padding: 25px;
    background: rgba(255,255,255,0.1);
    border-radius: 12px;
    backdrop-filter: blur(5px);
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.1);
  }
  
  .stat-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    background: rgba(255,255,255,0.15);
  }
  
  .stat-value {
    font-size: 2.8rem;
    font-weight: 700;
    color: var(--accent-gold);
    margin-bottom: 10px;
    text-shadow: 0 2px 5px rgba(0,0,0,0.2);
  }
  
  .stat-label {
    font-size: 1.1rem;
    opacity: 0.95;
    letter-spacing: 0.5px;
  }
  
  /* Project Controls */
  .controls {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 30px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
  }
  
  .controls input, .controls select {
    padding: 10px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 6px;
    font-size: 0.9rem;
    flex: 1;
    min-width: 200px;
  }
  
  .controls input:focus, .controls select:focus {
    outline: none;
    border-color: var(--light-green);
    box-shadow: 0 0 0 2px rgba(76, 175, 80, 0.2);
  }
  
  /* Project Grid */
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
  }
  
  .card {
    background-color: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.4s ease;
    border: 1px solid rgba(0,0,0,0.05);
    position: relative;
  }
  
  .card:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: var(--gradient-green);
    z-index: 1;
    opacity: 0;
    transition: all 0.3s ease;
  }
  
  .card {
    background-color: white;
    border-color: rgba(0, 0, 0, 0.08);
  }
  
  .card-img {
    height: 200px;
    background-size: cover;
    background-position: center;
    position: relative;
    transition: all 0.5s ease;
  }
  
  .card-img::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 60%;
    background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
  }
  
  .card-content {
    padding: 25px;
    position: relative;
  }
  
  .card h3 {
    color: var(--primary-green);
    margin-bottom: 15px;
    font-size: 1.3rem;
    font-weight: 600;
    position: relative;
    padding-bottom: 10px;
  }
  
  .card h3:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 3px;
    background: var(--accent-gold);
  }
  
  .card p {
    margin-bottom: 12px;
    font-size: 0.95rem;
    color: var(--text-medium);
    line-height: 1.6;
  }
  
  .card p strong {
    color: var(--text-dark);
    font-weight: 600;
  }
  
  .card-tag {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 999px;
    margin-right: 8px;
    margin-bottom: 4px;
    transition: all 0.3s ease;
  }
  
  .card-tag-department {
    background-color: #EDF4ED;
    color: #207A3E;
    font-weight: 500;
    font-size: 0.85rem;
    border: 1px solid #DCE5DD;
  }
  
  .card-tag-mode {
    background-color: #F6F6F6;
    color: #333333;
    font-weight: 400;
    font-size: 0.8rem;
    border: 1px solid #E0E0E0;
  }
  
  .card-tag:hover {
    box-shadow: 0 1px 5px rgba(0,0,0,0.06);
  }
  
  /* Modal */
  .modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 1000;
    justify-content: center;
    align-items: center;
  }
  
  .modal-content {
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    max-width: 600px;
    width: 90%;
    max-height: 80vh;
    overflow-y: auto;
    box-shadow: 0 5px 30px rgba(0,0,0,0.3);
    position: relative;
  }
  
  .modal h2 {
    color: var(--primary-green);
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid var(--lighter-green);
  }
  
  .modal p {
    margin-bottom: 15px;
    line-height: 1.6;
  }
  
  .modal p strong {
    color: var(--text-dark);
    min-width: 120px;
    display: inline-block;
  }
  
  .modal button {
    background-color: var(--primary-green);
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
    transition: all 0.3s;
  }
  
  .modal button:hover {
    background-color: var(--dark-green);
  }
  
  /* Hero Banner Styles */
  .hero-banner {
    position: relative;
    z-index: 1;
    height: 100vh;
    min-height: 600px;
    background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    margin-top: 0;
    transition: all 0.8s ease-out;
  }

  .hero-banner:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(27, 94, 32, 0.8) 0%, rgba(46, 125, 50, 0.7) 100%);
    z-index: 1;
  }

  .hero-banner:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
    z-index: 1;
    opacity: 0.3;
  }

  .hero-banner .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.6) 100%);
    z-index: 1;
  }

  .banner-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: white;
    padding: 0 20px;
    opacity: 1;
    transform: translateY(0);
    transition: all 0.5s ease-out;
    max-width: 800px;
    margin: 0 auto;
  }

  .banner-content.fade-out {
    opacity: 0;
    transform: translateY(-20px);
  }

  .hero-banner.fade-out {
    opacity: 0.3;
  }

  .banner-content h1 {
    font-size: 4.5rem;
    font-weight: 800;
    margin-bottom: 25px;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    letter-spacing: 1px;
    position: relative;
    display: inline-block;
  }

  .banner-content h1:after {
    content: '';
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 5px;
    background: var(--accent-gold);
    border-radius: 3px;
  }

  .banner-content p {
    font-size: 1.6rem;
    margin-bottom: 40px;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
    font-weight: 300;
    line-height: 1.5;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
  }

  .banner-content .btn {
    padding: 15px 35px;
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: all 0.4s ease;
    border-radius: 50px;
    font-weight: 600;
    position: relative;
    overflow: hidden;
    z-index: 1;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
  }

  .banner-content .btn:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: rgba(255, 255, 255, 0.2);
    transition: all 0.4s ease;
    z-index: -1;
  }

  .banner-content .btn:hover:before {
    width: 100%;
  }

  .banner-content .btn:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
  }

  @media (max-width: 768px) {
    .hero-banner {
      min-height: 500px;
    }

    .banner-content h1 {
      font-size: 2.8rem;
    }

    .banner-content p {
      font-size: 1.3rem;
    }
    
    .banner-content .btn {
      padding: 12px 25px;
      font-size: 1rem;
    }
  }

  /* Responsive */
  @media (max-width: 768px) {
    .grid {
      grid-template-columns: 1fr;
    }
    
    .controls {
      flex-direction: column;
    }
    
    .controls input, .controls select {
      width: 100%;
    }
  }

  /* Department-specific styles */
  .department-container {
    background: #ffffff;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.03);
    position: relative;
    overflow: hidden;
  }

  .department-container:hover {
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
  }

  .department-container h3 {
    color: var(--primary-green);
    margin-bottom: 15px;
    font-weight: 700;
    position: relative;
    padding-bottom: 10px;
  }

  .department-container h3:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 4px;
    background: var(--accent-gold);
    border-radius: 2px;
  }

  .department-container ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .department-container ul li {
    margin-bottom: 10px;
  }

  .department-container ul li a {
    color: var(--text-medium);
    transition: all 0.3s ease;
  }

  .department-container ul li a:hover {
    color: var(--primary-green);
    padding-left: 5px;
  }
</style>
@endpush

@section('content')
<!-- Top Bar -->
<section id="topbar" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">
    <a href="#" class="logo"><img src="https://industries.sikkim.gov.in/assets/img/logo.png" alt="" class="img-fluid"></a>
    <a href="#" class="logo"><img src="{{ asset('logoline.png') }}" alt="" class="img-fluid"></a>
    <a href="#" class="logo"><img src="https://industries.sikkim.gov.in/assets/img/logo-golden.png" alt="" class="img-fluid"></a>
  </div>
</section>

<!-- Original Header with New Navigation -->
<header id="header">
  <div class="d-flex">
    <nav id="navbar" class="navbar">
      <ul id="mainNavMenu">
        <li><a href="{{ url('visitors') }}">HOME</a></li>
        <li class="dropdown">
          <a href="#"><span>ABOUT US</span></a>
          <ul>
            <li><a href="{{ url('visitors/orgview') }}">Organizational Setup</a></li>
            <li><a href="{{ url('visitors/dics') }}">District Industries Center</a></li>
            <li><a href="{{ url('visitors/officesofdept') }}">Offices under Department</a></li>
            <li><a href="{{ url('visitors/officerdirectories') }}">Officer Directory</a></li>
            <li><a href="{{ url('visitors/industriesandcompanies') }}">Industries and Companies</a></li>
            <li><a href="{{ url('visitors/psus') }}">Public Sector Undertaking</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#"><span>SCHEMES AND GUIDELINES</span></a>
          <ul>
            <li><a href="{{ url('visitors/odop') }}">ODOP</a></li>
            <li><a href="{{ url('visitors/schemes?8') }}">SC-ST Hub Scheme Guidelines</a></li>
            <li><a href="{{ url('visitors/schemes?9') }}">MSE-CDP Guidelines</a></li>
            <li><a href="{{ url('visitors/schemes?17') }}">APPLICATION/RENEWAL OF INDUSTRIAL LICENCE</a></li>
            <li><a href="{{ url('visitors/schemes') }}">View More</a></li>
          </ul>
        </li>
        <li><a href="{{ url('visitors#contact') }}">GRIEVANCES</a></li>
        <li><a href="{{ url('visitors/rtis') }}">RTI</a></li>
        <li><a href="{{ url('visitors/events') }}">EVENTS</a></li>
        <li><a href="{{ url('visitors/awards') }}">AWARDS & ACHIEVEMENTS</a></li>
        <li><a href="{{ url('visitors/gallery') }}">GALLERY</a></li>
        <li><a href="{{ url('visitors/gallery') }}">INVEST IN SIKKIM</a></li>
        <li class="dropdown">
          <a href="#"><span>IMPORTANT LINKS</span></a>
          <ul>
            <li><a href="https://sikkimdesignweek.com/">Sikkim Design Week</a></li>
            <li><a href="https://www.facebook.com/share/18ikrxFjYz/">Sikkim Design Week 2025</a></li>
            <li><a href="https://www.nsws.gov.in/">National Single Window System</a></li>
          </ul>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle" tabindex="0" role="button"></i>
    </nav>
  </div>
</header>

<main>
  <!-- Hero Banner Section -->
  <section class="hero-banner" id="home">
    <div class="overlay"></div>
    <div class="container">
      <div class="banner-content">
        <h1>{{ $heroTitle ?? 'Invest in Sikkim' }}</h1>
        <p>{{ $heroSubtitle ?? 'Unlock ₹30,000 Cr opportunities across green and future-ready sectors' }}</p>
        <a href="#main-content" class="btn" style="background-color: var(--primary-green); color: white; transition: all 0.3s ease; font-weight: 500; padding: 12px 28px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border: none; letter-spacing: 0.5px; text-transform: uppercase; font-size: 14px;" onmouseover="this.style.backgroundColor='var(--dark-green)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.2)';" onmouseout="this.style.backgroundColor='var(--primary-green)'; this.style.boxShadow='0 2px 10px rgba(0,0,0,0.1)';">Get Started</a>
      </div>
    </div>
  </section>

  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2>{{ $pageTitle ?? 'Invest In Sikkim' }}</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>{{ $pageTitle ?? 'Invest In Sikkim' }}</li>
        </ol>
      </div>
    </div>
  </section><!-- End Breadcrumbs -->

  <section id="main-content" class="inner-page">
    <div class="container">
      <!-- Sikkim At A Glance -->
      <div class="section-card" id="about">
        <h2>
          <span></span>
          Sikkim At A Glance
        </h2>
        
        <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
          @if(isset($stats) && is_array($stats))
            @foreach($stats as $stat)
            <div class="stat-item" style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid var(--primary-green); transition: all 0.3s ease;">
              <div class="stat-value" style="font-size: 2.2rem; color: var(--primary-green); font-weight: 700; margin-bottom: 10px;">{{ $stat['value'] }}</div>
              <div class="stat-label" style="color: var(--text-medium); font-weight: 500;">{{ $stat['label'] }}</div>
            </div>
            @endforeach
          @else
          <div class="stat-item" style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid var(--primary-green); transition: all 0.3s ease;">
            <div class="stat-value" style="font-size: 2.2rem; color: var(--primary-green); font-weight: 700; margin-bottom: 10px;">7,096 km²</div>
            <div class="stat-label" style="color: var(--text-medium); font-weight: 500;">Geographical Area</div>
          </div>
          
          <div class="stat-item" style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid var(--primary-green); transition: all 0.3s ease;">
            <div class="stat-value" style="font-size: 2.2rem; color: var(--primary-green); font-weight: 700; margin-bottom: 10px;">97%</div>
            <div class="stat-label" style="color: var(--text-medium); font-weight: 500;">Literacy Rate</div>
          </div>
          
          <div class="stat-item" style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid var(--primary-green); transition: all 0.3s ease;">
            <div class="stat-value" style="font-size: 2.2rem; color: var(--primary-green); font-weight: 700; margin-bottom: 10px;">8000 MW</div>
            <div class="stat-label" style="color: var(--text-medium); font-weight: 500;">Hydropower Potential</div>
          </div>
          
          <div class="stat-item" style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid var(--primary-green); transition: all 0.3s ease;">
            <div class="stat-value" style="font-size: 2.2rem; color: var(--primary-green); font-weight: 700; margin-bottom: 10px;">100%</div>
            <div class="stat-label" style="color: var(--text-medium); font-weight: 500;">Organic State</div>
          </div>
          @endif
        </div>
      </div>

      <!-- Why Invest in Sikkim Section -->
      <div class="section-card" id="policies-incentives">
        <div class="section-title">
          <h2>Why Invest in Sikkim?</h2>
          <p>Discover the unique advantages of India's first 100% organic state</p>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 25px;">
              {{ $whyInvestDescription ?? "Sikkim, India's first 100% organic state and one of its most peaceful regions, offers unique investment opportunities with its strategic location, eco-friendly policies, and special economic incentives. Known for its sustainable agriculture, Sikkim is a global leader in organic spices like large cardamom and turmeric, while its hydropower and solar projects attract green energy investors." }}
            </p>
            
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">
              {{ $whyInvestDescription2 ?? "The state's thriving tourism sector, highlighted by UNESCO-listed Khangchendzonga National Park and eco-tourism initiatives, benefits from improved infrastructure like the upcoming Sevoke-Rangpo railway. With low crime rates, investor-friendly policies, and a focus on renewable energy and organic food processing, Sikkim is an ideal destination for businesses seeking growth in harmony with nature. Its stable governance and green economy make it a model for sustainable development in India." }}
            </p>
            
            <div class="row mt-5">
              <div class="col-md-6">
                <div style="background-color: white; padding: 30px; border-radius: 12px; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--primary-green);">
                  <h4 style="color: var(--primary-green); margin-bottom: 20px; font-weight: 600; position: relative; padding-bottom: 15px;">Key Advantages</h4>
                  <ul class="feature-list">
                    @if(isset($keyAdvantages) && is_array($keyAdvantages))
                      @foreach($keyAdvantages as $advantage)
                      <li>{{ $advantage }}</li>
                      @endforeach
                    @else
                    <li>Pleasant weather conditions from tropical to alpine climate</li> 
                    <li>High literacy rate of 97% which is more than the national average</li>
                    <li>Lowest crime rate in the country</li> 
                    <li>World's first certified organic farming state</li>
                    @endif
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div style="background-color: white; padding: 30px; border-radius: 12px; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--primary-green);">
                  <h4 style="color: var(--primary-green); margin-bottom: 20px; font-weight: 600; position: relative; padding-bottom: 15px;">Business Environment</h4>
                  <ul class="feature-list">
                    @if(isset($businessEnvironment) && is_array($businessEnvironment))
                      @foreach($businessEnvironment as $environment)
                      <li>{{ $environment }}</li>
                      @endforeach
                    @else
                    <li>Skilled and educated workforce</li>
                    <li>Political stability and peaceful environment</li>
                    <li>Growing infrastructure development</li>
                    <li>Gateway to ASEAN markets</li>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Policies & Incentives Section with Tabs -->
      <div class="section-card">
        <h2><span></span>Policies & Incentives</h2>
        
        <div class="policy-tabs">
          <!-- Tab Navigation -->
          <div class="tab-nav" style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 30px; border-bottom: 2px solid #f0f0f0; padding-bottom: 20px;">
            <button class="policy-tab-btn active" data-policy-tab="industrial-policy" style="background: var(--primary-green); color: white; border: none; padding: 12px 20px; border-radius: 8px; cursor: pointer; font-weight: 600; transition: all 0.3s ease; position: relative; overflow: hidden;">Industrial Policy</button>
            <button class="policy-tab-btn" data-policy-tab="incentives" style="background: #e0e0e0; color: var(--text-dark); border: none; padding: 12px 20px; border-radius: 8px; cursor: pointer; font-weight: 600; transition: all 0.3s ease; position: relative; overflow: hidden;">Incentives & Subsidies</button>
            <button class="policy-tab-btn" data-policy-tab="schemes" style="background: #e0e0e0; color: var(--text-dark); border: none; padding: 12px 20px; border-radius: 8px; cursor: pointer; font-weight: 600; transition: all 0.3s ease; position: relative; overflow: hidden;">Special Schemes</button>
          </div>
            
          <!-- Tab Content -->
          <div class="tab-content-container" style="background-color: white; padding: 30px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
            <!-- Industrial Policy Tab -->
            <div class="policy-tab-content active" data-policy-tab="industrial-policy">
              <h4 style="color: var(--primary-green); margin-bottom: 20px;">Sikkim Industrial & Investment Policy 2024</h4>
              
              <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 20px;">
                <div style="background-color: rgba(76, 175, 80, 0.1); padding: 20px; border-radius: 8px;">
                  <h5 style="color: var(--primary-green); margin-top: 0;">Vision</h5>
                  <p style="margin-bottom: 0;">To transform Sikkim into a sustainable industrial hub that leverages its natural resources and strategic location while preserving its unique ecological and cultural heritage.</p>
                </div>
                
                <div style="background-color: rgba(76, 175, 80, 0.1); padding: 20px; border-radius: 8px;">
                  <h5 style="color: var(--primary-green); margin-top: 0;">Mission</h5>
                  <p style="margin-bottom: 0;">To attract ₹30,000 Cr investment, create 20,000 jobs, and build a ₹1.5 lakh Cr economy by 2047 through green and future-ready sectors.</p>
                </div>
              </div>
              
              <h5 style="color: var(--primary-green); margin: 25px 0 15px;">16 Thrust Sectors</h5>
              
              <div class="thrust-sectors-container" style="position: relative; margin: 20px 0 40px;">
                <!-- Initial 6 Sectors (Always Visible) -->
                <div class="thrust-sectors-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px; margin-bottom: 15px;">
                  @php
                  $thrustSectors = [
                    ['icon' => '🌿', 'name' => 'Green Tourism', 'id' => 'tourism'],
                    ['icon' => '💊', 'name' => 'Pharmaceuticals & Bio technology', 'id' => 'pharma'],
                    ['icon' => '💧', 'name' => 'Clean and Green Energy', 'id' => 'renewable'],
                    ['icon' => '🌱', 'name' => 'Traditional Medicine Systems', 'id' => 'traditional'],
                    ['icon' => '🎮', 'name' => 'AVGC-XR', 'id' => 'avgc'],
                    ['icon' => '🍃', 'name' => 'Organic Farming and Processing', 'id' => 'food'],
                    ['icon' => '💻', 'name' => 'IT & ITeS', 'id' => 'it'],
                    ['icon' => '🌍', 'name' => 'Climate Change Mitigation', 'id' => 'climate'],
                    ['icon' => '⚛️', 'name' => 'Green Hydrogen', 'id' => 'biotech'],
                    ['icon' => '🛣️', 'name' => 'Trade routes and Pilgrimage', 'id' => 'traderoutes'],
                    ['icon' => '🎓', 'name' => 'Education', 'id' => 'education'],
                    ['icon' => '🎭', 'name' => 'Recreation and Entertainment', 'id' => 'recreation'],
                    ['icon' => '🎬', 'name' => 'Films and Media', 'id' => 'film'],
                    ['icon' => '👕', 'name' => 'Textiles and Fashion Design', 'id' => 'textiles'],
                    ['icon' => '❤️', 'name' => 'Health and Wellness', 'id' => 'wellness'],
                    ['icon' => '🏙️', 'name' => 'Smart Cities and Real Estate', 'id' => 'smartcities']
                  ];
                  @endphp
                  
                  @foreach(array_slice($thrustSectors, 0, 6) as $sector)
                  <div class="thrust-sector-item" data-thrust-sector="{{ $sector['id'] }}">
                    <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">{{ $sector['icon'] }}</span>
                    <p>{{ $sector['name'] }}</p>
                  </div>
                  @endforeach
                </div>
                
                <!-- View More Button -->
                <div class="text-center" style="margin-bottom: 20px;">
                  <button id="viewMoreSectorsBtn" style="background: linear-gradient(135deg, #3a8a3f 0%, #2c6e30 100%); border: none; color: white; padding: 10px 24px; border-radius: 30px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(46, 125, 50, 0.2);">
                    <span>➕ View All 16 Sectors</span>
                  </button>
                </div>
                
                <!-- Additional 10 Sectors (Initially Hidden) -->
                <div id="additionalSectors" class="thrust-sectors-grid" style="display: none; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px; margin-bottom: 15px;">
                  @foreach(array_slice($thrustSectors, 6) as $sector)
                  <div class="thrust-sector-item" data-thrust-sector="{{ $sector['id'] }}">
                    <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">{{ $sector['icon'] }}</span>
                    <p>{{ $sector['name'] }}</p>
                  </div>
                  @endforeach
                </div>
                
                <!-- Thrust Sector Details Panel -->
                <div id="thrustSectorDetails" style="background: rgba(76, 175, 80, 0.05); border-radius: 12px; padding: 25px; margin-top: 30px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); display: none; border-left: 4px solid var(--primary-green);"></div>
              </div>
              
              <div class="text-center mt-4">
                <a href="{{ asset('policy.pdf') }}" target="_blank" class="btn" style="background-color: var(--primary-green); color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(46, 125, 50, 0.2);">
                  <i class="fas fa-download" style="margin-right: 10px; font-size: 16px;"></i> Download Complete Policy
                </a>
              </div>
            </div>
            
            <!-- Incentives Tab -->
            <div class="policy-tab-content" data-policy-tab="incentives" style="display: none;">
              <h4 style="color: var(--primary-green); margin-bottom: 20px;">Key Incentives & Subsidies</h4>
              
              <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 20px;">
                <div style="background-color: white; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                  <h5 style="color: var(--primary-green); margin-top: 0; border-bottom: 2px solid var(--lighter-green); padding-bottom: 10px;">SGST Reimbursement</h5>
                  <ul style="padding-left: 20px; margin-bottom: 10px;">
                    <li><strong>75% SGST reimbursement for 10 years</strong> on finished products</li>
                    <li>Based on production commencement & GST Council recommendation</li>
                    <li><strong>Micro Enterprises:</strong> Up to 250% of Fixed Capital Investment (FCI)</li>
                    <li><strong>Small Enterprises:</strong> Up to 200% of FCI</li>
                    <li><strong>Medium Enterprises:</strong> Up to 150% of FCI</li>
                    <li><strong>Large Enterprises:</strong> Up to 100% of FCI</li>
                  </ul>
                </div>
                
                <div style="background-color: white; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                  <h5 style="color: var(--primary-green); margin-top: 0; border-bottom: 2px solid var(--lighter-green); padding-bottom: 10px;">Capital Investment Subsidy</h5>
                  <ul style="padding-left: 20px; margin-bottom: 10px;">
                    <li><strong>Micro:</strong> 35% of FCI (Max ₹35 lakh)</li>
                    <li><strong>Small:</strong> 25% of FCI (Max ₹1.25 Cr)</li>
                    <li><strong>Medium:</strong> 20% of FCI (Max ₹3 Cr)</li>
                    <li><strong>Large:</strong> 15% of FCI (Max ₹7.5 Cr)</li>
                    <li><strong>Additional 5%</strong> for SC/ST/Women/Differently-abled entrepreneurs</li>
                  </ul>
                </div>
                
                <div style="background-color: white; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                  <h5 style="color: var(--primary-green); margin-top: 0; border-bottom: 2px solid var(--lighter-green); padding-bottom: 10px;">Interest Subsidy</h5>
                  <ul style="padding-left: 20px; margin-bottom: 10px;">
                    <li><strong>5% interest subsidy</strong> for 7 years</li>
                    <li>On term loans up to ₹5 Cr</li>
                    <li>Maximum ₹3.5 lakh per year</li>
                    <li>Applicable from commercial production date</li>
                  </ul>
                </div>
                
                <div style="background-color: white; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                  <h5 style="color: var(--primary-green); margin-top: 0; border-bottom: 2px solid var(--lighter-green); padding-bottom: 10px;">Employment Generation</h5>
                  <ul style="padding-left: 20px; margin-bottom: 10px;">
                    <li><strong>₹1 lakh per job</strong> for local employment</li>
                    <li>Minimum 70% local employment required</li>
                    <li>Additional incentives for skill development</li>
                    <li>Training cost reimbursement available</li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!-- Special Schemes Tab -->
            <div class="policy-tab-content" data-policy-tab="schemes" style="display: none;">
              <h4 style="color: var(--primary-green); margin-bottom: 20px;">Special Schemes & Programs</h4>
              
              <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
                <div style="background-color: white; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                  <h5 style="color: var(--primary-green); margin-top: 0;">Startup Sikkim</h5>
                  <ul style="padding-left: 20px;">
                    <li>Seed funding up to ₹10 lakh</li>
                    <li>Incubation support</li>
                    <li>Mentorship programs</li>
                    <li>Market linkage assistance</li>
                  </ul>
                </div>
                
                <div style="background-color: white; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                  <h5 style="color: var(--primary-green); margin-top: 0;">Green Energy Initiative</h5>
                  <ul style="padding-left: 20px;">
                    <li>Solar power subsidies</li>
                    <li>Hydropower development support</li>
                    <li>Energy efficiency incentives</li>
                    <li>Carbon credit facilitation</li>
                  </ul>
                </div>
                
                <div style="background-color: white; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                  <h5 style="color: var(--primary-green); margin-top: 0;">Organic Certification</h5>
                  <ul style="padding-left: 20px;">
                    <li>Free organic certification</li>
                    <li>Processing unit setup support</li>
                    <li>Marketing assistance</li>
                    <li>Export promotion</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Investment Projects Section -->
      <div class="section-card">
        <h2><span></span>Investment Opportunities</h2>
        
        <!-- Project Controls -->
        <div class="controls">
          <input type="text" id="searchInput" placeholder="Search projects..." onkeyup="filterProjects()">
          <select id="modeFilter" onchange="filterProjects()">
            <option value="">All Modes</option>
            <option value="PPP">Public-Private Partnership</option>
            <option value="Private">Private</option>
            <option value="Government">Government</option>
          </select>
        </div>
        
        <!-- Projects Grid -->
        <div class="grid" id="projectsGrid">
          <!-- Projects will be dynamically loaded here -->
        </div>
        
        <!-- Navigation -->
        <div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin-top: 30px;">
          <button id="prevProjects" onclick="navigateProjects('prev')" style="background: var(--primary-green); color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Previous</button>
          <span id="pageInfo" style="font-weight: 600; color: var(--text-medium);"></span>
          <button id="nextProjects" onclick="navigateProjects('next')" style="background: var(--primary-green); color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Next</button>
        </div>
      </div>

      <!-- Strategic Location Section -->
      <div class="section-card strategic-location-section">
        <div class="section-title strategic-location-title">
          <h2>Strategic Location Advantage</h2>
          <p>Gateway to South Asia and ASEAN Markets</p>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
              <h4 style="color: var(--primary-green); margin-bottom: 20px;">Connectivity Highlights</h4>
              
              @php
              $connectivityItems = [
                ['number' => '1', 'text' => '<strong>Bagdogra Airport:</strong> <span>124 km - Major connectivity hub</span>'],
                ['number' => '2', 'text' => '<strong>Siliguri:</strong> <span>114 km - Railway junction & commercial center</span>'],
                ['number' => '3', 'text' => '<strong>Kolkata Port:</strong> <span>560 km - International trade gateway</span>'],
                ['number' => '4', 'text' => '<strong>China Border:</strong> <span>Nathu La Pass - 54 km from Gangtok</span>'],
                ['number' => '5', 'text' => '<strong>Nepal Border:</strong> <span>Rangpo - Direct access point</span>'],
                ['number' => '6', 'text' => '<strong>Bhutan Border:</strong> <span>Multiple access points for trade</span>']
              ];
              @endphp
              
              @foreach($connectivityItems as $item)
              <div class="connectivity-item">
                <div class="highlight-number">{{ $item['number'] }}</div>
                <div style="flex: 1;">
                  {!! $item['text'] !!}
                </div>
              </div>
              @endforeach
            </div>
          </div>
          
          <div class="col-md-6">
            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
              <h4 style="color: var(--primary-green); margin-bottom: 20px;">Districts Overview</h4>
              
              @php
              $districts = [
                ['name' => 'East Sikkim', 'capital' => 'Gangtok (Capital)', 'area' => '954 km²'],
                ['name' => 'West Sikkim', 'capital' => 'Gyalshing', 'area' => '1,166 km²'],
                ['name' => 'North Sikkim', 'capital' => 'Mangan', 'area' => '4,226 km²'],
                ['name' => 'South Sikkim', 'capital' => 'Namchi', 'area' => '750 km²']
              ];
              @endphp
              
              <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                @foreach($districts as $district)
                <div class="district-chip">
                  <h4>{{ $district['name'] }}</h4>
                  <p>{{ $district['capital'] }}</p>
                  <p style="font-size: 11px; color: #888;">{{ $district['area'] }}</p>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Additional content sections can be added here -->
      @if(isset($additionalSections))
        @foreach($additionalSections as $section)
        <div class="section-card">
          <h2><span></span>{{ $section['title'] }}</h2>
          <div class="row">
            <div class="col-md-12">
              {!! $section['content'] !!}
            </div>
          </div>
        </div>
        @endforeach
      @endif

    </div>
  </section>

  <!-- Modal for Project Details -->
  <div class="modal" id="projectModal" onclick="closeModal()" style="display: none;">
    <div class="modal-content" onclick="event.stopPropagation();">
      <h2 id="modalTitle"></h2>
      <p><strong>Location:</strong> <span id="modalLocation"></span></p>
      <p><strong>Investment:</strong> ₹<span id="modalCost"></span> Cr</p>
      <p><strong>Mode:</strong> <span id="modalMode"></span></p>
      <p><strong>Employment Potential:</strong> <span id="modalEmployment"></span></p>
      <p><strong>Govt. Support:</strong> <span id="modalSupport"></span></p>
      <p><strong>Key Features:</strong> <span id="modalFeatures"></span></p>
      <button onclick="closeModal()">Close</button>
    </div>
  </div>
</main>

@push('scripts')
<script>
// Sample projects data - in a real application, this would come from your backend
const projects = [
  {
    name: "Sikkim Organic Food Processing Hub",
    location: "East Sikkim",
    cost: "150",
    mode: "PPP",
    employment: "500+ jobs",
    support: "Land allocation, infrastructure support",
    features: "Organic certification, export facilities, cold storage",
    image: "https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
  },
  {
    name: "Renewable Energy Park",
    location: "West Sikkim",
    cost: "300",
    mode: "Private",
    employment: "200+ jobs",
    support: "Policy incentives, grid connectivity",
    features: "Solar and wind hybrid, battery storage",
    image: "https://images.unsplash.com/photo-1509391366360-2e959784a276?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
  },
  {
    name: "Eco-Tourism Resort",
    location: "North Sikkim",
    cost: "75",
    mode: "Private",
    employment: "150+ jobs",
    support: "Tourism promotion, marketing support",
    features: "Sustainable architecture, local employment",
    image: "https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
  },
  {
    name: "IT Park & Innovation Center",
    location: "South Sikkim",
    cost: "200",
    mode: "PPP",
    employment: "800+ jobs",
    support: "Infrastructure, skill development",
    features: "High-speed connectivity, incubation facilities",
    image: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
  },
  {
    name: "Pharmaceutical Manufacturing Unit",
    location: "East Sikkim",
    cost: "120",
    mode: "Private",
    employment: "300+ jobs",
    support: "Regulatory support, quality certification",
    features: "WHO-GMP standards, R&D facilities",
    image: "https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
  },
  {
    name: "Handicrafts & Textiles Center",
    location: "West Sikkim",
    cost: "50",
    mode: "Government",
    employment: "400+ jobs",
    support: "Skill training, market linkage",
    features: "Traditional crafts, modern design integration",
    image: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
  }
];

let currentPage = 0;
const projectsPerPage = 6;

// Thrust sector details data
const thrustSectorDetails = {
  tourism: {
    title: "Green Tourism",
    description: "Sustainable tourism development leveraging Sikkim's natural beauty and cultural heritage.",
    opportunities: ["Eco-resorts", "Adventure tourism", "Cultural tourism", "Wellness retreats"],
    investment: "₹500-2000 Cr potential",
    employment: "10,000+ jobs"
  },
  pharma: {
    title: "Pharmaceuticals & Biotechnology",
    description: "Leveraging traditional medicine knowledge and modern biotechnology for pharmaceutical development.",
    opportunities: ["Herbal medicines", "Biotech research", "API manufacturing", "Clinical trials"],
    investment: "₹1000-3000 Cr potential",
    employment: "5,000+ jobs"
  },
  renewable: {
    title: "Clean and Green Energy",
    description: "Harnessing Sikkim's hydropower and solar potential for sustainable energy generation.",
    opportunities: ["Hydropower projects", "Solar parks", "Wind energy", "Energy storage"],
    investment: "₹5000-10000 Cr potential",
    employment: "3,000+ jobs"
  },
  traditional: {
    title: "Traditional Medicine Systems",
    description: "Promoting traditional healing systems and integrating them with modern healthcare.",
    opportunities: ["Ayurveda centers", "Research facilities", "Medicine production", "Training institutes"],
    investment: "₹200-500 Cr potential",
    employment: "2,000+ jobs"
  },
  avgc: {
    title: "AVGC-XR (Animation, VFX, Gaming, Comics - Extended Reality)",
    description: "Developing creative industries with focus on digital content and immersive technologies.",
    opportunities: ["Animation studios", "Gaming development", "VFX services", "XR applications"],
    investment: "₹100-300 Cr potential",
    employment: "1,500+ jobs"
  },
  food: {
    title: "Organic Farming and Processing",
    description: "Building on Sikkim's 100% organic status to create a comprehensive food processing ecosystem.",
    opportunities: ["Processing units", "Packaging facilities", "Export hubs", "Value addition"],
    investment: "₹800-1500 Cr potential",
    employment: "8,000+ jobs"
  }
};

document.addEventListener('DOMContentLoaded', function() {
  // Mobile Navigation
  const navToggle = document.querySelector('.mobile-nav-toggle');
  const navbar = document.querySelector('#navbar');
  const body = document.body;
  
  if (navToggle && navbar) {
    navToggle.addEventListener('click', function() {
      navbar.classList.toggle('mobile-nav-active');
      body.classList.toggle('mobile-nav-active');
      navToggle.classList.toggle('active');
    });
    
    // Handle dropdown clicks on mobile
    document.querySelectorAll('.navbar .dropdown > a').forEach(dropdownToggle => {
      dropdownToggle.addEventListener('click', function(e) {
        if (window.innerWidth <= 991) {
          e.preventDefault();
          const dropdown = this.parentElement;
          dropdown.classList.toggle('active');
        }
      });
    });
    
    // Close mobile menu when clicking on dropdown links
    document.querySelectorAll('.navbar .dropdown ul a').forEach(link => {
      link.addEventListener('click', function() {
        if (window.innerWidth <= 991 && navbar.classList.contains('mobile-nav-active')) {
          navbar.classList.remove('mobile-nav-active');
          body.classList.remove('mobile-nav-active');
          navToggle.classList.remove('active');
          // Close all dropdowns
          document.querySelectorAll('.navbar .dropdown').forEach(dropdown => {
            dropdown.classList.remove('active');
          });
        }
      });
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
      if (window.innerWidth > 991) {
        // Reset mobile navigation on desktop
        navbar.classList.remove('mobile-nav-active');
        body.classList.remove('mobile-nav-active');
        navToggle.classList.remove('active');
        document.querySelectorAll('.navbar .dropdown').forEach(dropdown => {
          dropdown.classList.remove('active');
        });
      }
    });
  }

  // Policy Tabs Functionality
  const policyTabBtns = document.querySelectorAll('.policy-tab-btn');
  const policyTabContents = document.querySelectorAll('.policy-tab-content');
  
  policyTabBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const targetTab = this.getAttribute('data-policy-tab');
      
      // Remove active class from all buttons
      policyTabBtns.forEach(b => {
        b.classList.remove('active');
        b.style.background = '#e0e0e0';
        b.style.color = 'var(--text-dark)';
      });
      
      // Remove active class from all contents
      policyTabContents.forEach(content => {
        content.classList.remove('active');
        content.style.display = 'none';
      });
      
      // Add active class to clicked button
      this.classList.add('active');
      this.style.background = 'var(--primary-green)';
      this.style.color = 'white';
      
      // Show corresponding content
      const targetContent = document.querySelector(`[data-policy-tab="${targetTab}"]`);
      if (targetContent && targetContent.classList.contains('policy-tab-content')) {
        targetContent.classList.add('active');
        targetContent.style.display = 'block';
      }
    });
  });

  // Thrust Sectors Functionality
  const viewMoreBtn = document.getElementById('viewMoreSectorsBtn');
  const additionalSectors = document.getElementById('additionalSectors');
  
  if (viewMoreBtn && additionalSectors) {
    viewMoreBtn.addEventListener('click', function() {
      if (additionalSectors.style.display === 'none' || additionalSectors.style.display === '') {
        additionalSectors.style.display = 'grid';
        this.innerHTML = '<span>➖ Show Less</span>';
      } else {
        additionalSectors.style.display = 'none';
        this.innerHTML = '<span>➕ View All 16 Sectors</span>';
      }
    });
  }

  // Thrust Sector Details
  document.querySelectorAll('.thrust-sector-item').forEach(item => {
    item.addEventListener('click', function() {
      const sectorId = this.getAttribute('data-thrust-sector');
      const detailsPanel = document.getElementById('thrustSectorDetails');
      
      if (thrustSectorDetails[sectorId] && detailsPanel) {
        const sector = thrustSectorDetails[sectorId];
        detailsPanel.innerHTML = `
          <h4 style="color: var(--primary-green); margin-bottom: 15px;">${sector.title}</h4>
          <p style="margin-bottom: 15px; line-height: 1.6;">${sector.description}</p>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-bottom: 15px;">
            <div>
              <h5 style="color: var(--primary-green); margin-bottom: 10px;">Key Opportunities</h5>
              <ul style="padding-left: 20px;">
                ${sector.opportunities.map(opp => `<li>${opp}</li>`).join('')}
              </ul>
            </div>
            <div>
              <h5 style="color: var(--primary-green); margin-bottom: 10px;">Investment Potential</h5>
              <p style="font-weight: 600; color: var(--text-dark);">${sector.investment}</p>
              <h5 style="color: var(--primary-green); margin-bottom: 10px; margin-top: 15px;">Employment</h5>
              <p style="font-weight: 600; color: var(--text-dark);">${sector.employment}</p>
            </div>
          </div>
        `;
        detailsPanel.style.display = 'block';
        detailsPanel.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }
    });
  });

  // Initialize projects
  renderProjects(projects);
});

// Projects functionality
function renderProjects(projectsToRender) {
  const grid = document.getElementById('projectsGrid');
  const startIndex = currentPage * projectsPerPage;
  const endIndex = startIndex + projectsPerPage;
  const pageProjects = projectsToRender.slice(startIndex, endIndex);
  
  if (grid) {
    grid.innerHTML = '';
    
    pageProjects.forEach(project => {
      const card = document.createElement('div');
      card.className = 'card';
      card.style.opacity = '0';
      card.style.transform = 'translateY(20px)';
      
      card.innerHTML = `
        <div class="card-img" style="background-image: url('${project.image}')"></div>
        <div class="card-content">
          <h3>${project.name}</h3>
          <p><strong>Location:</strong> ${project.location}</p>
          <p><strong>Investment:</strong> ₹${project.cost} Cr</p>
          <p><strong>Employment:</strong> ${project.employment}</p>
          <div style="margin-top: 15px;">
            <span class="card-tag card-tag-mode">${project.mode}</span>
          </div>
          <button onclick="openModal(${JSON.stringify(project).replace(/"/g, '&quot;')})" 
                  style="background: var(--primary-green); color: white; border: none; padding: 8px 16px; border-radius: 4px; cursor: pointer; margin-top: 15px; transition: all 0.3s ease;">
            View Details
          </button>
        </div>
      `;
      
      grid.appendChild(card);
      
      // Animate card appearance
      setTimeout(() => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
      }, 50);
    });
    
    // Update pagination info
    const pageInfo = document.getElementById('pageInfo');
    if (pageInfo) {
      const totalPages = Math.ceil(projectsToRender.length / projectsPerPage);
      pageInfo.textContent = `Page ${currentPage + 1} of ${totalPages}`;
    }
    
    // Update navigation buttons
    const prevBtn = document.getElementById('prevProjects');
    const nextBtn = document.getElementById('nextProjects');
    if (prevBtn) prevBtn.disabled = currentPage === 0;
    if (nextBtn) nextBtn.disabled = currentPage >= Math.ceil(projectsToRender.length / projectsPerPage) - 1;
  }
}

function navigateProjects(direction) {
  const filteredProjects = getFilteredProjects();
  const totalPages = Math.ceil(filteredProjects.length / projectsPerPage);
  
  if (direction === 'next' && currentPage < totalPages - 1) {
    currentPage++;
  } else if (direction === 'prev' && currentPage > 0) {
    currentPage--;
  }
  
  renderProjects(filteredProjects);
}

function getFilteredProjects() {
  const searchInput = document.getElementById('searchInput');
  const modeFilter = document.getElementById('modeFilter');
  
  if (!searchInput || !modeFilter) return projects;
  
  const search = searchInput.value.toLowerCase();
  const mode = modeFilter.value;

  return projects.filter(p => {
    return (
      (p.name.toLowerCase().includes(search) || p.location.toLowerCase().includes(search)) &&
      (mode === '' || p.mode === mode)
    );
  });
}

function filterProjects() {
  currentPage = 0; // Reset to first page when filtering
  renderProjects(getFilteredProjects());
}

function openModal(project) {
  const modal = document.getElementById('projectModal');
  if (modal) {
    document.getElementById('modalTitle').textContent = project.name;
    document.getElementById('modalLocation').textContent = project.location;
    document.getElementById('modalCost').textContent = project.cost;
    document.getElementById('modalMode').textContent = project.mode;
    document.getElementById('modalEmployment').textContent = project.employment;
    document.getElementById('modalSupport').textContent = project.support;
    document.getElementById('modalFeatures').textContent = project.features;
    modal.style.display = 'flex';
  }
}

function closeModal() {
  const modal = document.getElementById('projectModal');
  if (modal) {
    modal.style.display = 'none';
  }
}

// Close modal when clicking outside
window.addEventListener('click', function(event) {
  const modal = document.getElementById('projectModal');
  if (event.target === modal) {
    closeModal();
  }
});
</script>
@endpush
@endsection